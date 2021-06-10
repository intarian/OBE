<?php
    Print "<table class='w3-table'><tr><td><a href='reports/attendance_cumulative.php?course=$course' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print Cummulative Attendance</b></a></td></tr></table>";
    echo "<table class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white'>";
    echo "<tr>";
    echo "<th style=\"width:300px;\">Roll No</th><th> Name </th>";
    for ($i=0;$i<count($attendance_cols);$i++){
        $date =mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$i] FROM $course WHERE data_detail='Date'"))[$attendance_cols[$i]];
        echo "<th>".date_format(date_create($date),"d/m")."</th>";
    }
    echo "<th>Overall</th>";
    echo "</tr>";

    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course")); 
    $atten_cumm = atten_cumm_calc($course,$conn);
    for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
        $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
        $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name']; 
        echo "<tr>";
        echo "<td>".$rollno."</td>";
        echo "<td>".$name."</td>";
        for($i=0;$i<count($attendance_cols);$i++) {
			$current_status = mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$i] FROM $course WHERE data_detail='$rollno'"))[$attendance_cols[$i]];;
        	echo "<td>".$current_status."</td>";
		}
        echo "<td><strong>".number_format($atten_cumm[$stu_id],2)."</strong></td>";
        echo "</tr>";
    }
    echo "</table>"; 
?>