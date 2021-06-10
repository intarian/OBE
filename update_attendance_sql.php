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
        header('Refresh: 0; URL=main.php?error=The course is marked ended, write access is not permitted&menu=atten_display&module='.$component.'&course='.$course_id.'');
        exit();
    }
$stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course_id"));
$update_success = 0;
for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
$status = $_GET['atten_status'.$stu_id];

$roll = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
if ($roll == "") {
	echo "roll not exist";
	exit();
}
$sql= "UPDATE $course_id SET $component = '$status' WHERE data_detail = '$roll';";
$data = mysqli_query($conn,$sql) or die(mysqli_error());
if ($data)
	$update_success=1;
else 
	$update_success=0;
}
if ($update_success == 1) {
	echo "Attendance updated Successfully";
	header('Refresh: 0; URL=main.php?menu=atten_display&course='.$course_id.'&module='.$component);
}
else 
	echo "Failed to update attendance";
?>