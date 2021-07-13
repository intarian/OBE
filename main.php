<?php


// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //header("location: login.php");
    header("Location:login/index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
    exit;
}


// include function folder
foreach (glob("functions/*.php") as $filename)
{
    include $filename;
}
$conn = OpenCon();

//What page to show
$menu_item = $_GET['menu'];
$course = $_GET['course'];

//$menu_item = 'rubric_design_new';
//$course = 'ee2201l_Spring_2019';

$access = access_verify($course,$_SESSION["username"],$conn);

if($access == 0){
    exit("Access Denied");
}

$error = $_GET['error'];
if($course==''){
    echo "Please select valid course and session";
    exit();
}
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



<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <span class="w3-bar-item w3-right"><b style="color:#ed5851"><?php echo project_codename() ?></b></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
        <?php // Fetch image link from database 
            $avatar_link =  mysqli_fetch_assoc(mysqli_query($conn,"SELECT avatar FROM users WHERE username='".$_SESSION["username"]."'"))['avatar'];
        ?>
      <img src="<?php echo $avatar_link ?>" class="w3-circle w3-margin-right" style="width:60px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span><strong>Hi! <?php echo $_SESSION["username"] ?> </strong></span><br>
      <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i></a>
      <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>-->
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-arrow-left"></i></a>
      <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-close"></i></a>
    </div>
  </div>
  <hr>
<!--  <div class="w3-container">
    <h5>Dashboard</h5>
  </div> -->
<!-- Side Bar Menu Code Begins Here -->
  <div class="w3-bar-block">
    <div id="menu">
        <ul class="ul_menu">
	 <!-- <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onClick="w3_close()" title="close menu"><em class="fa fa-remove fa-fw"></em> Close Menu</a> -->
	 <!-- <a href="main.php?menu=home" class="w3-bar-item w3-button w3-padding" style="align:center"><em class="fa fa-home fa-fw"></em> Home</a>-->
      <?php //list grading components available in database of course in sidepanel
	   include('panels/sidepanel.php');
	  ?>
</ul>
        
  </div>
	<!-- Side Bar Menu Code Begins Here -->  
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a><br><br> -->
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT!-->
<div class="w3-main" style="margin-left:300px;margin-top:43px;" id="main">
    <?php $course_end_status = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE course_id='".$course."'"))['course_ended'];
    ?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5>
<!--        <button class="w3-button" onclick="w3_open()">&#9776;</button>-->
        <?php if($course_end_status == 1): ?>
        <b><img src="w3images/bow_icon_2.png" style=\"width:20px;height:10px;\"><?php echo "<a style=\"text-decoration:none;\" class=\"w3-button w3-hover-cyan\" href=\"main.php?course=$course\">".$course_code." | ".$course_title." | ".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_type FROM courses_info WHERE course_id='".$course."'"))['course_type']."</a>" ?></b>
        <?php else: ?>
        <b><a class="w3-button w3-hover-green" href="main.php?menu=course_setting&course=<?php echo $course ?>"><em class='fa fa-wrench fa-fw'></em></a> <?php echo "<a style=\"text-decoration:none;\" class=\"w3-button w3-hover-cyan\" href=\"main.php?course=$course\">".$course_code." | ".$course_title." | ".mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_type FROM courses_info WHERE course_id='".$course."'"))['course_type']."</a>" ?></b>&nbsp;&nbsp;<a href="main.php?menu=design_rubrics&course=<?php echo $course ?>" class="w3-button w3-hover-blue">Design Rubrics</a>
        <?php endif; ?>
    </h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-small w3-animate-zoom">
        <div class="w3-center"><i class="fa fa-plus-square w3-xxxlarge"></i></div>
        <h4 class="w3-center"><a style="text-decoration:none;" href="main.php?menu=add_module&course=<?php echo $course ?>">Add new Module</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-text-white w3-padding-small w3-blue-gray w3-animate-zoom">
        <div class="w3-center"><i class="fa fa-calendar-check-o w3-xxxlarge"></i></div>
          <h4 class="w3-center"><a style="text-decoration:none;" href="main.php?menu=atten_display_all&course=<?php echo $course ?>">View Attendance</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-small w3-animate-zoom">
        <div class="w3-center"><i class="fa fa-bar-chart w3-xxxlarge"></i></div>
          <h4 class="w3-center"><a style="text-decoration:none;" href="main.php?menu=clo_disp&course=<?php echo $course ?>">View CLO Achievement</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-small w3-animate-zoom">
        <div class="w3-center"><i class="fa fa-area-chart w3-xxxlarge"></i></div>
          <h4 class="w3-center"><a style="text-decoration:none;" href="main.php?menu=plo_disp&course=<?php echo $course ?>">View PLO Achievement</a></h4>
      </div>
    </div>

