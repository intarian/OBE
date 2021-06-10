<?php
		$course = $_GET['course'];
		$col = $_GET['module'];
		$method = $_GET['method'];
        $date = $_GET['Date'];
		$clo_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT clo_count FROM courses_info WHERE course_id='$course'"))['clo_count'];
		if ($method=='update'){
            if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
                echo "<h5 align=\"center\" class=\"w3-text-red\">Error: The course is marked ended, write access is not permitted </h5>";
                exit();
            }
//			$max_marks = $_GET['max_marks'];
			$clo = $_GET['CLO_select'];
//			mysqli_query($conn,"UPDATE $course SET $col = $max_marks WHERE `data_detail` = 'MaxMarks'");
            mysqli_query($conn,"UPDATE $course SET $col = '$date' WHERE `data_detail` = 'Date'");
			mysqli_query($conn,"UPDATE $course SET $col = $clo WHERE `data_detail` = 'CLO'");
			echo "<div align='center'><p> Module Updated </p></div>";
			//header('Refresh: 0; URL=main.php?menu=module_edit&course='.$course.'&session='.$session.'&module='.$col.'');
			echo "<div align='center'><a href=\"main.php?menu=module_edit&course=".$course."&module=".$col."\"> Go Back </a></div>";
		}
		else {
			$course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course."'"))['course_code'];
		//	$instructor = mysqli_fetch_assoc(mysqli_query($conn,"SELECT instructor FROM course_info"."_".$session." WHERE course_id='".$course."'"))['instructor'];
			$m_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='Instrument'"))[$col];
			$m_number = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='Question'"))[$col]." ".mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='QuesPart'"))[$col];
			$max_marks = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='MaxMarks'"))[$col];
            $g_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='g_type'"))[$col];
            $cep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='cep'"))[$col];
            $rubric_set = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='rubric_set_id'"))[$col];
            $date = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='Date'"))[$col];
			echo "<form id=\"module_update\" method=\"get\" action=main.php >";
			echo	"<table class=\"w3-table w3-auto w3-bordered\">";
			echo 	"<tr><td><b>Course Code: </b></td>";
			echo		"<td><b> $course_code</b></td></tr>";
			echo		"<tr><td><b>Course Title: </b></td>";
			echo		"<td><b> $course_title </b></td></tr>";
	//		echo		"<tr><td><b>Course Instructor: </b></td>";
	//		echo		"<td><b> $instructor</b></td></tr>";
			echo		"<tr><td><b>Module Type: </b></td>";
			echo		"<td><b> $m_type</b></td></tr>";
            if ($m_type != 'Attendance'){
                echo		"<tr><td><b>Grading Type: </b></td>";
			    echo		"<td><b> ".ucfirst($g_type)."</b></td></tr>";
                if($g_type =='rubric'){
                    echo		"<tr><td><b>Rubric Set Id: </b></td>";
                    echo		"<td><b> $rubric_set</b></td></tr>";
                }
                echo		"<tr><td><b>Module Number: </b></td>";
			    echo		"<td><b> $m_number</b></td></tr>";
                echo 	    "<tr><td><b>Module Max Marks: </b></td>";
                echo		"<td><b>".$max_marks."</b></td></tr>";
                echo 	    "<tr><td><b>Complex Engineering Problem </b></td>";
                if ($cep==1)
			         echo	 "<td><b>Yes</b></td></tr>";
                else
                     echo	 "<td><b>No</b></td></tr>";
            }
            echo 	    "<tr><td><b>Module Date: </b></td>";
			echo		"<td><input type=\"date\" name=\"Date\" value=\"$date\"></td></tr>";
            
            if ($m_type != 'Attendance'){
             //   echo		"<td><input type=\"number\" step=\"any\" name=\"max_marks\" value=\"$max_marks\"></td></tr>";
                echo		"<tr><td><b>Module CLO: </b></td>";
                echo		"<td><select name=\"CLO_select\">";
                for ($t=1;$t<=$clo_count;$t++){
                    $curr_clo = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col FROM $course WHERE data_detail ='CLO'"))[$col];
                    if ($curr_clo==$t)
                        echo "<option value=$curr_clo selected=\"selected\">".$curr_clo."</option>";
                    else
                        echo "<option value=\"$t\">".$t."</option>";
                }
                echo "</select></td>";
                echo		"</tr>";
            }

			echo "<input type='hidden' name='menu' value=\"module_edit\"/>";
			echo "<input type='hidden' name='method' value=\"update\"/>";
        	echo "<input type='hidden' name='course' value=\"$course\"/>";
			echo "<input type='hidden' name='module' value=\"$col\"/>";
			echo	"</table>";
    		echo "<div align=\"center\" style=\"margin-top: 20px;\"><input class=\"sub\" type=\"submit\" value=\"Save Changes\" /></div>";
			echo 	"</form>";
		}
?>