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

<?php 
    $course = $_GET['course'];
    $mid_weight = $_GET['mid_weight'];
    $final_weight = $_GET['final_weight'];
    $quiz_weight = $_GET['quiz_weight'];
    $assign_weight = $_GET['assign_weight'];
    $project_weight = $_GET['project_weight'];
    $viva_weight = $_GET['viva_weight'];
    $presentation_weight = $_GET['presentation_weight'];
    $other_weight = $_GET['other_weight'];
    $lab_weight = $_GET['lab_weight'];
    $clo_count = $_GET['clo_count'];
    $course_description = mysqli_real_escape_string($conn,$_GET['course_description']);
    $delimeter = mysqli_real_escape_string($conn,":\^\:");

    if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
        header('Refresh: 0; URL=main.php?error=The course is marked ended, write access is not permitted&menu=course_setting&course='.$course.'');
        exit();
    }
  
    
    // Update course description
    mysqli_query($conn,"UPDATE courses_info SET course_description = '$course_description' WHERE courses_info.`course_id` ='$course'");
    
    // Update Mid Weight
    mysqli_query($conn,"UPDATE courses_info SET mid_weight = $mid_weight WHERE courses_info.`course_id` ='$course'");
    
    // Update Final Weight
    mysqli_query($conn,"UPDATE courses_info SET final_weight = $final_weight WHERE courses_info.`course_id` ='$course'");
    
    // Update Quiz Weight
    mysqli_query($conn,"UPDATE courses_info SET quiz_weight = $quiz_weight WHERE courses_info.`course_id` ='$course'");
    
    // Update LAB Weight
    mysqli_query($conn,"UPDATE courses_info SET lab_weight = $lab_weight WHERE courses_info.`course_id` ='$course'"); 

    // Update Assign Weight
    mysqli_query($conn,"UPDATE courses_info SET assign_weight = $assign_weight WHERE courses_info.`course_id` ='$course'");    
    // Update Project Weight
    mysqli_query($conn,"UPDATE courses_info SET project_weight = $project_weight WHERE courses_info.`course_id` ='$course'");

    // Update VIVA Weight
    mysqli_query($conn,"UPDATE courses_info SET viva_weight = $viva_weight WHERE courses_info.`course_id` ='$course'");

    // Update Presentation Weight
    mysqli_query($conn,"UPDATE courses_info SET presentation_weight = $presentation_weight WHERE courses_info.`course_id` ='$course'");

    // Update Other Weight
    mysqli_query($conn,"UPDATE courses_info SET other_weight = $other_weight WHERE courses_info.`course_id` ='$course'");
    
    // Update CLO Count
    mysqli_query($conn,"UPDATE courses_info SET CLO_count = $clo_count WHERE courses_info.`course_id` ='$course'");
    
    // fetch and update PLO enabled
    $plo_enabled = array();
    for ($plo=1;$plo<=12;$plo++){
        $plo_gen = 'PLO'.$plo.'_en';
        $plo_rxv = $_GET[$plo_gen];
        if($plo_rxv == 'Yes')
            $plo_enabled[] = $plo;
    }
    $plo_enabled_sql = implode($delimeter,$plo_enabled);
    mysqli_query($conn,"UPDATE courses_info SET plos_enabled = '$plo_enabled_sql' WHERE courses_info.`course_id` ='$course'");

    for ($k=1;$k<=12;$k++){ //Clear out existing data
        mysqli_query($conn,"UPDATE courses_info SET PLO$k = '' WHERE courses_info.`course_id` ='$course'");
    }

    for($p=0;$p<count($plo_enabled);$p++){
        $plo = $plo_enabled[$p];
        $clo_data = '';
        for ($i=1;$i<=$clo_count;$i++){
            $weight_clo = number_format($_GET['clo_weight_PLO_'.$plo.'_'.$i],1);
            if ($weight_clo>0){
                if ($clo_data == '')
                    $clo_data = "CLO".$i.$delimeter."$weight_clo";
                else
                    $clo_data = $clo_data.$delimeter."CLO".$i.$delimeter."$weight_clo";
            }
        }
    //    echo $clo_data;
    //    echo "<br>";
        mysqli_query($conn,"UPDATE courses_info SET PLO$plo = '$clo_data' WHERE courses_info.`course_id` ='$course'");
    }
    
    // Flush out existing CLO data
    mysqli_query($conn,"UPDATE courses_info SET clo_details = '' WHERE courses_info.`course_id` ='$course'");
    // Update CLO data
    $bloom_verfy_clos = [];  //store the status of bloom verification for each clo;
    for ($i=1;$i<=$clo_count;$i++){
        $clo_descript=$_GET['CLO_descript_CLO'.$i];
        $bloom_tax=$_GET['bloom_tax_select_CLO'.$i.''];
        if ($clo_descript=="")
            $clo_descript = "CLO Description goes here";
        else{
            $bloom_verify = bloom_dictionary($clo_descript,$bloom_tax);
            if ($bloom_verify==0){
                $bloom_verfy_clos[$i] = 1;
                //header('Refresh: 0; URL=main.php?menu=course_setting&error=Bloom verb not found&course='.$course.'');
                //exit();
            }
        }
        if ($i==1)
            $clo_detail = "CLO$i".$delimeter.mysqli_real_escape_string($conn,$clo_descript).$delimeter.$bloom_tax;
        else
            $clo_detail = $clo_detail.$delimeter."CLO$i".$delimeter.mysqli_real_escape_string($conn,$clo_descript).$delimeter.$bloom_tax;
    }

    mysqli_query($conn,"UPDATE courses_info SET clo_details = '$clo_detail' WHERE courses_info.`course_id` ='$course'");
    
    if (in_array(1,$bloom_verfy_clos))
        header('Refresh: 0; URL=main.php?menu=course_setting&error=Bloom verb not found, data is still updated&course='.$course.'');
    else
        header('Refresh: 0; URL=main.php?menu=course_setting&course='.$course.'');



/*

    for ($k=1;$k<=12;$k++){ //Flush out existing data
        mysqli_query($conn,"UPDATE courses_info SET PLO$k = '' WHERE courses_info.`course_id` ='$course'");
    }
    for ($c=1;$c<=$clo_count;$c++){
        $plo = $plo_list[$c];
        $exist_plo_data = mysqli_real_escape_string($conn,mysqli_fetch_assoc(mysqli_query($conn,"SELECT PLO".$plo." FROM courses_info WHERE course_id = '$course'"))['PLO'.$plo]);
        mysqli_query($conn,"UPDATE courses_info SET PLO$plo = '' WHERE courses_info.`course_id` ='$course'"); //Flush out existing data
        if($exist_plo_data)
            $new_data = $exist_plo_data.$delimeter."CLO".$c.$delimeter.$clo_descript[$c].$delimeter.$clo_weight[$c].$delimeter.$bloom_tax_level[$c];
        else
            $new_data = "CLO".$c.$delimeter.$clo_descript[$c].$delimeter.$clo_weight[$c].$delimeter.$bloom_tax_level[$c];
        mysqli_query($conn,"UPDATE courses_info SET PLO$plo = '$new_data' WHERE courses_info.`course_id` ='$course'");
    }
   header('Refresh: 0; URL=main.php?menu=course_setting&course='.$course.'');
   */
    ?>