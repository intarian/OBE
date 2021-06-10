<?php 
	$course=$_GET['course'];
    $error = $_GET['error'];
	$clo_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT CLO_count FROM courses_info WHERE course_id='$course'"))['CLO_count'];
    $rubric_set_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT rubric_set_count FROM courses_info WHERE course_id='$course'"))['rubric_set_count'];

    if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
        echo "<h5 align=\"center\" class=\"w3-text-red\"><strong>The course is marked ended</strong></h5>";
        exit();
    }

?>
<?php if($error): ?>
<h5 align="center" class="w3-text-red">Error: <?php echo $error ?></h5>
<?php endif; ?>
<h3 align="center">Add new Module</h3>
<form id="add_mod" method="get" action="add_module_sql.php">
		<table class="w3-table">

<tr>
<td>Module Type </td><td>
<select id="Instrument" name="Instrument"> 
<option value="" selected="selected">Select Module</option>
<option value="Attendance">Attendance</option>
<option value="Quiz">Quiz</option>
<option value="Assignment" >Assignment</option>
<option value="Midterm" >Midterm</option>
<option value="Project" >Project</option>
<option value="Final" >Final</option>
<option value="LAB" >LAB Experiment</option>
<option value="VIVA" >VIVA</option>
<option value="Presentation" >Presentation</option>
<option value="Other" >Other</option>
</select>
	</td></tr>
<tr style="display:none;" id="g_type"><td>Grading Type </td><td>
<select id="grade_type" name="g_type"> 
<option value="conventional" selected="selected">Conventional</option>
<option value="rubric">Rubric</option>
</select>
	</td></tr>

<tr style="display:none;" id="rubric_type">
<td>Rubric Set</td>
<td>
<select name="rubric_set" id="rubric_set"> 
<?php
	for ($i=1;$i<=$rubric_set_count;$i++){
		if($i==1)
			echo "<option value=1 selected=\"selected\">1</option>";
		else
			echo "<option value=$i>$i</option>";
	}
?>
</select>
</td>
			</tr>

<tr style="display:none;" id="date">
<td>Date</td>
<!--<p> Select Sessional no, in case of Sessional</p>-->
<td><input type="date" name="date"></td></tr>

<tr style="display:none;" id="question">
<td>Module No </td>
<!--<p> Select Sessional no, in case of Sessional</p>-->
<td>
<select name="ques"> 
<option value=1 selected="selected">1</option>
<?php for ($i=2;$i<=20;$i++)
	echo "<option value=$i >$i</option>";
?>
</select>
</td></tr>

            
            
<tr style="display:none;" id="QuesPart"><td>Module Part No </td>
<!--<p> Don't select anything in case of Sessional</p>-->
<td>
<select id="QuestionPart" name="qpart"> 
<option value='' selected="selected">------</option>
<option value='a'>a</option>
<option value='b'>b</option>
<option value='c'>c</option>
<option value='d'>d</option>
<option value='e'>e</option>
<option value='f'>f</option>
<option value='g'>g</option>
<option value='h'>h</option>
<option value='i'>i</option>
<option value='j'>j</option>
</select>
	</td></tr>
<tr style="display:none;" id="CEP"><td>Complex Engineering Problem</td>
  <td><input type="radio" name="cep" value="1">
  <label for="1">Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="cep" value="0">
    <label for="No">No</label></td>
            </tr>
<tr style="display:none;" id="max_marks">
<td>Maximum Marks</td>
<td>
<input type="number" name="MaxMarks" min="0" step="any"> 
</td>
</tr>
<tr style="display:none;" id="clo">
<td>CLO</td>
<td>
<select id="CLO" name="CLO"> 
<?php
	for ($i=1;$i<=$clo_count;$i++){
		if($i==1)
			echo "<option value=1 selected=\"selected\">1</option>";
		else
			echo "<option value=$i>$i</option>";
	}
?>
</select>
</td>
			</tr>
	</table>
<table align="center" class="w3-striped w3-bordered  w3-hoverable">
<input type='hidden' name='course' value="<?php echo $course ?>"/>
<tr><td><input class="sub" type="submit" value="Add Grading Instrument" /></td></tr>
</table>
</form>