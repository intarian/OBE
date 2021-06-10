<?php 
// This file computes total attendance percentage for all students
function atten_cumm_calc($course_id,$conn){
$atten_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT atten_weight FROM courses_info WHERE course_id='$course_id'"))['atten_weight'];
$sql_col_list = mysqli_query($conn,"SHOW COLUMNS FROM $course_id");
$col_list_d = array();
while($col_list = mysqli_fetch_assoc($sql_col_list)){
    $col_list_d[] = $col_list['Field'];
}
// Use col list to find columns of each instrument
$attendance_cols = array(); 
for ($i=2; $i< count($col_list_d); $i++){ 
    $instrument = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course_id where data_detail='Instrument'"))[$col_list_d[$i]];
    if($instrument=='Attendance')
        $attendance_cols[]=$col_list_d[$i];
}

$stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course_id"));

// Attendance Cummulative Score display
$attendance_cumm_avg = [];
$marks_t = 0;
for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
        $roll_no = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
        $status_count = 0;
        for ($i=0;$i<count($attendance_cols);$i++){
            $status = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $attendance_cols[$i] FROM $course_id WHERE data_detail ='$roll_no'"))[$attendance_cols[$i]];
            if ($status =='P' || $status=='L')
                $status_count ++;
        }
        $attendaance_cumm_avg[$stu_id] = ($status_count/count($attendance_cols))*100;
    }
    return $attendaance_cumm_avg;
}
 ?>
