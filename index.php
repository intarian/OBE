<?php
// Initialize the session

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/index.php");
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>



<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <span class="w3-bar-item w3-centered"><b style="color:#ed5851"><?php echo project_codename() ?></b></span>
</div>
    <?php if ($_SESSION["username"]=='admin'): ?>
    <div class="w3-container" style="margin-top: 50px;">
        <h5><a href='admin/index.php'>Admin Control Panel</a></h5>
        <h5> All Courses Offered</h5>
    </div> 
    <?php else: ?>
    <div class="w3-container" style="margin-top: 50px;">
        <h5>My Courses <a href="logout.php" class="w3-bar-item "><i class="fa fa-power-off"></i></a></h5>
    </div> 
    <?php endif; ?>
	<div class="w3-bar-block">
		<table class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white'>
            <?php
            $course_d = mysqli_query($conn,"SELECT course_id FROM courses_info");
            $course_list = array();
            while($course_id = mysqli_fetch_assoc($course_d)){
                $course_list[] = $course_id['course_id'];
            }
            $user_courses_id = array();
            $terms_offered = array();
            for ($i=0;$i<count($course_list);$i++){
                if(access_verify($course_list[$i],$_SESSION["username"],$conn)==1){
                    $user_courses_id[] = $course_list[$i];
                    $terms_offered[] = $offer_term = mysqli_fetch_assoc(mysqli_query($conn,"SELECT term_offer FROM courses_info WHERE course_id='".$course_list[$i]."'"))['term_offer'];
                }
            }
            
            
            $year = ['2021','2020','2019','2018','2017'];
/*            $courses_offered_in_term = array_count_values($terms_offered);
            echo $courses_offered_in_term['Spring 2019'];
            echo "<br>";
            $key = array_search ('Spring 2019', $terms_offered);
            print_r($key)*/
            for ($yr=0;$yr<count($year);$yr++){
                // For Fall yr
            //    $fall_count = $courses_offered_in_term['Fall '.$year[$yr]];
                if (in_array('Fall '.$year[$yr],$terms_offered))
                        Print ("<tr><th>Fall ".$year[$yr]."</th></th></tr>");
                for ($i=0;$i<count($terms_offered);$i++){
                    if ($terms_offered[$i] == 'Fall '.$year[$yr]){
                        $course = $user_courses_id[$i];
                        $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course."'"))['course_title'];
                        $offer_term = mysqli_fetch_assoc(mysqli_query($conn,"SELECT term_offer FROM courses_info WHERE course_id='".$course."'"))['term_offer'];
                        $course_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_type FROM courses_info WHERE course_id='".$course."'"))['course_type'];
                        $course_end_status = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE course_id='".$course."'"))['course_ended'];
                        if ($course_end_status == 1)
                            Print "<tr><td><a href=\"main.php?course=$course\">$course_title $course_type | $offer_term</a><img src=\"w3images/bow_icon_2.png\" style=\"width:20px;height:10px;\"></td></tr>";
                        else
                            Print "<tr><td><a href=\"main.php?course=$course\">$course_title $course_type | $offer_term</a></td></tr>";
                    }
                }
                if (in_array('Spring '.$year[$yr],$terms_offered))
                        Print ("<tr><th>Spring ".$year[$yr]."</th></th></tr>");
                for ($i=0;$i<count($terms_offered);$i++){
                    if ($terms_offered[$i] == 'Spring '.$year[$yr]){                
                        $course = $user_courses_id[$i];
                        $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course."'"))['course_title'];
                        $offer_term = mysqli_fetch_assoc(mysqli_query($conn,"SELECT term_offer FROM courses_info WHERE course_id='".$course."'"))['term_offer'];
                        $course_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_type FROM courses_info WHERE course_id='".$course."'"))['course_type'];
                        $course_end_status = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE course_id='".$course."'"))['course_ended'];
                        if ($course_end_status == 1)
                            Print "<tr><td><a href=\"main.php?course=$course\">$course_title $course_type | $offer_term</a><img src=\"w3images/bow_icon_2.png\" style=\"width:20px;height:10px;\"></td></tr>";
                        else
                            Print "<tr><td><a href=\"main.php?course=$course\">$course_title $course_type | $offer_term</a></td></tr>";
                    }
                }
                    
            }
         
//                Print ()
                    
            //    }
            //}
            ?>

        </table>
	</div>
</body>
</html>
		