<?php // Fetch Course details from course_info table
    function plo_attain_single($course_id,$plo,$rollno,$conn){

    $clo_list = mysqli_fetch_assoc(mysqli_query($conn,"SELECT PLO".$plo." FROM courses_info WHERE course_id = '$course_id'"))['PLO'.$plo];
    if($clo_list){
        $plo_clo_split = explode(":\^\:",$clo_list); //fetch mapping of first plo

//    print_r($plo_clo_split);
//    echo "<br>";

        
        $clo_count_plo = (count($plo_clo_split));
//        echo($clo_count_plo);
//        echo "<br>";
        $i = 0;
        $plo_value = 0;
        $clo_t_perage = 0;
          //      echo "<br>";
        while ($i<$clo_count_plo && $clo_count_plo!='') {
            $clo_num = trim($plo_clo_split[$i],"CLO");
        //    print_r($plo_clo_split);
  //          echo $clo_num;
   //         echo "<br>";
            $clo_perage = $plo_clo_split[$i+1];
    //        echo $clo_perage;
     //       echo "<br>";
            $clo_t_perage += $clo_perage;
    //        echo $clo_perage;
    //        echo "<br>";
            $i=$i+2;
            $plo_value = $plo_value + clo_attain_single($course_id,$clo_num,'Percentage',$rollno,$conn)*$clo_perage;
        }
  //      echo "<br>";
   //     echo $clo_t_perage;
    //    echo "<br>";
        $plo_avg = $plo_value/$clo_t_perage;
               // echo "<br>";
        return round($plo_avg,1,PHP_ROUND_HALF_UP);
               // echo "<br>";
    }
}
    ?>