</div>
<!-- Button Menu ends here. -->

<!-- Show Course Details and Offerings. -->
<div class="w3-container">
<?php 
if ($menu_item==''){  // This is the default display panel 
	include('panels/default_panel.php');
} 
?>
</div>

    

<!-- Show Cumulative Display -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php // Show overall Grade Achievement
if ($menu_item=='cumulative'){ 
	include('panels/cumulative.php');
} 
?>
</div>
<!-- CLO Attainment Display -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php // Show overall Grade Achievement
if ($menu_item=='clo_disp'){
    include('panels/clo_disp.php');
}
?>
    </div>    

<!-- PLO Attainment Display -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php // Show overall PLO Achievement
if ($menu_item=='plo_disp'){
    include('panels/plo_disp.php');
}

?>
</div>    

<!-- Instrument overall cumulative display-->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php 
if ($menu_item=='instrument_cumulative'){
    include('panels/instrument_cumulative.php');
} 
?>

<!-- Show Display data -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php 
if ($menu_item=='display'){
    include('panels/display_module_data.php');
} 
?>
</div>
    
<!-- Show Attendance Display data [date wise]-->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php 
if ($menu_item=='atten_display'){
    include('panels/attendance_display_single.php');
} 
?>
	</div>
<!-- Show Attendance Display data [All dates wise]-->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php 
if ($menu_item=='atten_display_all'){
    include('panels/attendance_display_all.php');
} 
?>
	</div>
<!-- Update Attendance data -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php 
if ($menu_item=='update_attendance'){
    include('panels/update_attendance.php');
}
?>
</div>
    
<!-- Update Marks & rubrics data -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php 
if ($menu_item=='update'){
    include('panels/update_marks_rubrics.php');
}
?>
	</div>

<!-- Add new Module -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php if($menu_item=='add_module'){
    include('panels/add_module_panel.php');
}
?>
</div>	

<!-- Add Rubrics -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php if($menu_item=='design_rubrics'){
    include('panels/design_rubrics_new.php');
}
?>
</div>	
    
    
<!-- Add Rubrics -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php if($menu_item=='add_rubrics'){
    include('panels/design_rubrics.php');
}
?>
</div>
    
<!-- Course Settings -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php if($menu_item=='course_setting'){
    include('panels/course_setting_panel.php');
}
?>    
    </div>
<!-- module edit page -->
<div class="w3-container" style="overflow:auto; white-space: nowrap;">
<?php 
if($menu_item=='module_edit'){
    include('panels/module_edit_panel.php');
}
?>
</div>
    

    
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <!--<h4>FOOTER</h4>-->
    <p>Designed by <a href="https://intarian.com" target="_blank"></a>Muhammad Zulqarnain</p>
  </footer>

  <!-- End page content -->
</div>

<script>
    
$(document).ready(function() {
  $('.parent-gi').on("click",function(){
    
    $(this).find(".sub-nav-gi").toggle();
    $(this).siblings().find(".sub-nav-gi").hide();
    
    if($(".sub-nav-gi:visible").length === 0 ){
      $("#menu-overlay").hide();
    }else {
      $("#menu-overlay").show();
    }
  });
  
   $("#menu-overlay").on("click",function(){
     $(".sub-nav-gi").hide();
     $(this).hide();
   });
});
</script>
<script> 
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    document.getElementById("mySidebar").style.width = "300px";
	document.getElementById("main").style.marginLeft = "300px";
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
/*
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
	document.getElementById("mySidebar").style.width = "300px";
	document.getElementById("main").style.marginLeft = "300px";
}

// Close the sidebar with the close button
function w3_close() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
*/
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <script type="text/javascript">
        $(".update_table_attendance").click(function() {
        $('td input').bind('paste', null, function(e) {
            $input = $(this);
            setTimeout(function() {
                var values = $input.val().split(/\s+/),
                    row = $input.closest('tr'),
                    col = $input.closest('th').index();
                    console.log(col);
                for (var i = 0; i < values.length; i++) {
                    row.find('input').eq(col).val(values[i]);
                    row = row.next();
                }
            }, 0);
        });
    });
    </script> 
    
    <script type="text/javascript">
        $(".update_table").click(function() {
        $('td input').bind('paste', null, function(e) {
            $input = $(this);
            setTimeout(function() {
                var values = $input.val().split(/\s+/),
                    row = $input.closest('tr'),
                    col = $input.closest('th').index();
                                    console.log(values);
                for (var i = 0; i < values.length; i++) {
                    row.find('input').eq(col).val(Number(values[i]));
                    row = row.next();
                }
            }, 0);
        });
    });
    </script>  
 

    <script src="w3images/module_selector.js"></script>
    
<?php mysqli_close($conn); ?>
</body>
</html>