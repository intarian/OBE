<?php 
// This file computes scores obtained in each category of students by using the weightages set in the 
// course_info table. Sessional components contain quizez/assignments/project/other mid contains mid 
// questions and final contain final questions only. Weightages can be tweaked in course_info table
// Fetch weightages from course_info table
function course_cumm_calc($course_id,$grade_comp,$grade_weight,$conn){
$sql_col_list = mysqli_query($conn,"SHOW COLUMNS FROM $course_id");
$col_list_d = array();
while($col_list = mysqli_fetch_assoc($sql_col_list)){
    $col_list_d[] = $col_list['Field'];
}
// Use col list to calculate grades..I'm still thinking what this code should do :D
$quiz_cols = array();
$assign_cols = array();
$mid_cols = array();
$final_cols = array();
$other_cols = array(); 
$lab_cols = array();
$viva_cols = array();
$presentation_cols = array();
$project_cols = array();
for ($i=2; $i< count($col_list_d); $i++){ 
    $instrument = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id where data_detail='Instrument'"))[$col_list_d[$i]];
    if($instrument=='Quiz')
        $quiz_cols[]=$col_list_d[$i];
    if($instrument=='Assignment')
        $assign_cols[]=$col_list_d[$i];
    if($instrument=='Midterm')
        $mid_cols[]=$col_list_d[$i];
    if($instrument=='Final')
        $final_cols[]=$col_list_d[$i];
    if ($instrument=='Project')
        $project_cols[] = $col_list_d[$i];
    if ($instrument=='Other')
        $other_cols[] =$col_list_d[$i];
    if ($instrument=='VIVA')
        $viva_cols[] =$col_list_d[$i];
    if ($instrument=='Presentation')
        $presentation_cols[] =$col_list_d[$i];
    if ($instrument=='LAB')
        $lab_cols[] =$col_list_d[$i]; 
}
$stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course_id"));
    
    if($grade_comp=='Quiz'){
        // Quiz Cummulative Score display
        $quiz_cumm_avg = [];
        $marks_t = 0;
        for ($i=0;$i<count($quiz_cols);$i++)	
            $marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$quiz_cols[$i]]; //Find maxmarks for the quiz
            if ($marks_t!=0){
                for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                    $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
                    $marks_o = 0;
                    for ($i=0;$i<count($quiz_cols);$i++)
                        $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$quiz_cols[$i]];
                    $quiz_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
                }
            }
        return $quiz_cumm_avg;
    }
    if($grade_comp=='LAB'){
        // LAB Cummulative Score display
        $lab_cumm_avg = [];
        $marks_t = 0;
        for ($i=0;$i<count($lab_cols);$i++)	
            $marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$lab_cols[$i]]; 
            if ($marks_t!=0){
                for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                    $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
                    $marks_o = 0;
                    for ($i=0;$i<count($lab_cols);$i++){
                        $g_type = mysqli_fetch_assoc($conn->query("SELECT $lab_cols[$i] FROM $course_id WHERE data_detail='g_type'"))[$lab_cols[$i]];
                        if ($g_type=='rubric'){
                            $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$lab_cols[$i]];
                            $marks_o_ra = explode(":\^\:",$marks_o_r);
                            $marks_o += $marks_o_ra[count($marks_o_ra)-1];
                            
/*                            $rubric_set_id = mysqli_fetch_assoc($conn->query("SELECT $lab_cols[$i] FROM $course_id WHERE data_detail='rubric_set_id'"))[$lab_cols[$i]];
                            $all_rubrics_fetch = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_sets FROM course_info Where course_id='".$course_id."'"))['rubric_sets'];
                            $all_rubrics_fetch = explode(":\^\:",$all_rubrics_fetch);
                            for ($k=0;$k<count($all_rubrics_fetch);$k++){
                                if($all_rubrics_fetch[$k]=="set".$rubric_set_id_fetch)
                                $index = $k;
                                $rubric_count = $all_rubrics_fetch[$index+1];
                            }
                            $marks = explode(":\^\:",mysqli_fetch_assoc($conn->query("SELECT $lab_cols[$i] FROM $course_id WHERE data_detail='$roll_no'"))[$lab_cols[$i]]);
                            $marks_o += $marks[$rubric_count]; */
                        }
                        else
                            $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$lab_cols[$i]];
                    }
                    $lab_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
                }
            }
        return $lab_cumm_avg;
    }
    if($grade_comp=='Project'){
        // Project Cummulative Score display
        $project_cumm_avg = [];
        $marks_t = 0;
        for ($i=0;$i<count($project_cols);$i++)	
            $marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$project_cols[$i]]; 
            if ($marks_t!=0){
                for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                    $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
                    $marks_o = 0;
                    for ($i=0;$i<count($project_cols);$i++){
                        $g_type = mysqli_fetch_assoc($conn->query("SELECT $project_cols[$i] FROM $course_id WHERE data_detail='g_type'"))[$project_cols[$i]];
                        if ($g_type=='rubric'){
                            $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$project_cols[$i]];
                            $marks_o_ra = explode(":\^\:",$marks_o_r);
                            $marks_o += $marks_o_ra[count($marks_o_ra)-1];
                        }
                        else
                            $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$project_cols[$i]];
                    }
                    $project_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
                }
            }		 
        return $project_cumm_avg;
    }
    if($grade_comp=='VIVA'){
        // VIVA Cummulative Score display
        $viva_cumm_avg = [];
        $marks_t = 0;
        for ($i=0;$i<count($viva_cols);$i++)	
            $marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$viva_cols[$i]]; 
            if ($marks_t!=0){
                for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                    $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
                    $marks_o = 0;
                    for ($i=0;$i<count($viva_cols);$i++){
                        $g_type = mysqli_fetch_assoc($conn->query("SELECT $viva_cols[$i] FROM $course_id WHERE data_detail='g_type'"))[$viva_cols[$i]];
                        if ($g_type=='rubric'){
                            $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$viva_cols[$i]];
                            $marks_o_ra = explode(":\^\:",$marks_o_r);
                            $marks_o += $marks_o_ra[count($marks_o_ra)-1];
                        }
                        else
                            $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$viva_cols[$i]];
                    }
                    $viva_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
                }
            }		 
        return $viva_cumm_avg;
    }
    if($grade_comp=='Presentation'){
        // Presentation Cummulative Score display
        $presentation_cumm_avg = [];
        $marks_t = 0;
        for ($i=0;$i<count($presentation_cols);$i++)	
            $marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$presentation_cols[$i]]; 
            if ($marks_t!=0){
                for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                    $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
                    $marks_o = 0;
                    for ($i=0;$i<count($presentation_cols);$i++){
                        $g_type = mysqli_fetch_assoc($conn->query("SELECT $presentation_cols[$i] FROM $course_id WHERE data_detail='g_type'"))[$presentation_cols[$i]];
                        if ($g_type=='rubric'){
                            $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$presentation_cols[$i]];
                            $marks_o_ra = explode(":\^\:",$marks_o_r);
                            $marks_o += $marks_o_ra[count($marks_o_ra)-1];
                        }
                        else
                            $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$presentation_cols[$i]];
                    }
                    $presentation_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
                }
            }		 
        return $presentation_cumm_avg;
    }
    if($grade_comp=='Assignment'){
        // Assignment Cummulative Score display
        $assign_cumm_avg = [];
        $marks_t = 0;
        for ($i=0;$i<count($assign_cols);$i++)	
            $marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$assign_cols[$i]];
            if ($marks_t!=0){
                for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                    $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
                    $marks_o = 0;
                    for ($i=0;$i<count($assign_cols);$i++)
                        $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$assign_cols[$i]];
                    $assign_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
                }
            }
        return $assign_cumm_avg;
    }
    if($grade_comp=='Other'){
        // Other Cummulative Score display
        $other_cumm_avg = [];
        $marks_t = 0;
        for ($i=0;$i<count($other_cols);$i++)	
            $marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$other_cols[$i]];
            if ($marks_t!=0){
                for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                    $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
                    $marks_o = 0;
                    for ($i=0;$i<count($other_cols);$i++){
                        $g_type = mysqli_fetch_assoc($conn->query("SELECT $other_cols[$i] FROM $course_id WHERE data_detail='g_type'"))[$other_cols[$i]];
                        if ($g_type=='rubric'){
                            $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$other_cols[$i]];
                            $marks_o_ra = explode(":\^\:",$marks_o_r);
                            $marks_o += $marks_o_ra[count($marks_o_ra)-1];
                        }
                        else
                            $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$other_cols[$i]];
                    }
                    $other_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
                }
            }
        return $other_cumm_avg;
    }
