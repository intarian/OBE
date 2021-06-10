<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


?>

<body>
<div class="wrap">
<?php // include function folder
foreach (glob("functions/*.php") as $filename)
{
    include $filename;
}
$conn = OpenCon();
?>
<?php //Grab post parameters to be added in module
$instrument = $_GET['id'];
$course = $_GET['course'];
if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
        header('Refresh: 0; URL=main.php?error=The course is marked ended, write access is not permitted&course='.$course.'');
        exit();
    }
?>
    
<?php 

          mysqli_query($conn,"ALTER TABLE $course DROP $instrument");
          header('Refresh: 0; URL=main.php?&course='.$course.'');
?>
