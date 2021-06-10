<?php
    $session = $_GET['session'];
    if ($session==''){
        echo "<h4 align='center'><b>Select Batch for PLO Attainment</b></h4>";
        echo "<form method='get' action='index.php'>";
        echo "<table align=\"center\">";
        echo "<tr>";
        echo "<td>";
        echo "<select id=\"session_list\" name=\"session\">";
        $session_sql = mysqli_query($conn,"SHOW COLUMNS FROM `batch_list`");    
        $session_list = array();
        while($session = mysqli_fetch_assoc($session_sql)){
            $session_list[] = $session['Field'];
        }
	    for ($i=1;$i<count($session_list);$i++){
			echo "<option value=$session_list[$i]>$session_list[$i]</option>";
	    }
        echo "</select>";
        echo "</td>";
		echo "</tr>";
        echo "<input type=\"hidden\" name='menu' value='plo_obt_session'>";
        echo "</table>";
        echo "<br>";
        echo "<table align=\"center\">";
        echo "<tr><td><input class=\"sub\" type=\"submit\" value=\"Obtain Batch PLO Achivement\" /></td></tr>";
        echo "</table>";
        echo "</form>";
    }

if ($session){
    $roll_list_sql = mysqli_query($conn,"SELECT $session FROM `batch_list` WHERE $session IS NOT NULL");
    $roll_list = array();
    while($roll = mysqli_fetch_assoc($roll_list_sql)){
        $roll_list[] = $roll[$session];
    }

    // list all courses
    $course_list = array();
    $course_d = mysqli_query($conn,"SELECT course_id FROM courses_info WHERE course_ended = 1");
        while($course_id = mysqli_fetch_assoc($course_d)){
            $course_list[] = $course_id['course_id'];
        }
    echo "<br>";
    echo "<table class='w3-table w3-bordered w3-striped w3-white'>";
    echo "<tr><th>Roll No</th><th>Name</th>";    
    for ($k=1;$k<=12;$k++){
        echo "<th>PLO $k </th>";
    }
    echo "</tr>";

    for ($stu=0;$stu<count($roll_list);$stu++){
        $roll = $roll_list[$stu];
        // list only those courses in which student is enrolled
        $courses_enrolled = array();
        for ($i=0;$i<count($course_list);$i++){
            $roll_f = mysqli_fetch_assoc(mysqli_query($conn,"SELECT data_detail from $course_list[$i] WHERE data_detail='".$roll."'"))['data_detail'];
            if($roll_f){
                $courses_enrolled[]= $course_list[$i];
            }
        }
        echo "<tr>";
        echo "<td>$roll</td>";
        echo "<td>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT name FROM student_records WHERE rollno='".$roll."'"))['name']."</td>";
        
        // find plo's assessed
        $plo_attain = array();
        $plo_course_counter = array();
        for ($i=1;$i<=12;$i++){
            $plo_c = "PLO".$i;
            $plo_counter = 0;
            for ($sub=0;$sub<count($courses_enrolled);$sub++){
                $PLO = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $plo_c FROM courses_info WHERE course_id='$courses_enrolled[$sub]'"))[$plo_c];
                if ($PLO != ''){
                    $plo_counter++;
                    $plo_obt = plo_attain_single($courses_enrolled[$sub],$i,$roll,$conn);
                    $plo_attain[$i] += $plo_obt;
                }
            }
            $plo_attain[$i] = $plo_attain[$i];  // divides by total no of courses having that plo
            $plo_course_counter[$i] = $plo_counter;
            echo "<td>".number_format($plo_attain[$i]/$plo_course_counter[$i],2)."</td>";
        }
        echo "</tr>";
    }
        echo "</table>";
}
