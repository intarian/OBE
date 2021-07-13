<?php if($error): ?>
    <h4 align="center" class="w3-text-red">Error: <?php echo $error ?></h4>
    <?php endif; ?>
<?php
    $course=$_GET['course'];
    $module = $_GET['module'];
    if($module){
       $instrument = mysqli_fetch_assoc($conn->query("SELECT $module FROM $course WHERE data_detail ='Instrument'"))[$module];
	   $question = mysqli_fetch_assoc($conn->query("SELECT $module FROM $course WHERE data_detail ='Question'"))[$module];
       $qpart = mysqli_fetch_assoc($conn->query("SELECT $module FROM $course WHERE data_detail ='QuesPart'"))[$module];
    }
    else{
        $instrument = $_GET['instrument'];
	    $question = $_GET['question'];
        $qpart = $_GET['qpart'];
        $module = ColFind($course,$instrument,$question,$qpart,$conn);
    }
    $g_type = mysqli_fetch_assoc($conn->query("SELECT $module FROM $course WHERE data_detail ='g_type'"))[$module];
    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));
    if ($g_type=='conventional'){
        Print "<h3 align='center'>Update Marks of <strong>".$instrument." ".$question.$qpart."</strong></h3>";
        Print "<div align='left'><a href='module_grade_marker.php?course=$course&module_id=$module' target='_blank'><b><em class=\"fa fa-upload fa-fw\"></em>Update Marks using Grade Scorer</b></a></div><br>";
        
        Print "<form id='update_marks' action='update_marks_sql.php' method='get' >";
        Print "<table id='table' class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white update_table'>";
        Print "<th>Roll No</th> <th>Name</th> <th>Current Marks</th>";
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            $roll = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$roll."'"))['name'];
            $current_marks = mysqli_fetch_assoc($conn->query("SELECT $module FROM $course WHERE data_detail='$roll'"))[$module];
            if ($current_marks=="")
                $current_marks = 0;
            Print "<tr>";
            Print "<td>".$roll."</font></td>";
            Print "<td>".$name."</font></td>";
            Print "<td><input type='text' value=".$current_marks." name='marks".$stu_id."'/></td>";
            Print "</tr>";
        }
        Print "</table>";
        Print "<table align='center' class='w3-striped w3-bordered  w3-hoverable'>";
        Print "<tr><td><input class='sub' type='submit' value='Update Marks' /></td></tr>";
        Print "</table>";
    }
    else if($g_type=='rubric'){
        $rubric_set_id_fetch = mysqli_fetch_assoc($conn->query("SELECT $module FROM $course WHERE data_detail ='rubric_set_id'"))[$module];
        $all_rubrics_fetch = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_sets FROM courses_info Where course_id='".$course."'"))['rubric_sets'];
        $all_rubrics_fetch = explode(":\^\:",$all_rubrics_fetch);
        $index = -1;
        for ($i=0;$i<count($all_rubrics_fetch);$i++){
            if($all_rubrics_fetch[$i]=="set_".$course."_".$rubric_set_id_fetch)
                $index = $i;
        }
        if ($index>=0){  //detect that rubric set is found
			$rubric_name = $all_rubrics_fetch[$index+1];
            $rubric_count = $all_rubrics_fetch[$index+2];
            $rubric_level = $all_rubrics_fetch[$index+3];
            Print "<h3 align='center'>Update Rubrics of <strong>".$instrument." ".$question."</strong></h3>";
			Print "<h4 align='left'>Rubric Name: <strong>".$rubric_name."</strong></h4>";
            Print "<form id='update_marks' action='update_marks_sql.php' method='get' >";
            Print "<table id='table' class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white'>";
            Print "<th>Roll No</th> <th>Name</th>"; 
            for ($t=0;$t<$rubric_count;$t++) // Print rubric_names
                Print "<th>".$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t]."</th>";
            Print "<th>Rubric Marks</th>";    
            for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
                $roll = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
                $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$roll."'"))['name'];
                $current_selection = explode(":\^\:",mysqli_fetch_assoc($conn->query("SELECT $module FROM $course WHERE data_detail='$roll'"))[$module]);
                Print "<tr>";
                Print "<td>".$roll."</font></td>";
                Print "<td>".$name."</font></td>";
				if ($rubric_level == 6){
					for ($j=0;$j<$rubric_count;$j++){
						Print "<td><select name=\"rubric_val_".$j."_stu_id_".$stu_id."\">";
						if ($current_selection[$j]=='Exemplary')
							Print "<option selected=\"selected\" value=\"Exemplary\">Exemplary [5]</option>";
						else
							Print "<option value=\"Exemplary\">Exemplary [5]</option>";
						if ($current_selection[$j]=='Satisfactory')
							Print "<option selected=\"selected\" value=\"Satisfactory\">Satisfactory [4]</option>";
						else
							Print "<option value=\"Satisfactory\">Satisfactory [4]</option>";
						if ($current_selection[$j]=='Developing')
							Print "<option selected=\"selected\" value=\"Developing\">Developing [3]</option>";
						else
							Print "<option value=\"Developing\">Developing [3]</option>";
						if ($current_selection[$j]=='Unsatisfactory')
							Print "<option selected=\"selected\" value=\"Unsatisfactory\">Unsatisfactory [2]</option>";
						else
							Print "<option value=\"Unsatisfactory\">Unsatisfactory [2]</option>";
						if ($current_selection[$j]=='Unacceptable')
							Print "<option selected=\"selected\" value=\"Unacceptable\">Unacceptable [1]</option>";
						else
							Print "<option value=\"Unacceptable\">Unacceptable [1]</option>";
						if ($current_selection[$j]=='Absent')
							Print "<option selected=\"selected\" value=\"Absent\">Absent [0]</option>";
						else
							Print "<option value=\"Absent\">Absent [0]</option>";
						Print "</select></td>";
					}
				}
				
				if ($rubric_level == 5){
					for ($j=0;$j<$rubric_count;$j++){
						Print "<td><select name=\"rubric_val_".$j."_stu_id_".$stu_id."\">";
						if ($current_selection[$j]=='Exemplary')
							Print "<option selected=\"selected\" value=\"Exemplary\">Exemplary [5]</option>";
						else
							Print "<option value=\"Exemplary\">Exemplary [5]</option>";
						if ($current_selection[$j]=='Accomplished')
							Print "<option selected=\"selected\" value=\"Accomplished\">Accomplished [4]</option>";
						else
							Print "<option value=\"Accomplished\">Accomplished [4]</option>";
						if ($current_selection[$j]=='Developing')
							Print "<option selected=\"selected\" value=\"Developing\">Developing [3]</option>";
						else
							Print "<option value=\"Developing\">Developing [3]</option>";
						if ($current_selection[$j]=='Begining')
							Print "<option selected=\"selected\" value=\"Begining\">Begining [1]</option>";
						else
							Print "<option value=\"Begining\">Begining [1]</option>";
						if ($current_selection[$j]=='Absent')
							Print "<option selected=\"selected\" value=\"Absent\">Absent [0]</option>";
						else
							Print "<option value=\"Absent\">Absent [0]</option>";
						Print "</select></td>";
					}
				}
				if ($rubric_level == 4){
					for ($j=0;$j<$rubric_count;$j++){
						Print "<td><select name=\"rubric_val_".$j."_stu_id_".$stu_id."\">";
						if ($current_selection[$j]=='Exemplary')
							Print "<option selected=\"selected\" value=\"Exemplary\">Exemplary [5]</option>";
						else
							Print "<option value=\"Exemplary\">Exemplary [5]</option>";
						if ($current_selection[$j]=='Competent')
							Print "<option selected=\"selected\" value=\"Competent\">Competent [3]</option>";
						else
							Print "<option value=\"Competent\">Competent [3]</option>";
						if ($current_selection[$j]=='Developing')
							Print "<option selected=\"selected\" value=\"Developing\">Developing [1]</option>";
						else
							Print "<option value=\"Developing\">Developing [1]</option>";
						if ($current_selection[$j]=='Absent')
							Print "<option selected=\"selected\" value=\"Absent\">Absent [0]</option>";
						else
							Print "<option value=\"Absent\">Absent [0]</option>";
						Print "</select></td>";
					}
				}
				if ($current_selection[$rubric_count])
                    Print "<td>".number_format($current_selection[$rubric_count],2)."</td>";
                else
                    Print "<td>".number_format(0,0)."</td>";

                Print "</tr>";
                }
                Print "</table>";
                Print "<table align='center' class='w3-striped w3-bordered  w3-hoverable'>";
                Print "<tr><td><input class='sub' type='submit' value='Update Rubrics' /></td></tr>";
                Print "</table>";
    }
        else{
            echo "<p class=\"w3-text-red\">Error: Rubric Set Missing. Unable to update, delete the module and re-add with valid rubric set</p>";
        }
    }
    else{
        echo "Module Id not found";
        exit();
    }
    
    Print "<input type='hidden' name='course' value='".$course."'/>";
	Print "<input type='hidden' name='rubric_level' value='".$rubric_level."'/>";
    Print "<input type='hidden' name='module' value='".$module."'/>";
    Print "<input type='hidden' name='method' value='".$g_type."'/>";
    Print "</form>";
    
?>