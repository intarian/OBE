<?php
	//Find column name with matching parameter
    $course = $_GET['course'];
    $col_name=$_GET['module'];
    if ($error)
        echo "<h4 align=\"center\" class=\"w3-text-red\">Error: $error </h4>";
    if($col_name != ''){
        $qpart = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='QuesPart'"))[$col_name];
        $instrument = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='Instrument'"))[$col_name];
        $question = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='Question'"))[$col_name];
    }
    else{
        $instrument = $_GET['instrument'];
	    $question = $_GET['question'];
        $qpart = $_GET['qpart'];
        $col_name = ColFind($course,$instrument,$question,$qpart,$conn);
    }
	if ($col_name=='')
		echo "Module not found";
	else {
	$max_marks =mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='MaxMarks'"))[$col_name];
	$clo = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='CLO'"))[$col_name];
    $g_type = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='g_type'"))[$col_name];
    Print "<table width='100%'' border='0'>";
  	Print "<tbody>";
    Print "<tr>";
    if ($g_type!='rubric')
        Print "<td><a href='reports/module_display_result.php?course=$course&module_id=$col_name' target='_blank'><em class=\"fa fa-file-pdf-o fa-fw\"></em></td>";
    Print "<td><h5>Marks Obtained in <strong>".$instrument." ".$question.$qpart."</strong> having a Maximum of <strong>".$max_marks."</strong> marks and belongs to CLO <strong>".$clo."</h5></td>";
    Print "<td><a href='main.php?menu=update&course=".$course."&instrument=".$instrument."&question=".$question."&qpart=".$qpart."'>Update marks</a></td>";
    Print "</tr>";
  	
    if($g_type=='rubric'){
        //Print "<tr><td><a href='reports/rubric_evaluation_sheet.php?course=$course&module=$col_name' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print Rubric Evaluation Sheet</b></td></tr>";
        Print "<tr><td><a href='reports/rubric_module_obtained.php?course=$course&module=$col_name' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print Rubric Performance Report</b></td></tr>";
        
        $rubric_set_id_fetch = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='rubric_set_id'"))[$col_name];
        $all_rubrics_fetch = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_sets FROM courses_info Where course_id='".$course."'"))['rubric_sets'];
        $all_rubrics_fetch = explode(":\^\:",$all_rubrics_fetch);
        for ($i=0;$i<count($all_rubrics_fetch);$i++){
            if($all_rubrics_fetch[$i]=="set_".$course."_".$rubric_set_id_fetch)
                $index = $i;
        $rubric_name = $all_rubrics_fetch[$index+1];
		$rubric_count = $all_rubrics_fetch[$index+2];
		$rubric_level = $all_rubrics_fetch[$index+3];
        }
    }
    Print "</tbody>";
	Print "</table>";
	Print "<table class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white' style='margin-top:10px;'>";
	Print "<th>Roll No</th> <th>Name</th> <th>Obtained Marks</th>";
    // Display data of selected module all student
	$stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));
	for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
		$rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
		$name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
        if($g_type=='rubric'){
            $marks = explode(":\^\:",mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='$rollno'"))[$col_name]);
            $marks_o = $marks[$rubric_count];
        }
        else
            $marks_o = mysqli_fetch_assoc($conn->query("SELECT ".$col_name." FROM $course WHERE serial = $stu_id"))[$col_name];
 		Print "<tr>"; 
 		Print "<td>".$rollno ."</td> ";
 		Print "<td>".$name . "</td> ";
 		Print "<td >".number_format($marks_o, 1) . " </td>";
 		Print "</tr>"; 
 	}
	Print "</table>";
	}
?>