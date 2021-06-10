<?php
    $course=$_GET['course'];
	$col_name = $_GET['module'];
    $date =mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='Date'"))[$col_name];
	Print "<h3 align='center'>Update Attendance of <strong>".date_format(date_create($date),"d/m/Y")."</strong></h3>";
	Print "<form id='update_attendance' action='update_attendance_sql.php' method='get' >";
	Print "<table id='table' class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white update_table_attendance'>";
	Print "<th>Sr No.</th><th>Roll No</th> <th>Name</th> <th>Current Status</th>";
	$stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));
	for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
		$roll = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
		$name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$roll."'"))['name'];
		$current_status = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='$roll'"))[$col_name];
        if ($current_status=="")
            $current_status = 'A';
		Print "<tr>";
        $sr = $stu_id-14;
        Print "<td>".$sr."</font></td>";
		Print "<td>".$roll."</font></td>";
		Print "<td>".$name."</font></td>";
		Print "<td><input type='text' value=".$current_status." name='atten_status".$stu_id."'/></td>";
		Print "</tr>";
	}
	Print "</table>";
	Print "<table align='center' class='w3-striped w3-bordered  w3-hoverable'>";
	Print "<tr><td><input class='sub' type='submit' value='Update Attendance' /></td></tr>";
	Print "</table>";
    Print "<input type='hidden' name='course' value='".$course."'/>";
	Print "<input type='hidden' name='module' value='".$col_name."'/>";
    Print "</form>";
?>