<?php
    $instrument_s = $_GET['instrument_s'];
    $show_weights = $_GET['show_weights'];
    if ($show_weights != 1)
        $show_weights = 0;
?>
<?php if ($show_weights == 1): ?>
    <a href="main.php?menu=instrument_cumulative&course=<?php echo $course ?>&instrument_s=<?php echo $instrument_s ?>" class="w3-bar-item w3-button w3-border w3-hover-light-green w3-padding">Show Obtained Marks</a>
<?php else: ?>
    <a href="main.php?menu=instrument_cumulative&course=<?php echo $course ?>&instrument_s=<?php echo $instrument_s ?>&show_weights=1" class="w3-bar-item w3-button w3-border w3-hover-light-blue w3-padding">Show Weighted Marks</a>
<?php endif ?>
<br><br>
<?php
// This panel displays instrument cummulative score and each component weighted score
    
//Find column name with matching parameter
    $mid_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT mid_weight FROM courses_info WHERE course_id='$course'"))['mid_weight'];
    $final_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT final_weight FROM courses_info WHERE course_id='$course'"))['final_weight'];
    $quiz_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quiz_weight FROM courses_info WHERE course_id='$course'"))['quiz_weight'];
    $assign_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT assign_weight FROM courses_info WHERE course_id='$course'"))['assign_weight'];
    $project_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT project_weight FROM courses_info WHERE course_id='$course'"))['project_weight'];
    $lab_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT lab_weight FROM courses_info WHERE course_id='$course'"))['lab_weight'];
    $viva_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT viva_weight FROM courses_info WHERE course_id='$course'"))['viva_weight'];
    $presentation_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT presentation_weight FROM courses_info WHERE course_id='$course'"))['presentation_weight'];
    $other_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT other_weight FROM courses_info WHERE course_id='$course'"))['other_weight'];

//    Print "<table class='w3-table'><tr><td><a href='reports/Cummulative_attain_report.php?course=$course' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print Cummulative Result</b></a></td></tr></table>";

	
    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));

// Fetch all cols of specific instrument
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
        $instrument = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course where data_detail='Instrument'"))[$col_list_d[$i]];
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

    // Display table and marks
    Print "<table class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white'>";
    Print "<thead bgcolor=\"#8E8E8E\">";
    ///Print "<thead>";
    Print "<th>Roll No</th> <th>Name</th>";

// -------- //
// -------- //
// For Quiz //
// -------- //
// -------- //

    // fetch and display if instrument is Quiz
    if($instrument_s=='Quiz'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($quiz_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course where data_detail='Question'"))[$quiz_cols[$i]];
        asort($question);
        $quiz_cols = (array_values(array_replace(array_flip(array_keys($question)), $quiz_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($quiz_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$quiz_cols[$i]]; //Find maxmarks for the quiz
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($quiz_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course WHERE data_detail ='Question'"))[$quiz_cols[$i]]; //Instrument no
            //echo "SELECT $quiz_cols[$i] FROM $course WHERE data_detail ='Question'";
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$quiz_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$quiz_weight;  // Weighted marks in each quiz
            if ($show_weights == 1){
                Print "<th>Quiz ".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
            }
            else
                Print "<th>Quiz ".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
        }
        if ($show_weights == 1)
            Print "<th>Total ($quiz_weight) [W] </th>";
        else
            Print "<th>Total ($marks_t_sum) </th>";
        
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($quiz_cols);$i++){
                $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$quiz_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$quiz_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights == 1)
                    Print "<td>".number_format($marks_o_w,2)."</td>";
                else
                    Print "<td>".number_format(($marks_oi),2)."</td>";                
            }
            if ($show_weights == 1)
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s),2)."</td>";
                
            Print "</tr>";
        }
    }


