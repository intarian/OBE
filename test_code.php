<?php
foreach (glob("functions/*.php") as $filename)
{
    include $filename;
}
$conn = OpenCon();
$course = 'ns3201_Spring_2019';
?>
<!DOCTYPE html>
<html>
<title><?php echo project_codename() ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="w3images/w3.css">
<link rel="stylesheet" href="w3images/grade_instrument.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" integrity="sha256-8zyeSXm+yTvzUN1VgAOinFgaVFEFTyYzWShOy9w7WoQ=" crossorigin="anonymous"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<?php
//    $roll_list = mysqli_query($conn,"SELECT `rollno` FROM `student_records` WHERE `rollno` LIKE '%RP-18%'");
//    $roll_list_d = array();
//    while($col_list = mysqli_fetch_assoc($roll_list)){
//        $roll_list_d[] = $col_list['rollno'];
//    }
    
//    echo "hello";
//    for ($i=1;$i<=count($roll_list_d);$i++){
//        $roll = $roll_list_d[$i-1];
//        echo "UPDATE `batch_list` SET `RP_18` = '$roll' WHERE `batch_list`.`id` = $i;";
//        echo "<br>";
//    }
    
    $session_sql = mysqli_query($conn,"SHOW COLUMNS FROM `batch_list`");    
    $session_list = array();
    while($session = mysqli_fetch_assoc($session_sql)){
        $session_list[] = $session['Field'];
    }
    print_r($session_list);

 ?>