/*
// Sessional Cummulative Display
$sess_cumm_avg = [];
for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
		$roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
		$sess_cumm_avg[$stu_id] = $assign_cumm_avg[$stu_id]+$quiz_cumm_avg[$stu_id]+$lab_cumm_avg[$stu_id]+$project_cumm_avg[$stu_id]+$other_cumm_avg[$stu_id];

	} 
return $sess_cumm_avg;	
*/

if($grade_comp=='Mid'){
// Midterm Cummulative 
// new code
$mid_cumm_avg = [];
$marks_t = 0;
for ($i=0;$i<count($mid_cols);$i++)	
	$marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$mid_cols[$i]];
    if ($marks_t!=0){
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
            $marks_o = 0;
            for ($i=0;$i<count($mid_cols);$i++)
                $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$mid_cols[$i]];
            $mid_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
        }
    }
    return $mid_cumm_avg;
}


if($grade_comp=='Final'){ 
// Finalterm Cummulative Display
// new code
$final_cumm_avg = [];
$marks_t = 0;
for ($i=0;$i<count($final_cols);$i++)	
	$marks_t += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$final_cols[$i]];
    if ($marks_t!=0){
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
            $marks_o = 0;
            for ($i=0;$i<count($final_cols);$i++)
                $marks_o += mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$final_cols[$i]];
            $final_cumm_avg[$stu_id] = ($marks_o/$marks_t)*$grade_weight;
        }
    }
    return $final_cumm_avg;
}
  
}
 ?>
