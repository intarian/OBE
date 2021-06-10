<?php 
    if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
        echo "<h5 align=\"center\" class=\"w3-text-red\"><strong>The course is marked ended</strong></h5>";
        exit();
    }

	$method = $_GET['method'];
    $rubric_count = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_set_count FROM courses_info Where course_id='".$course."'"))['rubric_set_count'];
?>
<?php if($method==''): ?>
<div class="w3-container">
<h3 align="center">Design Rubrics</h3>
<strong>New Rubric Set Id: <?php echo $rubric_count+1 ?></strong>
<form id="rubric_create" method="get" action="">
<table class="w3-table-all" style="margin-top: 10px">
<tr><td><input type="checkbox" name="rubric0" value="Realization of Experiment">
      <label for="rubric0"><strong>Realization of Experiment</strong></label><br>
        <div id="rubric0" style="display:none"><br><b>Scoring Criteria [5-0]:</b><br> <strong>5-4:</strong> Selects relevant equipment to the experiment,develops setup diagrams of equipment connections or wiring. <br><strong>3-2:</strong> Needs guidance to select relevant equipment to the experiment and to develop equipment connection or wiring diagrams.<br> <strong>1-0:</strong> Incapable of selecting relevant equipment to conduct the experiment, equipment connection or wiring diagrams are; doesn't perform at all<br></div></td></tr>
  <tr><td><input type="checkbox" name="rubric1" value="Team Work">
      <label for="rubric1"><strong>Team Work</strong></label><br>
        <div id="rubric1" style="display:none"><br><b>Scoring Criteria [5-0]:</b><br> <strong>5-4:</strong> Actively engages and cooperates with other group members in an effective manner <br><strong>3-2:</strong> Cooperates with other group member in a reasonable manner. <br> <strong>1-0:</strong> Distracts or discourages other group members from conducting the task; doesn't perform at all</div></td></tr>
  <tr><td><input type="checkbox" name="rubric2" value="Computer Use">
      <label for="rubric2"><strong>Computer Use</strong></label><br>
        <div id="rubric2" style="display:none"><br><b>Scoring Criteria [5-0]:</b><br> <strong>5-4:</strong> Uses computer to collect and analyse data effectively. <br><strong>3-2:</strong> Uses computer and analyse data with minor error. <br> <strong>1-0:</strong> Does not know how to use computer to collect and analyse data; doesn't perform at all. </div></td></tr>
  <tr><td><input type="checkbox" name="rubric3" value="Conducting Experiment">
      <label for="rubric3"><strong>Conducting Experiment</strong></label><br>
        <div id="rubric3" style="display:none"><br><b>Scoring Criteria [5-0]:</b><br> <strong>5-4:</strong> Does proper calibration of equipment, carefully examines equipment moving parts, and ensures smooth operation and process <br><strong>3-2:</strong> Calibrates equipment, examines equipment moving parts, and operates the equipment with minor error. <br> <strong>1-0:</strong> Unable to callibrate appropiate equipment, and equipment operation is substantially wrong; doesn't perform at all </div></td></tr>
  <tr><td><input type="checkbox" name="rubric4" value="Data Analysis">
      <label for="rubric4"><strong>Data Analysis</strong></label><br>
        <div id="rubric4" style="display:none"><br><b>Scoring Criteria [5-0]:</b><br> <strong>5-4:</strong> Accurately conducts simple computation and statistical analysis using collected data; correlates experimental results to known theoretical values; accounts for measurement errors and parameters that affect experimental results <br><strong>3-2:</strong> Conducts simple computations and statistical analysis using collected data with minor error; reasonably correlates experimental results to known theoretical values; attempts to account for measurement errors and parameters that affect experimental results <br> <strong>1-0:</strong> Unable to conduct simple statistical analysis on collected data; no attempt to correlate experimental results with known thoretical values; incapable of explaining measurement errors or parameters that affect the experimental results; doesn't perform at all. </div></td></tr>
  <tr><td><input type="checkbox" name="rubric5" value="Data Collection">
      <label for="rubric5"><strong>Data Collection</strong></label><br>
        <div id="rubric5" style="display:none"><br><b>Scoring Criteria [5-0]:</b><br> <strong>5-4:</strong> Plans data collection to achieve experimental objectives and conducts an orderly and a complete data collection <br><strong>3-2:</strong> Plans data collection to achieve experimental objectives, and collects complete data with minor error <br> <strong>1-0:</strong> Does not know how to plan data collection to achieve experimental goals; data collected is incomplete and contain errors; doesn't perform at all</div></td></tr>
  <tr><td><input type="checkbox" name="rubric6" value="Laboratory Safety Rules">
      <label for="rubric6"><strong>Laboratory Safety Rules</strong></label><br>
        <div id="rubric6" style="display:none"><br><b>Scoring Criteria [5-0]:</b><br> <strong>5-4:</strong> Respectfully and carefully observes safety rules and procedures <br><strong>3-2:</strong> Observes safety rules and procedures with minor deviation. <br> <strong>1-0:</strong> Disregards safety rules and procedures; doesn't perform at all</div></td></tr>

