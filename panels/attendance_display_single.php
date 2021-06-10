<?php
	//Find column name with matching parameter
    $course = $_GET['course'];
    $col_name = $_GET['module'];
	$date =mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='Date'"))[$col_name];
    
    // Get data of attendance details of all students
	$stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));
    $roll_list = array();
    $name_list = array();
    $attendance_list = array();
    $present_count = 0;
    $leave_count = 0;
    $absent_count = 0;
	for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
		$rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
        $roll_list[] = $rollno;
		$name_list[] = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
		$attendance_status = mysqli_fetch_assoc($conn->query("SELECT ".$col_name." FROM $course WHERE serial = $stu_id"))[$col_name];
        $attendance_list[] = $attendance_status;
        if ($attendance_status=='P')
            $present_count++;
        if ($attendance_status=='L')
            $leave_count++;
        if ($attendance_status=='A' || $attendance_status=='')
            $absent_count++;
    }
	Print "<table width='100%'' border='0'>";
  	Print "<tbody>";
    Print "<tr>";
    Print "<td colspan=2><h5><a href='reports/attendance_report_daily.php?course=$course&module_id=$col_name' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em></b></a>Attendance for <strong>".date_format(date_create($date),"d/m/Y")."</strong></h5></td>";
    Print "<td><a href='main.php?menu=update_attendance&course=".$course."&module=".$col_name."'>Update Attendance</a></td>";
    Print "</tr>";
  	Print "</tbody>";
    Print "<tr><td><strong>No. of Students Present: ".$present_count."</strong></td>";
    Print "<td><strong>No. of Students Absent: ".$absent_count."</strong></td>";
    Print "<td><strong>No. of Students on Leave: ".$leave_count."</strong></td></tr>";
	Print "</table>";
	
	
    Print "<table class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white'>";
	Print "<th>Roll No</th> <th>Name</th> <th>Attendance Status</th>";
    for ($id=0;$id<($present_count+$absent_count+$leave_count);$id++){
 		Print "<tr>"; 
 		Print "<td>".$roll_list[$id]."</td> ";
 		Print "<td>".$name_list[$id]. "</td> ";
 		Print "<td >".$attendance_list[$id]." </td>";
 		Print "</tr>"; 
 	}
	Print "</table>";
?>