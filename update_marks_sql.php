<?php
//echo '<link href="stylesheet.css" rel="stylesheet">';
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// include function folder
foreach (glob("functions/*.php") as $filename)
{
    include $filename;
}
$conn = OpenCon();
$course_id = $_GET['course'];
$component = $_GET['module'];
if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course_id'"))['course_ended']){
        header('Refresh: 0; URL=main.php?error=The course is marked ended, write access is not permitted&menu=display&module='.$component.'&course='.$course_id.'');
        exit();
    }
$stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course_id"));
$method = $_GET['method'];
if($method=='conventional'){
    $update_success = 0;
    $max_marks = mysqli_fetch_assoc($conn->query("SELECT $component FROM $course_id WHERE data_detail ='MaxMarks'"))[$component];
    for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
        $marks = floatval($_GET['marks'.$stu_id]);
        echo $max_marks;
        echo $marks;
        if ($marks > $max_marks){
            header('Refresh: 0; URL=main.php?menu=update&error=Obtain Marks is greater than Max Marks&course='.$course_id.'&module='.$component);
            exit();
        }
        // insert marks in quiz 
        $roll = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
        if ($roll == "") {
            echo "roll not exist";
            exit();
        }
        $sql= "UPDATE $course_id SET $component = '$marks' WHERE data_detail = '$roll';";
        $data = mysqli_query($conn,$sql) or die(mysqli_error());
        if ($data)
            $update_success=1;
        else 
            $update_success=0;
    }
    if ($update_success == 1) {
        echo "Marks updated Successfully";
        header('Refresh: 0; URL=main.php?menu=display&course='.$course_id.'&module='.$component);
    }
    else 
        echo "Failed to update marks";
}
else if($method=='rubric'){
    $delimeter = mysqli_real_escape_string($conn,":\^\:");
    $max_marks = mysqli_fetch_assoc($conn->query("SELECT $component FROM $course_id WHERE data_detail ='MaxMarks'"))[$component];
    $rubric_set_id_fetch = mysqli_fetch_assoc($conn->query("SELECT $component FROM $course_id WHERE data_detail ='rubric_set_id'"))[$component];
    $all_rubrics_fetch = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_sets FROM courses_info Where course_id='".$course_id."'"))['rubric_sets'];
    $all_rubrics_fetch = explode(":\^\:",$all_rubrics_fetch);
    for ($i=0;$i<count($all_rubrics_fetch);$i++){
        if($all_rubrics_fetch[$i]=="set_".$course_id."_".$rubric_set_id_fetch)
            $index = $i;
    }
    $rubric_name = $all_rubrics_fetch[$index+1];
	$rubric_count = $all_rubrics_fetch[$index+2];
	$rubric_level = $all_rubrics_fetch[$index+3];
    $update_status = 0;
    for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
		if ($rubric_level == 6){
        	$marks = 0;
        	$update_data ='';
			for ($i=0;$i<$rubric_count;$i++){
				$data_get = $_GET["rubric_val_".$i."_stu_id_".$stu_id];
				if ($data_get=='Exemplary')
					$marks += 5;
				if ($data_get=='Satisfactory')
					$marks += 4;
				if ($data_get=='Developing')
					$marks += 3;
				if ($data_get=='Unsatisfactory')
					$marks += 2;
				if ($data_get=='Unacceptable')
					$marks += 1;
				if ($data_get=='Absent')
					$marks += 0;
				$update_data = $update_data.$data_get.$delimeter;
			}
			$marks = $marks/($rubric_count*5)*$max_marks;
			$update_data = $update_data.$marks;
		}
		if ($rubric_level == 5){
        	$marks = 0;
        	$update_data ='';
			for ($i=0;$i<$rubric_count;$i++){
				$data_get = $_GET["rubric_val_".$i."_stu_id_".$stu_id];
				if ($data_get=='Exemplary')
					$marks += 5;
				if ($data_get=='Accomplished')
					$marks += 4;
				if ($data_get=='Developing')
					$marks += 3;
				if ($data_get=='Begining')
					$marks += 1;
				if ($data_get=='Absent')
					$marks += 0;
				$update_data = $update_data.$data_get.$delimeter;
			}
			$marks = $marks/($rubric_count*5)*$max_marks;
			$update_data = $update_data.$marks;
		}
		if ($rubric_level == 4){
        	$marks = 0;
        	$update_data ='';
			for ($i=0;$i<$rubric_count;$i++){
				$data_get = $_GET["rubric_val_".$i."_stu_id_".$stu_id];
				if ($data_get=='Exemplary')
					$marks += 5;
				if ($data_get=='Competent')
					$marks += 3;
				if ($data_get=='Developing')
					$marks += 1;
				if ($data_get=='Absent')
					$marks += 0;
				$update_data = $update_data.$data_get.$delimeter;
			}
			$marks = $marks/($rubric_count*5)*$max_marks;
			$update_data = $update_data.$marks;
		}
        
        $roll = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
        if(mysqli_query($conn,"UPDATE $course_id SET $component = '$update_data' WHERE data_detail = '$roll'"))
            $update_status=1;
    }
    if ($update_status == 1) {
        echo "Rubrics updated Successfully";
        header('Refresh: 0; URL=main.php?menu=display&course='.$course_id.'&module='.$component);
    }
    else 
        echo "Failed to update rubrics";
}
else{
    echo "Method missing";
    exit();
}
?>