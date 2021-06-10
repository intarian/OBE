<?php //CLO Calculator improved version
    function clo_attain_single($course_id,$clo,$parameter,$roll_no,$conn){
    // Find Grade Component Weightages
	$mid_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT mid_weight FROM courses_info WHERE course_id='$course_id'"))['mid_weight'];
	$final_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT final_weight FROM courses_info WHERE course_id='$course_id'"))['final_weight'];
	$quiz_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quiz_weight FROM courses_info WHERE course_id='$course_id'"))['quiz_weight'];
	$assign_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT assign_weight FROM courses_info WHERE course_id='$course_id'"))['assign_weight'];
	$project_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT project_weight FROM courses_info WHERE course_id='$course_id'"))['project_weight'];
    $viva_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT viva_weight FROM courses_info WHERE course_id='$course_id'"))['viva_weight'];
    $presentation_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT presentation_weight FROM courses_info WHERE course_id='$course_id'"))['presentation_weight'];
	$other_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT other_weight FROM courses_info WHERE course_id='$course_id'"))['other_weight'];
    $lab_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT lab_weight FROM courses_info WHERE course_id='$course_id'"))['lab_weight'];
	
    //Fetch total list of CLOs from cols
    // Fetch total available cols
    $sql_col_list = mysqli_query($conn,"SHOW COLUMNS FROM $course_id");
	$col_list_d = array();
	while($col_list = mysqli_fetch_assoc($sql_col_list)){
		$col_list_d[] = $col_list['Field'];
	}
    

    //Find cols of all Grading components
	// Use col list to find cols of diff grading components
	$quiz_cols = array();
	$assign_cols = array();
	$mid_cols = array();
	$final_cols = array();
    $other_cols = array();
    $viva_cols = array();
    $presentation_cols = array();
    $lab_cols = array();
    $project_cols = array();
    
    $mid_cols_clo = array();
    $quiz_cols_clo = array();
    $assign_cols_clo = array();
    $other_cols_clo = array();
    $final_cols_clo = array();
    $lab_cols_clo = array();
    $viva_cols_clo = array();
    $presentation_cols_clo = array();
    $project_cols_clo = array();
        
    $marks_t_all_quiz = 0;
    $marks_o_clo_quiz = 0;
    $marks_t_clo_quiz = 0;
	$marks_t_all_assign = 0;
    $marks_o_clo_assign = 0;
    $marks_t_clo_assign = 0;
	$marks_t_all_mid = 0;
    $marks_o_clo_mid = 0;
    $marks_t_clo_mid = 0;
	$marks_t_all_final = 0;
    $marks_o_clo_final = 0;
    $marks_t_clo_final = 0;
	$marks_t_all_lab = 0;
    $marks_o_clo_lab = 0;
    $marks_t_clo_lab = 0;
	$marks_t_all_project = 0;
    $marks_o_clo_project = 0;
    $marks_t_clo_project = 0;
	$marks_t_all_viva = 0;
    $marks_o_clo_viva = 0;
    $marks_t_clo_viva = 0;
	$marks_t_all_presentation = 0;
    $marks_o_clo_presentation = 0;
    $marks_t_clo_presentation = 0;
	$marks_t_all_other = 0;
    $marks_o_clo_other = 0;
    $marks_t_clo_other = 0;
        
	for ($i=2; $i< count($col_list_d); $i++){ 
		$instrument = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id where data_detail='Instrument'"))[$col_list_d[$i]];
        $clo_get = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id where data_detail='CLO'"))[$col_list_d[$i]];
        
		if($instrument=='Quiz'){
            $quiz_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_quiz += $marks_t;
			
            if ($clo_get == $clo){
                $quiz_cols_clo[] =$col_list_d[$i];
				$marks_t_clo_quiz += $marks_t;
				$marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
				$marks_o_clo_quiz += $marks_o;
			}
        }
		if($instrument=='Assignment'){
            $assign_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_assign += $marks_t;
			
            if ($clo_get == $clo){
                $assign_cols_clo[] =$col_list_d[$i];
				$marks_t_clo_assign += $marks_t;
				$marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
				$marks_o_clo_assign += $marks_o;
			}
        }
		if($instrument=='Midterm'){
            $mid_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_mid += $marks_t;
			
            if ($clo_get == $clo){
                $mid_cols_clo[] =$col_list_d[$i];
				$marks_t_clo_mid += $marks_t;
				$marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
				$marks_o_clo_mid += $marks_o;
			}
        }
		if($instrument=='Final'){
            $final_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_final += $marks_t;
			
            if ($clo_get == $clo){
                $final_cols_clo[] =$col_list_d[$i];
				$marks_t_clo_final += $marks_t;
				$marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
				$marks_o_clo_final += $marks_o;
			}
        }
		if($instrument=='Other'){
            $other_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_other += $marks_t;
			
            if ($clo_get == $clo){
                $other_cols_clo[] =$col_list_d[$i];
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $col_list_d[$i] FROM $course_id WHERE data_detail='g_type'"))[$col_list_d[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_o = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
                $marks_t_clo_other += $marks_t;
				$marks_o_clo_other += $marks_o;
			}
        }
		if($instrument=='LAB'){
            $lab_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_lab += $marks_t;
			
            if ($clo_get == $clo){
                $lab_cols_clo[] =$col_list_d[$i];
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $col_list_d[$i] FROM $course_id WHERE data_detail='g_type'"))[$col_list_d[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_o = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
				$marks_t_clo_lab += $marks_t;
				$marks_o_clo_lab += $marks_o;
			}
        }
		if($instrument=='Project'){
            $project_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_project += $marks_t;
			
            if ($clo_get == $clo){
                $project_cols_clo[] =$col_list_d[$i];
				$marks_t_clo_project += $marks_t;
				$marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
				$marks_o_clo_project += $marks_o;
			}
        }
        if($instrument=='VIVA'){
            $viva_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_viva += $marks_t;
			
            if ($clo_get == $clo){
                $viva_cols_clo[] =$col_list_d[$i];
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $col_list_d[$i] FROM $course_id WHERE data_detail='g_type'"))[$col_list_d[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_o = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];

				$marks_t_clo_viva += $marks_t;
				$marks_o_clo_viva += $marks_o;
			}
        }
        if($instrument=='Presentation'){
            $presentation_cols[]=$col_list_d[$i];
            $marks_t = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='MaxMarks'"))[$col_list_d[$i]];
            $marks_t_all_presentation += $marks_t;
			
            if ($clo_get == $clo){
                $presentation_cols_clo[] =$col_list_d[$i];
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $col_list_d[$i] FROM $course_id WHERE data_detail='g_type'"))[$col_list_d[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_o = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_o = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$col_list_d[$i]];

				$marks_t_clo_presentation += $marks_t;
				$marks_o_clo_presentation += $marks_o;
			}
        }
    }
		

		if (count($quiz_cols_clo)>0){
			$marks_o_clo_quiz = (($marks_o_clo_quiz/$marks_t_clo_quiz)*(($marks_t_clo_quiz/$marks_t_all_quiz)*$quiz_weight));
			$marks_t_clo_quiz = ((($marks_t_clo_quiz/$marks_t_all_quiz)*$quiz_weight));
		}
		else{
			$marks_o_clo_quiz = 0;
			$marks_t_clo_quiz = 0;
		}
		if (count($assign_cols_clo)>0){
			$marks_o_clo_assign = (($marks_o_clo_assign/$marks_t_clo_assign)*(($marks_t_clo_assign/$marks_t_all_assign)*$assign_weight));
			$marks_t_clo_assign = ((($marks_t_clo_assign/$marks_t_all_assign)*$assign_weight));
		}
		else{
			$marks_o_clo_assign = 0;
		}
		if (count($final_cols_clo)>0){
			$marks_o_clo_final = (($marks_o_clo_final/$marks_t_clo_final)*(($marks_t_clo_final/$marks_t_all_final)*$final_weight));
			$marks_t_clo_final = ((($marks_t_clo_final/$marks_t_all_final)*$final_weight));
		}
		else{
			$marks_o_clo_final = 0;
		}
		if (count($mid_cols_clo)>0){
			$marks_o_clo_mid = (($marks_o_clo_mid/$marks_t_clo_mid)*(($marks_t_clo_mid/$marks_t_all_mid)*$mid_weight));
			$marks_t_clo_mid = ((($marks_t_clo_mid/$marks_t_all_mid)*$mid_weight));
		}
		else{
			$marks_o_clo_mid = 0;
		}
		if (count($lab_cols_clo)>0){
			$marks_o_clo_lab = (($marks_o_clo_lab/$marks_t_clo_lab)*(($marks_t_clo_lab/$marks_t_all_lab)*$lab_weight));
			$marks_t_clo_lab = ((($marks_t_clo_lab/$marks_t_all_lab)*$lab_weight));
		}
		else{
			$marks_o_clo_lab = 0;
		}
		if (count($project_cols_clo)>0){
			$marks_o_clo_project = (($marks_o_clo_project/$marks_t_clo_project)*(($marks_t_clo_project/$marks_t_all_project)*$project_weight));
			$marks_t_clo_project = ((($marks_t_clo_project/$marks_t_all_project)*$project_weight));
		}
		else{
			$marks_o_clo_project = 0;
		}
        if (count($viva_cols_clo)>0){
			$marks_o_clo_viva = (($marks_o_clo_viva/$marks_t_clo_viva)*(($marks_t_clo_viva/$marks_t_all_viva)*$viva_weight));
			$marks_t_clo_viva = ((($marks_t_clo_viva/$marks_t_all_viva)*$viva_weight));
		}
		else{
			$marks_o_clo_viva = 0;
		}
        if (count($presentation_cols_clo)>0){
			$marks_o_clo_presentation = (($marks_o_clo_presentation/$marks_t_clo_presentation)*(($marks_t_clo_presentation/$marks_t_all_presentation)*$presentation_weight));
			$marks_t_clo_presentation = ((($marks_t_clo_presentation/$marks_t_all_presentation)*$presentation_weight));
		}
		else{
			$marks_o_clo_presentation = 0;
		}
		if (count($other_cols_clo)>0){
			$marks_o_clo_other = (($marks_o_clo_other/$marks_t_clo_other)*(($marks_t_clo_other/$marks_t_all_other)*$other_weight));
			$marks_t_clo_other = ((($marks_t_clo_other/$marks_t_all_other)*$other_weight));
		}
		else{
			$marks_o_clo_other = 0;
		}
  
    $tot_marks_o_clo = $marks_o_clo_quiz+$marks_o_clo_assign+$marks_o_clo_mid+$marks_o_clo_final+$marks_o_clo_other+$marks_o_clo_lab+$marks_o_clo_viva+$marks_o_clo_presentation+$marks_o_clo_project;
        
    $tot_marks_t_clo = $marks_t_clo_quiz+$marks_t_clo_assign+$marks_t_clo_mid+$marks_t_clo_final+$marks_t_clo_other+$marks_t_clo_lab+$marks_t_clo_viva+$marks_t_clo_presentation+$marks_t_clo_project;
        
    $tot_percent_o_clo = round(($tot_marks_o_clo/$tot_marks_t_clo)*100,1,PHP_ROUND_HALF_UP);

    
    if($parameter == 'Percentage')
            return round($tot_percent_o_clo,1,PHP_ROUND_HALF_UP);

        
    if($parameter == 'Obtained_Marks')
            return round($tot_marks_o_clo,1,PHP_ROUND_HALF_UP);

    if($parameter == 'Total_Marks')
            return round($tot_marks_t_clo,1,PHP_ROUND_HALF_UP); 
}
    
?>