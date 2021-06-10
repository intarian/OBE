<?php 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
    // include function folder

foreach (glob("functions/*.php") as $filename)
{
    include $filename;
}
$conn = OpenCon();
?>

<!DOCTYPE html>
<html>
<title><?php echo project_codename() ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="w3images/w3.css">
<link rel="stylesheet" href="w3images/grade_instrument.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Arial", sans-serif}
</style>


<?php 
	$module = $_GET['module_id'];
    $course = $_GET['course'];
    if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
        header('Refresh: 0; URL=main.php?error=The course is marked ended, write access is not permitted&menu=display&module='.$module.'&course='.$course.'');
        exit();
    }
    $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course."'"))['course_code'];
    $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course."'"))['course_title'];
    $roll = $_GET['roll'];
    $method = $_GET['method'];
    $instrument = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $module FROM $course WHERE data_detail='Instrument'"))[$module];
    $question = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $module FROM $course WHERE data_detail='Question'"))[$module];
    $qpart = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $module FROM $course WHERE data_detail='QuesPart'"))[$module];
    ?>
<body class="w3-light-grey">
    <!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <span class="w3-bar-item w3-right"><b style="color:#ed5851"><?php echo project_codename() ?></b></span>
</div>
    <br><br><br><br>
<div class="w3-container">
    <h2 align="center"><b>Grade Scorer</b></h2>
    <br>
    <?php if($method=='fetch_data'): ?>
    <?php
    $sess = ((int)($roll/1000));
    $roll = $roll-($sess*1000);
    $roll_find = "RP-".$sess."-EE-".$roll;
    $roll_orig = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE data_detail LIKE '%".$roll_find."%'"))['data_detail'];
    $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$roll_orig."'"))['name'];
    echo "<div align=\"center\"><strong style=\"color:#008000;\">Enter Marks for ".$roll_orig."&nbsp;&nbsp;(".$name.")</strong><div>";?>
        <form id="data_fetch" method="get" action="">
        <table class="w3-table w3-auto w3-bordered">
    <tr><td><b>Course Code: </b></td>
        <td><b> <?php echo $course_code ?></b></td>
        </tr>
    <tr><td><b>Course Title: </b></td>
        <td><b> <?php echo $course_title ?></b></td>
        </tr>
        <tr><td><b>Module Type: </b></td>
            <td><b> <?php echo $instrument ?></b></td>
            </tr>
        <tr><td><b>Module Number: </b></td>
            <td><b> <?php echo $question." ".$qpart ?></b></td>
            </tr>

            <tr><td><b>Enter Obtained Marks </b></td><td><input type="number" step="any" name="marks" autofocus="autofocus"></td></tr>

    <input type='hidden' name='course' value="<?php echo $course ?>"/>
    <input type='hidden' name='module_id' value="<?php echo $module ?>"/>
    <input type='hidden' name='roll' value="<?php echo $roll_orig ?>"/>
    <input type='hidden' name='method' value="mark"/>
        </table>
    <div align="center" style="margin-top: 20px;">
        <input class="sub" type="submit" value="Mark" />
        <br><br><br>
    <a href="main.php?menu=display&course=<?php echo $course ?>&module=<?php echo $module ?>">See marked Result</a>
        </div>
 </form> 
    </div>

    <?php endif; ?>
    <?php if($method=='mark') {
    $roll_orig = $_GET['roll'];
    $name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$roll_orig."'"))['name'];
    $marks_o = $_GET['marks'];
    $module = $_GET['module_id'];
    $sql_run = mysqli_query($conn, "UPDATE `$course` SET `$module` = $marks_o WHERE data_detail = '$roll_orig'");
    if(mysqli_affected_rows($conn))
       echo "<div align=\"center\"><strong style=\"color:#008000;\">".$roll_orig."&nbsp;&nbsp;(".$name.") Scored ".$marks_o." Marks</strong><div>";
    else 
       echo "<div align=\"center\"><strong style=\"color:#FF3333;\">Already marked or Roll not exist in the current rooster list</p></strong><div>";
    $method = '';
    }
    ?>
    <?php if($method==''): ?>
    <form id="data_fetch" method="get" action="">
        <table class="w3-table w3-auto w3-bordered">
    <tr><td><b>Course Code: </b></td>
        <td><b> <?php echo $course_code ?></b></td>
        </tr>
    <tr><td><b>Course Title: </b></td>
        <td><b> <?php echo $course_title ?></b></td>
        </tr>
    <tr><td><b>Module Type: </b></td>
        <td><b> <?php echo $instrument ?></b></td>
        </tr>
    <tr><td><b>Module Number: </b></td>
        <td><b> <?php echo $question." ".$qpart ?></b></td>
        </tr>

            <tr><td><b>Roll No: </b></td><td><input type="number" step="any" name="roll" placeholder="ABXYZ for RP-AB-EE-XYZ" autofocus="autofocus"></td></tr>

    <input type='hidden' name='course' value="<?php echo $course ?>"/>
    <input type='hidden' name='module_id' value="<?php echo $module ?>"/>
    <input type='hidden' name='method' value="fetch_data"/>
        </table>
    <div align="center" style="margin-top: 20px;">
        <input class="sub" type="submit" value="Fetch Data" />
        <br><br><br>
    <a href="main.php?menu=display&course=<?php echo $course ?>&module=<?php echo $module ?>">See marked Result</a>
        </div>
 </form> 
    <?php endif; ?>
    </div>
    
<body>
</body>
</html>