<input type='hidden' name='method' value="rubric_select"/>
<input type='hidden' name='course' value="<?php echo $course ?>"/>
<input type='hidden' name='menu' value="add_rubrics"/>
</table>
    <br>
<table align='center' class='w3-striped w3-bordered  w3-hoverable'>
<tr><td align="center"><input class="sub" type="submit" value="Add Rubrics" /></td></tr>
</table>

</table>
</form>
</div>
<?php endif; ?>

<?php 
    if($method=='rubric_select'){
        $exist_rubrics = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_sets FROM courses_info Where course_id='".$course."'"))['rubric_sets'];
        $delimeter = mysqli_real_escape_string($conn,":\^\:");
        echo "<div class=\"w3-container\">";
        echo "<table class=\"w3-table\">";
        $rubrics = array();
        for ($i=0;$i<7;$i++){
            if($_GET['rubric'.$i])
                $rubrics[$i]=$_GET['rubric'.$i];
        }
        $rubrics=array_values($rubrics);
        $set_id = $rubric_count+1;
        if($exist_rubrics)
            $set_rubrics=mysqli_real_escape_string($conn,$exist_rubrics).$delimeter."set".$set_id.$delimeter.count($rubrics);
        else
            $set_rubrics="set".$set_id.$delimeter.count($rubrics);
        for($i=0;$i<count($rubrics);$i++){
            $set_rubrics=$set_rubrics.$delimeter.mysqli_real_escape_string($conn,$rubrics[$i]);
        }
        //echo $set_rubrics;
        if(mysqli_query($conn,"UPDATE courses_info SET rubric_sets = '$set_rubrics' WHERE courses_info.`course_id` ='$course'") && mysqli_query($conn,"UPDATE courses_info SET rubric_set_count = $set_id WHERE courses_info.`course_id` ='$course'")){
            echo "<div align='center'>";
            echo "Rubric Set Created";
            echo "<br>";
            Print "<a href='reports/rubric_evaluation_sheet.php?course=$course&set_id=$set_id' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print Rubric Evaluation Sheet</b></a>";
            echo "</div>";
        }
        echo "</div>";
    }
    
    ?>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("value");
        if (inputValue=='Realization of Experiment')
            $('#rubric0').toggle();
        if (inputValue=='Team Work')
            $('#rubric1').toggle();
        if (inputValue=='Computer Use')
            $('#rubric2').toggle();
        if (inputValue=='Conducting Experiment')
            $('#rubric3').toggle();
        if (inputValue=='Data Analysis')
            $('#rubric4').toggle();
        if (inputValue=='Data Collection')
            $('#rubric5').toggle();
        if (inputValue=='Laboratory Safety Rules')
            $('#rubric6').toggle();
    });
});
</script>