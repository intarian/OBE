<?php
    $method=$_GET['method'];
    if ($method==''){
        $course_list = array();
        $course_d = mysqli_query($conn,"SELECT course_id FROM courses_info");
            while($course_id = mysqli_fetch_assoc($course_d)){
                $course_list[] = $course_id['course_id'];
            }
        echo "<br>";
       // print_r($course_list);
        Print "<table class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white'>";
        Print "<th>Sr. No</th><th>Course Code</th><th>Course Title</th><th>Offer Term</th><th>Manage Students</th>";
        for ($c=0;$c<count($course_list);$c++){
            $sr_no = $c+1;
            Print "<tr>";
            Print "<td>".$sr_no."</td>";
            Print "<td>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course_list[$c]."'"))['course_code']."</td>";
            Print "<td>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course_list[$c]."'"))['course_title']." ".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_type FROM courses_info WHERE course_id='".$course_list[$c]."'"))['course_type']."</td>";
            Print "<td>".mysqli_fetch_assoc(mysqli_query($conn,"SELECT term_offer FROM courses_info WHERE course_id='".$course_list[$c]."'"))['term_offer']."</td>";
            Print "<td><a href='index.php?menu=manage_enrolment&method=display_enrolled_students&course_id=$course_list[$c]'>Manage</a></td>";

        }
        Print "</table>";
    }
    //$course = $course_list[0];
    
    
    
    
    
    if ($method == 'drop_student'){
        $course_id = $_GET['course_id'];
        $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course_id."'"))['course_title'];
        $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course_id."'"))['course_code'];
        $stu_count = mysqli_num_rows(mysqli_query($conn,"SELECT data_detail FROM $course_id"));
        $stu_roll = $_GET['roll'];
        $unroll_status = 0;
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
            if ($unroll_status == 1){
                $serial_get = mysqli_fetch_assoc($conn->query("SELECT serial FROM $course_id WHERE data_detail = '$rollno'"))['serial'];
                $serial_new = $serial_get-1;
                mysqli_query($conn,"UPDATE $course_id SET `serial` = '$serial_new' WHERE `data_detail` = '$rollno'");
            }
            if ($rollno==$stu_roll && $unroll_status==0){
                mysqli_query($conn,"DELETE FROM $course_id WHERE data_detail = '$stu_roll'");
                $unroll_status=1;
            }
        }
        if ($unroll_status == 1){
            echo "Student unrolled succesfully";
            echo "<br>";
            //header('Refresh: 0; URL=index.php?menu=manage_enrolment&method=display_enrolled_students&course_id='.$course_id.'');
            echo "<a href='index.php?menu=manage_enrolment&method=display_enrolled_students&course_id=$course_id'>Go Back</a>";
        }
    }
    if ($method == 'add_student'){
        $course_id = $_GET['course_id'];
        $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course_id."'"))['course_title'];
        $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course_id."'"))['course_code'];
        $stu_count = mysqli_num_rows(mysqli_query($conn,"SELECT data_detail FROM $course_id"));
        $roll = $_GET['roll'];
        $sess = ((int)($roll/1000));
        $roll = $roll-($sess*1000);    
        $stu_roll = "RP-".$sess."-EE-".$roll;
        // verify record in student records table
        $name = mysqli_fetch_assoc(mysqli_query($conn,"SELECT name FROM student_records WHERE rollno='".$stu_roll."'"))['name'];
        if($name!=""){        
            $enroll_status=0;
            for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
                if($rollno){
                    if($rollno==$stu_roll){
                        echo "Student already enrolled";
                        $enroll_status=1;
                        break;
                    }
                }
                else{
                    mysqli_query($conn,"UPDATE $course_id SET `data_detail` = '$stu_roll' WHERE serial=$stu_id");
                    $enroll_status =1;
                }
            }
            if ($enroll_status==0){
                $stu_id = $stu_count+1;
                mysqli_query($conn,"INSERT INTO $course_id (serial,data_detail) VALUES ($stu_id,'".$stu_roll."')");
                $enroll_status=1;
            }
            if($enroll_status==1){
                echo "Student succesfully enrolled";
                echo "<br>";
                echo "<a href='index.php?menu=manage_enrolment'>Go to Course Manager</a>";
            }
        }
        else{
            echo "Student record not found";
            echo "<br>";
            echo "<a href='index.php?menu=manage_enrolment'>Go to Course Manager</a>";
        }

    }
    if ($method=='enroll_student_form'){
        $course_id=$_GET['course_id'];
        $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course_id."'"))['course_title'];
        $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course_id."'"))['course_code'];
        $stu_count = mysqli_num_rows(mysqli_query($conn,"SELECT data_detail FROM $course_id"));
        echo "<table class='w3-left'>";
        echo "<tr><td><strong>Course Code:&nbsp;&nbsp;</strong></td><td><strong>$course_code</strong></td></tr>";
        echo "<tr><td><strong>Course Title:</strong></td><td><strong>$course_title</strong></td></tr>";
        echo "</table>";
        echo "<br><br><br><h4 align='center'><b>Enroll Student</b></h4>";
        echo "<form id='enroll_student' method='get' action=''>";
        echo "<table class ='w3-table'>";
        echo "<tr><td>Enter Complete Roll No</td><td><input type='text' name='roll' placeholder=\"ABXYZ for RP-AB-EE-XYZ\"></td></tr>";
        echo "<input type=\"hidden\" name='method' value='add_student' >";
        echo "<input type=\"hidden\" name='menu' value='manage_enrolment' >";
        echo "<input type=\"hidden\" name='course_id' value='$course_id' >";
        echo "</table>";
        echo "<table align=\"center\">";
        echo "<tr><td><input class=\"sub\" type=\"submit\" value=\"Enroll Student\" /></td></tr>";
        echo "</table>";
        echo "</form>";
    }

    if ($method == 'display_enrolled_students'){
        $course_id=$_GET['course_id'];
        $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course_id."'"))['course_title'];
        $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course_id."'"))['course_code'];
        $stu_count = mysqli_num_rows(mysqli_query($conn,"SELECT data_detail FROM $course_id"));
        echo "<table class='w3-table'>";
        echo "<tr><td class='w3-left'><strong>Course Code:&nbsp;&nbsp;</strong></td><td class='w3-left'><strong>$course_code</strong></td></tr>";
        echo "<tr><td class='w3-left'><strong>Course Title:</strong></td><td class='w3-left'><strong>$course_title</strong></td>";
        echo "<td class='w3-right' style='margin-right:100px;'><a href='index.php?menu=manage_enrolment&course_id=$course_id&method=enroll_student_form'><b>Enroll Student</b></a></td></tr>";
        echo "</table>";
        echo "<table class='w3-table-all'>";
        echo "<th>Sr. No</th><th>Roll No</th><th>Name</th><th>Unroll</th>";
        $sr_counter = 1;
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course_id WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            Print "<tr>"; 
            Print "<td>".$sr_counter."</td> ";
            Print "<td>".$rollno ."</td> ";        
            Print "<td>".$name . "</td> ";
            Print "<td><a href=\"index.php?menu=manage_enrolment&method=drop_student&roll=$rollno&course_id=$course_id&amp\"  onclick=\"return confirm('Are you sure you want to unroll $rollno ?')\"><em class='fa fa-times fa-fw'></em></a></td>";
            $sr_counter++;
        }
        echo "</table>";
        echo "<br>";
    }
    
?>