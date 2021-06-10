    <h3 align="center"> Add new Course</h3>
    <br>
    <?php 
    $method = $_GET['method']; 
    ?>
    
    <?php if($method==''): ?>
    <?php 
     $sql_instructor_list = $conn->query("SELECT `name`, `username` FROM `users` WHERE user_type='instructor'");
     $instructor_list = array();
     $instructor_username = array();
		while($col_list = $sql_instructor_list->fetch_assoc()){
			$instructor_list[] = $col_list['name'];
            $instructor_username[] = $col_list['username'];
		}
    ?>
    <form id="add_course" method="get" action="">
    <table class="w3-table w3-auto w3-bordered">
    <tr><td><b>Course Code: </b></td><td><input type="text" name="course_code" ></td></tr>
    <tr><td><b>Course Title: </b></td><td><input type="text" name="course_title" ></td></tr>
    <tr><td><b>Credit Hour: </b></td><td><input type="number" step="1" min="0" name="credit_hour" ></td></tr>
    <tr><td><b>Course Type: </b></td>
         <td><select name="course_type"> 
             <option value=Theory>Theory</option>
             <option value=LAB>LAB</option>
         </td></select></tr>
    <tr><td><b>Enroll Students of Session: </b></td>
         <td><select name="student_session"> 
             <option value=RP-16>RP-16-EE</option>
             <option value=RP-17>RP-17-EE</option>
             <option value=RP-18>RP-18-EE</option>
             <option value=RP-19>RP-19-EE</option>
         </td></select></tr>
    <tr><td><b>Course Term</b></td>
         <td><select name="offer_term">
             <option value=Fall_2021>Fall 2021</option>
             <option value=Spring_2021>Spring 2021</option>
             <option value=Fall_2020>Fall 2020</option>
             <option value=Spring_2020>Spring 2020</option>
             <option value=Fall_2019>Fall 2019</option>
             <option value=Spring_2019>Spring 2019</option>
             <option value=Fall_2018>Fall 2018</option>
             <option value=Spring_2018>Spring 2018</option>
             <option value=Fall_2017>Fall 2017</option>
             <option value=Spring_2017>Spring 2017</option>
             <option value=Fall_2016>Fall 2016</option>
         </td></select></tr>

    <tr><td><b>Course Instructor: </b></td>
     <td><select name="course_instructor"> 
    <?php
	   for ($i=0;$i<count($instructor_list);$i++){
           echo "<option value=$instructor_username[$i]>$instructor_list[$i]</option>";
	   }
     ?>
         </td></select></tr>
        
    </table>
    <input type='hidden' name='method' value="course_data"/>
    <input type='hidden' name='menu' value="add_course"/>
    </table>    
    <div align="center" style="margin-top: 20px;"><input class="w3-btn w3-border w3-animate-opacity" type="submit" value="Add Course" /></div>
    </form>
    <?php endif; ?>
    
    <?php if($method == 'course_data'){
        $code = $_GET['course_code'];
        $offer_term = $_GET['offer_term'];
        $course_id = strtolower(implode("",explode("-",$code)))."_".$offer_term;
        $offer_term = implode(" ",explode("_",$offer_term));
        $title = $_GET['course_title'];
        $course_instructor_uid = $_GET['course_instructor'];
        $session_enroll = $_GET['student_session'];
        $course_instructor_uname = mysqli_fetch_assoc(mysqli_query($conn,"SELECT `name` FROM `users` WHERE username='$course_instructor_uid'"))['name'];
        $credit_hour = $_GET['credit_hour'];
        $course_type = $_GET['course_type'];
        $delimeter = mysqli_real_escape_string($conn,":\^\:");
        $course_access = $course_instructor_uid.$delimeter."admin";
        $sql_add_course = "INSERT INTO `courses_info` (`serial`, `course_id`, `course_code`, `course_title`, `term_offer`, `course_ended`, `credit_hour`,`course_type`, `instructor`, `access_user`, `course_description`, `mid_weight`, `final_weight`, `quiz_weight`, `assign_weight`, `lab_weight`, `project_weight`, `viva_weight`, `presentation_weight`, `other_weight`, `atten_weight`, `CLO_count`, `clo_details`, `rubric_set_count`, `rubric_sets`, `plos_enabled`, `PLO1`, `PLO2`, `PLO3`, `PLO4`, `PLO5`, `PLO6`, `PLO7`, `PLO8`, `PLO9`, `PLO10`, `PLO11`, `PLO12`) VALUES (NULL, '$course_id', '$code', '$title', '$offer_term', '0','$credit_hour', '$course_type', '$course_instructor_uname', '$course_access', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
        $course_code_table = $course_id;
        $course_add_success = 0;
        if (mysqli_query($conn,$sql_add_course))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }


        if (mysqli_query($conn,"CREATE TABLE `$course_code_table` ( `serial` INT NOT NULL AUTO_INCREMENT , `data_detail` VARCHAR(255) NOT NULL , PRIMARY KEY (`serial`)) ENGINE = MyISAM;"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }
    
        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'Instrument');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'Question');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }
    
        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'QuesPart');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'MaxMarks');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'CLO');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }
    
        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'Date');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }


        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'g_type');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }
    
       if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'rubric_set_id');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'cep');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'feature10');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'feature11');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'feature12');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'feature13');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }

        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (`serial`, `data_detail`) VALUES (NULL, 'feature14');"))
            $course_add_success = 1;
        else{
            $course_add_success = 0;
            die(mysqli_error());
        }
        if ($course_add_success == 1)
            echo "New Course Added";
        else
            echo "Oops! We were unable to add course, and might have done something wrong as well. Contact Administrator ASAP";
        echo "<br>";
        // Add student data to new course
        if (mysqli_query($conn,"INSERT INTO `$course_code_table` (data_detail) SELECT `rollno` FROM `student_records` WHERE `rollno` LIKE '%$session_enroll%'"))
            echo "Students of $session_enroll are automatically enrolled in this course. If you wish to unroll or enroll students, goto course manager";
    }
    ?>
