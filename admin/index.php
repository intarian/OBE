<?php
// Initialize the session
/*
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
if($_SESSION["username"]!='admin'){
    exit("Access Denied");
}

*/
// include function folder
foreach (glob("../functions/*.php") as $filename)
{
    include $filename;
}
$conn = OpenCon();

//What page to show
$menu_item = $_GET['menu'];

//$error = $_GET['error'];
?>
<!DOCTYPE html>
<html>
<title><?php echo project_codename() ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="../w3images/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>



<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <span class="w3-bar-item w3-right"><b style="color:#ed5851"><?php echo project_codename() ?></b></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../w3images/avatar5.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span><strong>Hi! <?php echo $_SESSION["username"] ?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="../logout.php" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i></a>
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
	 <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onClick="w3_close()" title="close menu"><em class="fa fa-remove fa-fw"></em> Close Menu</a>
	 <a href="main.php?menu=home" class="w3-bar-item w3-button w3-padding" style="align:center"><em class="fa fa-home fa-fw"></em> Home</a>
     <a href="index.php?menu=plo_obt_session" class="w3-bar-item w3-button w3-padding" style="align:center"><em class="fa fa-dashboard fa-fw"></em>Batch PLO Achievment</a>
</ul>
        
  </div>
	<!-- Side Bar Menu Code Begins Here -->  
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a><br><br> -->
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT!-->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b> Admin Control Panel | <a href='../index.php'> View all Courses</a></b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-small w3-animate-zoom">
        <div class="w3-center"><i class="fa fa-plus-square w3-xxxlarge"></i></div>
        <h4 class="w3-center"><a href="index.php?menu=add_course" style="text-decoration: none">Add new Course</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-small  w3-animate-zoom">
        <div class="w3-center"><i class="fa fa-users w3-xxxlarge"></i></div>
          <h4 class="w3-center"><a href="index.php?menu=manage_enrolment" style="text-decoration: none">Manage Enrolment</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-small  w3-animate-zoom">
        <div class="w3-center"><i class="fa fa-line-chart w3-xxxlarge"></i></div>
        <h4 class="w3-center"><a href="index.php?menu=student_plo_attainment" style="text-decoration: none">Student PLO's Score</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-padding-small  w3-animate-zoom">
        <div class="w3-center"><i class="fa fa-user w3-xxxlarge"></i></div>
        <h4 class="w3-center"><a href="index.php?menu=register" style="text-decoration: none">Add new User</a></h4>
      </div>
    </div>

</div>
<!-- Button Menu ends here. -->

<?php if($menu_item==''): ?>
    <!-- Show default display -->
    <div class="w3-container">    
        <?php include('admin_panels/default_display.php'); ?>
    </div>
<?php endif; ?>

    
<?php if($menu_item=='plo_obt_session'): ?>
    <!-- Show default display -->
    <div class="w3-container" style="overflow:auto; white-space: nowrap;">    
        <?php include('admin_panels/plo_obt_session.php'); ?>
    </div>
<?php endif; ?>

    
    
<?php if ($menu_item=='register'): ?>
    <!-- Add new user -->
    <div class="w3-container" style="overflow:auto; white-space: nowrap;">
        <?php include('admin_panels/register.php'); ?>
    </div>    
<?php endif; ?>
    


<?php if ($menu_item=='add_course'): ?>
    <!-- Add new course -->
    <div class="w3-container" style="overflow:auto; white-space: nowrap;">
        <?php include('admin_panels/add_course.php'); ?>
    </div>
<?php endif; ?>




<?php if($menu_item=='manage_enrolment'): ?>
    <!-- Manage Enrollment /add remove students and edit info -->
    <div class="w3-container" style="overflow:auto; white-space: nowrap;">
        <?php include('admin_panels/manage_enrollment.php'); ?>
    </div>    
<?php endif; ?>




<?php if($menu_item==student_plo_attainment): ?>
    <div class="w3-container" style="overflow:auto; white-space: nowrap;">
        <?php include('admin_panels/student_plo_attainment.php'); ?>
    </div>
<?php endif; ?>
                                                                    

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
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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