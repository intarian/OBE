<?php
//Find column name with matching parameter
    if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
        echo "<h5 align=\"center\" class=\"w3-text-red\"><strong>The course is marked ended</strong></h5>";
    }
	Print "<table class='w3-table w3-striped w3-bordered w3-border w3-white'>";
	//Print "<th>Course Description</th>";
    Print "<tr><td style=\"width:20%\"><b>Course Code: </b></td>";
    Print "<td style=\"width:80%\"><b>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course."'"))['course_code']."</b></td></tr>";

    Print "<tr><td><b>Course Title: </b></td>";
    Print "<td><b>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course."'"))['course_title']."</b></td></tr>";

    Print "<tr><td><b>Credit Hour: </b></td>";
    Print "<td><b>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT credit_hour FROM courses_info WHERE course_id='".$course."'"))['credit_hour']."</b></td></tr>";

    Print "<tr><td><b>Course Type: </b></td>";
    Print "<td><b>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_type FROM courses_info WHERE course_id='".$course."'"))['course_type']."</b></td></tr>";

    Print "<tr><td><b>Course Instructor: </b></td>";
    Print "<td><b>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT instructor FROM courses_info WHERE course_id='".$course."'"))['instructor']."</b></td></tr>";

    Print "<tr><td><b>Term: </b></td>";
    Print "<td><b>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT term_offer FROM courses_info WHERE course_id='".$course."'"))['term_offer']."</b></td></tr>";

    Print "<tr><td><b>Course Description: </b></td>";
    Print "<td>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_description FROM courses_info WHERE course_id='".$course."'"))['course_description']."</td></tr>";
	Print "</table>";
    Print "<br>";
    Print "<table class='w3-table w3-striped w3-bordered w3-border w3-white'>";
    Print "<th bgcolor=\"#deed9d\" colspan=\"2\"; style=\"text-align:center\";>Weightage Breakdown</th>";
	$mid_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT mid_weight FROM courses_info WHERE course_id='".$course."'"))['mid_weight'];
	$final_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT final_weight FROM courses_info WHERE course_id='".$course."'"))['final_weight'];
	$quiz_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quiz_weight FROM courses_info WHERE course_id='".$course."'"))['quiz_weight'];
	$assign_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT assign_weight FROM courses_info WHERE course_id='".$course."'"))['assign_weight'];
	$lab_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT lab_weight FROM courses_info WHERE course_id='".$course."'"))['lab_weight'];
	$project_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT project_weight FROM courses_info WHERE course_id='".$course."'"))['project_weight'];
    $viva_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT viva_weight FROM courses_info WHERE course_id='".$course."'"))['viva_weight'];
    $presentation_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT presentation_weight FROM courses_info WHERE course_id='".$course."'"))['presentation_weight'];
	$other_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT other_weight FROM courses_info WHERE course_id='".$course."'"))['other_weight'];
	$total_weight = $quiz_weight+$assign_weight+$lab_weight+$mid_weight+$final_weight+$project_weight+$other_weight+$viva_weight+$presentation_weight;
    Print "<tr><td style=\"width:50%\"><b>Mid Term</b></td>";
    Print "<td style=\"width:50%\">".$mid_weight."</td></tr>";

    Print "<tr><td><b>Final Term</b></td>";
    Print "<td>".$final_weight."</td></tr>";

    Print "<tr><td><b>Quizzes</b></td>";
    Print "<td>".$quiz_weight."</td></tr>";
    
    Print "<tr><td><b>Assignments</b></td>";
    Print "<td>".$assign_weight."</td></tr>";
    
	Print "<tr><td><b>LAB Experiments</b></td>";
    Print "<td>".$lab_weight."</td></tr>"; 
	
    Print "<tr><td><b>Project</b></td>";
    Print "<td>".$project_weight."</td></tr>";

    Print "<tr><td><b>VIVA</b></td>";
    Print "<td>".$viva_weight."</td></tr>";
    
    Print "<tr><td><b>Presentation</b></td>";
    Print "<td>".$presentation_weight."</td></tr>";

    Print "<tr><td><b>Others</b></td>";
    Print "<td>".$other_weight."</td></tr>";

    Print "<tr><td><b>Total</b></td>";
    Print "<td><strong>".$total_weight."</strong></td></tr>";

    Print "</table>";

	$clo_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT CLO_count FROM courses_info WHERE course_id='$course'"))['CLO_count'];
    $plo_enabled_data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT plos_enabled FROM courses_info WHERE course_id = '$course'"))['plos_enabled'];
    if ($plo_enabled_data){
        Print "<br>";
        Print "<table class='w3-table w3-bordered w3-border w3-white w3-topbar'>";
        Print "<tr><th colspan=\"4\"; style=\"text-align:center;\" bgcolor=\"#8dd487\"\">PLO/CLO Mapping</th><tr>";
        Print "<tr bgcolor='#9ba7e8'><th>PLO's</th><th>CLO's Mapped</th><th>Weightage</th></tr>";
        for ($k=1;$k<=12;$k++){
            $plo_list = mysqli_fetch_assoc(mysqli_query($conn,"SELECT PLO".$k." FROM courses_info WHERE course_id = '$course'"))['PLO'.$k];
            if($plo_list){
               $plo_clo_split = explode(":\^\:",$plo_list);
               Print "<tr>";
               Print "<td style=\"width:25%\"><b>PLO ".$k."</b></td>";      
               for ($j=0;$j<=count($plo_clo_split);$j+=2){                        
                    if ($j!=0){
                        Print "<tr>";
                        Print "<td style=\"width:25%\">";
                    }
                    Print "<td style=\"width:25%\">";
                    Print "<b>".$plo_clo_split[$j]."</b></td>";
                    Print "<td style=\"width:25%\">".$plo_clo_split[$j+1]."</td>";
                }
            }
        }

        Print "</table>";
    }
    $clo_descript = mysqli_fetch_assoc(mysqli_query($conn,"Select clo_details FROM courses_info Where course_id='".$course."'"))['clo_details'];
    if ($clo_descript){
        Print "<br>";
        Print "<table class='w3-table w3-bordered w3-border w3-white w3-topbar'>";
        Print "<tr bgcolor=\"#b79be8\"><th>CLO's</th><th style=\"text-align:center\";>CLO's Description</th><th>Taxonomy Level</th><tr>";
        $clo_descript = explode(":\^\:",$clo_descript);
        for ($i=0;$i<count($clo_descript);$i+=3){
            Print "<tr>";
            Print "<td style=\"width:10%\"><b>$clo_descript[$i]</b></td>";
            Print "<td style=\"width:70%\">".$clo_descript[$i+1]."</td>";
            Print "<td style=\"width:20%\">".$clo_descript[$i+2]."</td></tr>";
        }
        Print "</table>";
    }

    // Print Rubric Details
    $rubric_set_count = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_set_count FROM courses_info Where course_id='".$course."'"))['rubric_set_count'];
    if ($rubric_set_count>0){
        Print "<br>";
        Print "<table class='w3-table w3-bordered w3-border w3-white w3-topbar'>";
        Print "<tr bgcolor=\"#34ebb4\"><th colspan=\"6\"; style=\"text-align:center\";>Rubric Sets</th><tr>";
        
        Print "<tr><th colspan=\"1\"; style=\"text-align:center\";>ID</th><th colspan=\"1\"; style=\"text-align:center\";>Name</th> <th colspan=\"1\"; style=\"text-align:center\";>Level</th><th colspan=\"3\"; style=\"text-align:center\";>Criterion</th><tr>";
        $all_rubrics_fetch = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_sets FROM courses_info Where course_id='".$course."'"))['rubric_sets'];
        $all_rubrics_fetch = explode(":\^\:",$all_rubrics_fetch);
        for ($r=1;$r<=$rubric_set_count;$r++){
            Print "<tr>";
            Print "<td colspan=\"1\"; style=\"text-align:center\";><b>Set ".$r."</b>";
            Print "<a href='reports/rubric_evaluation_sheet.php?course=$course&set_id=$r' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em></b></td>";
            for ($e=0;$e<count($all_rubrics_fetch);$e++)
                if($all_rubrics_fetch[$e]=="set_".$course."_".$r)
                    $index = $e;
            $rubric_name = $all_rubrics_fetch[$index+1];
            $rubric_count = $all_rubrics_fetch[$index+2];
            $rubric_level = $all_rubrics_fetch[$index+3];
            Print "<td colspan=\"1\"; style=\"text-align:center\";>$rubric_name</td>";
            Print "<td colspan=\"1\"; style=\"text-align:center\";>$rubric_level</td>";
            Print "<td colspan=\"3\"; style=\"text-align:center\";>";
            for ($t=0;$t<$rubric_count;$t++){
                if ($t==$rubric_count-1)
                    Print $all_rubrics_fetch[$index+4+($rubric_level*$t)+$t]; //print last rubric value (hides comma at the end)
                else
                    Print $all_rubrics_fetch[$index+4+($rubric_level*$t)+$t].", ";
            }
            Print "</td></tr>";
        }
        Print "</table>";
    }
                                              