<?php
// Initialize the session

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<?php // include function folder
foreach (glob("functions/*.php") as $filename)
{
    include $filename;
}
$conn = OpenCon();
?>
<?php //Grab post parameters to be added in module
$course_id = $_GET['course'];
if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course_id'"))['course_ended']){
        header('Refresh: 0; URL=main.php?menu=add_module&error=The course is marked ended, write access is not permitted&course='.$course_id.'');
        exit();
    }
$instrument = $_GET['Instrument'];
$question = $_GET['ques'];
$ques_part = $_GET['qpart'];
$g_type = $_GET['g_type'];
if ($g_type=="")
    $g_type = 'conventional';
$rubric_id = $_GET['rubric_set'];
if ($rubric_id=="")
    $rubric_id = null;
if ($ques_part=="")
    $ques_part = null;
$MaxMarks = $_GET['MaxMarks'];
$CLO = $_GET['CLO'];
$CEP = $_GET['cep'];
if ($CEP=="")
    $CEP = null;
$Date = $_GET['date'];
if ($Date=="")
    $Date = null;
if($course_id==''){
	echo "Request has missing parameters. Redirect back";
	header('Refresh: 0; URL=main.php?menu=add_module&error=Course ID is missing&course='.$course_id);
    exit();
}

else{
//    if ($instrument=='Quiz' || $instrument=='Assignment')
//        $ques_part = '';
    // Find free column or add new column
    $i=1;
    $col_name = '';
    $exists=1;
    while($exists==1){
        $check_col = mysqli_query($conn,"SHOW COLUMNS FROM $course_id LIKE "."'I".$i."'");
        $exists = (mysqli_num_rows($check_col))?1:0;
        if ($exists==1)
            $i++;
        else
            $col_name = "I".$i;
    }
 
    // Run queries to Add column for new grade instrument
if ($instrument=='Attendance'){
    if($Date==null){
        header('Refresh: 0; URL=main.php?menu=add_module&error=Attendance date is required&course='.$course_id);
        exit();
    }
        
    mysqli_query($conn,"ALTER TABLE $course_id ADD COLUMN $col_name VARCHAR(255);");
    mysqli_query($conn,"UPDATE $course_id SET $col_name = '$instrument' WHERE data_detail = 'Instrument'");
    mysqli_query($conn,"UPDATE $course_id SET `$col_name` = \"$Date\" WHERE data_detail =  'Date'");
    echo "Attendance Module Added";
    $success=1;
    header('Refresh: 0; URL=attendance_marker.php?menu=update&course='.$course_id.'&module_id='.$col_name);   
}

    else{
        if ($instrument=='' || $question=='' || $MaxMarks == '' || $CLO==''){
            //echo "Request has missing parameters. Redirecting back momentarily";
            header('Refresh: 0; URL=main.php?menu=add_module&error=Some parameters are missing&course='.$course_id);
            exit();
        }
        
        $existing_col = ColFind($course_id,$instrument,$question,$ques_part,$conn);
        if ($existing_col){
            header('Refresh: 0; URL=main.php?menu=add_module&error=Module already exist&course='.$course_id);
            exit();
        }
  
    $success = 1;
    if (mysqli_query($conn,"ALTER TABLE $course_id ADD COLUMN $col_name VARCHAR(255);"))      
        $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    } 

    if (mysqli_query($conn,"UPDATE $course_id SET $col_name = '$instrument' WHERE data_detail = 'Instrument'"))	
        $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    } 
    if (mysqli_query($conn,"UPDATE $course_id SET `$col_name` = \"$Date\" WHERE data_detail =  'Date'"))	 $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    }
    if (mysqli_query($conn,"UPDATE $course_id SET `$col_name` = \"$g_type\" WHERE data_detail =  'g_type'"))
        $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    }
        
    if (mysqli_query($conn,"UPDATE $course_id SET `$col_name` = \"$rubric_id\" WHERE data_detail =  'rubric_set_id'"))
        $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    }

    if (mysqli_query($conn,"UPDATE $course_id SET `$col_name` = \"$CEP\" WHERE data_detail =  'cep'"))
        $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    }

    if (mysqli_query($conn,"UPDATE $course_id SET `$col_name` = $question WHERE data_detail = 'Question'"))	
        $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    }

    if (isset($ques_part)){
        if(mysqli_query($conn,"UPDATE $course_id SET `$col_name` = '$ques_part' WHERE data_detail = 'QuesPart'"))	
            $success = 1;
        else {
            die(mysqli_error());
            $success = 0;
        }
    }

    if (mysqli_query($conn,"UPDATE $course_id SET `$col_name` = $MaxMarks WHERE data_detail = 'MaxMarks'"))
        $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    }

    if (mysqli_query($conn,"UPDATE $course_id SET `$col_name` = $CLO WHERE data_detail =  'CLO'"))
        $success = 1;
    else {
        die(mysqli_error());
        $success = 0;
    }

    if ($success==1){
        echo "module added success";
        header('Refresh: 0; URL=main.php?menu=update&course='.$course_id.'&instrument='.$instrument.'&question='.$question.'&qpart='.$ques_part);
    } 
    }
    if($success!=1)
        echo "failed to add module";
}
?>