// -------- //
// -------- //
// For Assignment //
// -------- //
// -------- //

    // fetch and display if instrument is Assignment
    if($instrument_s=='Assignment'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($assign_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course where data_detail='Question'"))[$assign_cols[$i]];
        asort($question);
        $assign_cols = (array_values(array_replace(array_flip(array_keys($question)), $assign_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($assign_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$assign_cols[$i]]; //Find maxmarks for the instrument
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($assign_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course WHERE data_detail ='Question'"))[$assign_cols[$i]]; //Instrument no
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$assign_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$assign_weight;  // Weighted marks in each Assign
            if ($show_weights != 1){
                Print "<th>Assignment ".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
            }
            else
                Print "<th>Assignment ".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
        }
        if ($show_weights != 1)
            Print "<th>Total ($marks_t_sum) </th>";
        else
            Print "<th>Total ($assign_weight) [W] </th>";  
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($assign_cols);$i++){
                $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$assign_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$assign_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights != 1)
                    Print "<td>".number_format(($marks_oi),2)."</td>";
                else
                    Print "<td>".number_format($marks_o_w,2)."</td>";
            }
            if ($show_weights != 1)
                Print "<td>".number_format(($marks_o_s),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            Print "</tr>";
        }
    }


// -------- //
// -------- //
// For VIVA //
// -------- //
// -------- //

    // fetch and display if instrument is VIVA  //add rubrics info
    if($instrument_s=='VIVA'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($viva_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course where data_detail='Question'"))[$viva_cols[$i]];
        asort($question);
        $viva_cols = (array_values(array_replace(array_flip(array_keys($question)), $viva_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($viva_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$viva_cols[$i]]; //Find maxmarks for the viva
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($viva_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course WHERE data_detail ='Question'"))[$viva_cols[$i]]; //Instrument no
            //echo "SELECT $viva_cols[$i] FROM $course WHERE data_detail ='Question'";
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$viva_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$viva_weight;  // Weighted marks in each viva
            if ($show_weights != 1)
                Print "<th>VIVA &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
            else            
                Print "<th>VIVA &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
        }
        if ($show_weights != 1)
            Print "<th>Total ($marks_t_sum) </th>";
        else
            Print "<th>Total ($viva_weight) [W] </th>";
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($viva_cols);$i++){
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $viva_cols[$i] FROM $course WHERE data_detail='g_type'"))[$viva_cols[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$viva_cols[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_oi = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$viva_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$viva_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights != 1)
                    Print "<td>".number_format(($marks_oi),2)."</td>";
                else
                    Print "<td>".number_format($marks_o_w,2)."</td>";
            }
            if ($show_weights != 1)
                Print "<td>".number_format(($marks_o_s),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            Print "</tr>";
        }
    }




// -------- //
// -------- //
// For Project //
// -------- //
// -------- //

    // fetch and display if instrument is Project //add rubrics info
    if($instrument_s=='Project'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($project_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course where data_detail='Question'"))[$project_cols[$i]];
        asort($question);
        $project_cols = (array_values(array_replace(array_flip(array_keys($question)), $project_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($project_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$project_cols[$i]]; //Find maxmarks for the project
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($project_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course WHERE data_detail ='Question'"))[$project_cols[$i]]; //Instrument no
            //echo "SELECT $project_cols[$i] FROM $course WHERE data_detail ='Question'";
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$project_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$project_weight;  // Weighted marks in each project
            if ($show_weights != 1)
                Print "<th>Project &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
            else
                Print "<th>Project &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
        }
        if ($show_weights != 1)
            Print "<th>Total ($marks_t_sum) </th>";
        else
            Print "<th>Total ($project_weight) [W] </th>";
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($project_cols);$i++){
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $project_cols[$i] FROM $course WHERE data_detail='g_type'"))[$project_cols[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$project_cols[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_oi = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$project_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$project_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights != 1)
                    Print "<td>".number_format(($marks_oi),2)."</td>";
                else
                    Print "<td>".number_format($marks_o_w,2)."</td>";
            }
            if ($show_weights != 1)
                Print "<td>".number_format(($marks_o_s),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            Print "</tr>";
        }
    }


// -------- //
// -------- //
// For Other //
// -------- //
// -------- //

    // fetch and display if instrument is Other  //add rubrics info
    if($instrument_s=='Other'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($other_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course where data_detail='Question'"))[$other_cols[$i]];
        asort($question);
        $other_cols = (array_values(array_replace(array_flip(array_keys($question)), $other_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($other_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$other_cols[$i]]; //Find maxmarks for the other
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($other_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course WHERE data_detail ='Question'"))[$other_cols[$i]]; //Instrument no
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$other_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$other_weight;  // Weighted marks in each other
            if ($show_weights != 1)
                Print "<th>Other &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
            
            else
                Print "<th>Other &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
        }
        if ($show_weights != 1)
            Print "<th>Total ($marks_t_sum) </th>";
        else
            Print "<th>Total ($other_weight) [W] </th>";
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($other_cols);$i++){
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $other_cols[$i] FROM $course WHERE data_detail='g_type'"))[$other_cols[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$other_cols[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_oi = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$other_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$other_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights != 1)
                    Print "<td>".number_format(($marks_oi),2)."</td>";
                else
                    Print "<td>".number_format($marks_o_w,2)."</td>";
            }
            if ($show_weights != 1)
                Print "<td>".number_format(($marks_o_s),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            Print "</tr>";
        }
    }




// -------- //
// -------- //
// For Presentation //
// -------- //
// -------- //

    // fetch and display if instrument is Presentation. add rubrics info too
    if($instrument_s=='Presentation'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($presentation_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course where data_detail='Question'"))[$presentation_cols[$i]];
        asort($question);
        $presentation_cols = (array_values(array_replace(array_flip(array_keys($question)), $presentation_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($presentation_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$presentation_cols[$i]]; //Find maxmarks for the presentation
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($presentation_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course WHERE data_detail ='Question'"))[$presentation_cols[$i]]; //Instrument no
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$presentation_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$presentation_weight;  // Weighted marks in each presentation
            if ($show_weights != 1)
                Print "<th>Presentation &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
            else
                Print "<th>Presentation &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
        }
        if ($show_weights != 1)
            Print "<th>Total ($marks_t_sum) </th>";
        else
            Print "<th>Total ($presentation_weight) [W] </th>";
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($presentation_cols);$i++){
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $presentation_cols[$i] FROM $course WHERE data_detail='g_type'"))[$presentation_cols[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$presentation_cols[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_oi = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$presentation_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$presentation_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights != 1)
                    Print "<td>".number_format(($marks_oi),2)."</td>";
                else
                    Print "<td>".number_format($marks_o_w,2)."</td>";
            }
            if ($show_weights != 1)
                Print "<td>".number_format(($marks_o_s),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            Print "</tr>";
        }
    }


// -------- //
// -------- //
// For LAB //
// -------- //
// -------- //

    // fetch and display if instrument is LAB Experiments. add rubrics info too
    if($instrument_s=='LAB'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($lab_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course where data_detail='Question'"))[$lab_cols[$i]];
        asort($question);
        $lab_cols = (array_values(array_replace(array_flip(array_keys($question)), $lab_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($lab_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$lab_cols[$i]]; //Find maxmarks for the lab
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($lab_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course WHERE data_detail ='Question'"))[$lab_cols[$i]]; //Instrument no
            //echo "SELECT $lab_cols[$i] FROM $course WHERE data_detail ='Question'";
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$lab_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$lab_weight;  // Weighted marks in each lab
            if ($show_weights != 1)
                Print "<th>LAB &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
            else
                Print "<th>LAB &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
        }
        if ($show_weights != 1)
            Print "<th>Total ($marks_t_sum) </th>";
        else
            Print "<th>Total ($lab_weight) [W] </th>";
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($lab_cols);$i++){
                $g_type = mysqli_fetch_assoc($conn->query("SELECT $lab_cols[$i] FROM $course WHERE data_detail='g_type'"))[$lab_cols[$i]];
                if ($g_type=='rubric'){
                    $marks_o_r = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$lab_cols[$i]];
                    $marks_o_ra = explode(":\^\:",$marks_o_r);
                    $marks_oi = $marks_o_ra[count($marks_o_ra)-1];
                }
                else
                    $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$lab_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$lab_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights != 1)
                    Print "<td>".number_format(($marks_oi),2)."</td>";
                else
                    Print "<td>".number_format($marks_o_w,2)."</td>";
            }
            if ($show_weights != 1)
                Print "<td>".number_format(($marks_o_s),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            Print "</tr>";
        }
    }

// -------- //
// -------- //
// For Mids //
// -------- //
// -------- //

    // fetch and display if instrument is Mid-Term. add rubrics info too
    if($instrument_s=='Midterm'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($mid_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course where data_detail='Question'"))[$mid_cols[$i]];
        asort($question);
        $mid_cols = (array_values(array_replace(array_flip(array_keys($question)), $mid_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($mid_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$mid_cols[$i]]; //Find maxmarks for the mid
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($mid_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course WHERE data_detail ='Question'"))[$mid_cols[$i]]; //Instrument no
            //echo "SELECT $mid_cols[$i] FROM $course WHERE data_detail ='Question'";
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$mid_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$mid_weight;  // Weighted marks in each mid
            if ($show_weights != 1)
                Print "<th>Question &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
            else
                Print "<th>Question &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
        }
        if ($show_weights != 1)
            Print "<th>Total ($marks_t_sum) </th>";
        else
            Print "<th>Total ($mid_weight) [W] </th>";
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($mid_cols);$i++){
                $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$mid_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$mid_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights != 1)
                    Print "<td>".number_format(($marks_oi),2)."</td>";
                else
                    Print "<td>".number_format($marks_o_w,2)."</td>";
            }
            if ($show_weights != 1)
                Print "<td>".number_format(($marks_o_s),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            Print "</tr>";
        }
    }


// -------- //
// -------- //
// For Final Term//
// -------- //
// -------- //

    // fetch and display if instrument is Final-Term. add rubrics info too
    if($instrument_s=='Final'){
        // For sorting question and their parts
        $question = [];
        for ($i=0; $i< count($final_cols); $i++)
            $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course where data_detail='Question'"))[$final_cols[$i]];
        asort($question);
        $final_cols = (array_values(array_replace(array_flip(array_keys($question)), $final_cols))); 
        
        // Instrument total score save
        $marks_t = array();
        for ($i=0;$i<count($final_cols);$i++){
            $marks_ti = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course WHERE data_detail ='MaxMarks'"))[$final_cols[$i]]; //Find maxmarks for the final
            $marks_t[]=$marks_ti;
            $marks_t_sum = array_sum($marks_t);  // total max marks sum
        }
        // Instrument heading display
        for ($i=0;$i<count($final_cols);$i++){
            $instrument_no = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course WHERE data_detail ='Question'"))[$final_cols[$i]]; //Instrument no
            //echo "SELECT $final_cols[$i] FROM $course WHERE data_detail ='Question'";
            $instrument_pno = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course WHERE data_detail ='QuesPart'"))[$final_cols[$i]]; //Instrument part no
            $marks_e_w = ($marks_t[$i]/$marks_t_sum)*$final_weight;  // Weighted marks in each final
            if ($show_weights != 1)
                Print "<th>Question &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_t[$i],2).")</th>";
            else
                Print "<th>Question &nbsp;".$instrument_no.$instrument_pno." (".number_format($marks_e_w,2).") [W]</th>";
        }
        if ($show_weights != 1)
            Print "<th>Total ($marks_t_sum) </th>";
        else
            Print "<th>Total ($final_weight) [W] </th>";
        Print "</thead>";
        Print "<tbody>";
        // Display marks and weighted marks
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            Print "<tr>";
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<td>".$rollno."</td>";
            Print "<td>".$name."</td>";
            $marks_o_s = 0;  // Sum obtained marks of each student and display under total
            $marks_o_s_w = 0;  // Sum obtained weighted marks of each student and display under total
            for ($i=0;$i<count($final_cols);$i++){
                $marks_oi = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course WHERE data_detail ='$rollno'"))[$final_cols[$i]]; //Find obtained marks
                $marks_o_w = ($marks_oi/$marks_t[$i]) * (($marks_t[$i]/$marks_t_sum)*$final_weight);
                $marks_o_s += $marks_oi;
                $marks_o_s_w += $marks_o_w;
                if ($show_weights != 1)
                    Print "<td>".number_format(($marks_oi),2)."</td>";
                else
                    Print "<td>".number_format($marks_o_w,2)."</td>";
            }
            if ($show_weights != 1)
                Print "<td>".number_format(($marks_o_s),2)."</td>";
            else
                Print "<td>".number_format(($marks_o_s_w),2)."</td>";
            Print "</tr>";
        }
    }

Print "</tbody>";
Print "</table>";
?>
