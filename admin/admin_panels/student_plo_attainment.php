    <?php $method = $_GET['method']; ?>
    <?php if($method==''): ?>
        <h4 align='center'><b>Enter Roll for PLO Attainment</b></h4>
        <form id='view_plo_score' method='get' action=''>
        <table class ='w3-table'>
        <tr><td>Enter Complete Roll No</td><td><input type='text' name='roll' placeholder="ABXYZ for RP-AB-EE-XYZ"></td></tr>
        <input type="hidden" name='method' value='view_plo_score' >
        <input type="hidden" name='menu' value='student_plo_attainment' >
        </table>
        <table align="center">
        <tr><td><input class="sub" type="submit" value="Check PLO Score" /></td></tr>
        </table>
        </form>
    <?php endif; ?>
    
    <?php
    if ($method == 'view_plo_score'){
        $roll = $_GET['roll'];
        $sess = ((int)($roll/1000));
        $roll = $roll-($sess*1000);    
        $stu_roll = "RP-".$sess."-EE-".$roll;
        $roll = mysqli_fetch_assoc(mysqli_query($conn,"SELECT `rollno` FROM `student_records` WHERE `rollno` LIKE '%".$stu_roll."%'"))['rollno'];
        // list all courses
            $course_list = array();
            $course_d = mysqli_query($conn,"SELECT course_id FROM courses_info WHERE course_ended = 1");
                while($course_id = mysqli_fetch_assoc($course_d)){
                    $course_list[] = $course_id['course_id'];
                }
            echo "<br>";
        // list only those courses in which student is enrolled
        $courses_enrolled = array();
        for ($i=0;$i<count($course_list);$i++){
            $roll_f = mysqli_fetch_assoc(mysqli_query($conn,"SELECT data_detail from $course_list[$i] WHERE data_detail='".$roll."'"))['data_detail'];
            if($roll_f){
                $courses_enrolled[]= $course_list[$i];
            }
        }
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
        }

        echo "<h4>Roll No:<strong> $roll </strong></h4>";
        echo "<h4>Name: <strong>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT name FROM student_records WHERE rollno='".$roll."'"))['name']."</strong></h4>";
        echo "<table class='w3-table w3-bordered w3-striped w3-white'>";
        echo "<th>PLO's</th><th>Obtain Score</th><th>No. of Courses Assesed</th><th>PLO Achievement (%)</th>";
        for ($i=1;$i<=12;$i++){
            Print "<tr><td><strong>PLO ".$i."</strong></td><td>".number_format($plo_attain[$i],2)."</td><td>".$plo_course_counter[$i]."</td><td><strong>".number_format($plo_attain[$i]/$plo_course_counter[$i],2)."</strong></td></tr>";
        }
        echo "</table>";
    }
    ?>