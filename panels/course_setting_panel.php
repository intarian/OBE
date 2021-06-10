   <?php if($error): ?>
    <h4 align="center" class="w3-text-red"><strong>Error: <?php echo $error ?></strong></h4>
    <?php endif; ?>
<?php
    if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
        echo "<h5 align=\"center\" class=\"w3-text-red\"><strong>The course is marked ended</strong></h5>";
        exit();
    }
?>
<form id="course_setting_update" method="get" action="course_setting_update.php">
    <table class="w3-table w3-auto w3-bordered">
    <tr><td><b>Course Code: </b></td>
        <td><b> <?php echo $course_code ?></b></td>
        </tr>
    <tr><td><b>Course Title: </b></td>
        <td><b> <?php echo $course_title ?></b></td>
        </tr>
        <tr>
    <tr><td><b>Course Instructor: </b></td>
        <td><b> <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT instructor FROM courses_info WHERE course_id='".$course."'"))['instructor']; ?></b></td>
        </tr>
        <tr>
            <td><b>Course Description</b></td><td><textarea style=" width:80%; height:150px;" name="course_description"><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_description FROM courses_info WHERE course_id='$course'"))['course_description'];?></textarea></td>
        </tr>
        <?php // Fetch current course weightages
        $mid_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT mid_weight FROM courses_info WHERE course_id='$course'"))['mid_weight'];
        $final_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT final_weight FROM courses_info WHERE course_id='$course'"))['final_weight'];
        $quiz_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quiz_weight FROM courses_info WHERE course_id='$course'"))['quiz_weight'];
        $assign_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT assign_weight FROM courses_info WHERE course_id='$course'"))['assign_weight'];
        $project_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT project_weight FROM courses_info WHERE course_id='$course'"))['project_weight'];
        $other_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT other_weight FROM courses_info WHERE course_id='$course'"))['other_weight'];
		$lab_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT lab_weight FROM courses_info WHERE course_id='$course'"))['lab_weight'];
        $viva_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT viva_weight FROM courses_info WHERE course_id='$course'"))['viva_weight'];
        $presentation_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT presentation_weight FROM courses_info WHERE course_id='$course'"))['presentation_weight'];
        $total_weight = $mid_weight+$final_weight+$quiz_weight+$assign_weight+$project_weight+$other_weight+$lab_weight+$viva_weight+$presentation_weight;
        $clo_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT clo_count FROM courses_info WHERE course_id='$course'"))['clo_count'];
        ?>
        <tr><td><b>Mid-Term Weightage</b></td><td><input type="number" step="any" name="mid_weight" value="<?php echo $mid_weight ?>"></td> </tr>
        <tr><td><b>Final-Term Weightage</b></td><td><input type="number" step="any" name="final_weight" value="<?php echo $final_weight ?>"></td> </tr>
        <tr><td><b>Quizzes Weightage</b></td><td><input type="number" step="any" name="quiz_weight" value="<?php echo $quiz_weight ?>"></td> </tr>
        <tr><td><b>Assignments Weightage</b></td><td><input type="number" step="any" name="assign_weight" value="<?php echo $assign_weight ?>"></td> </tr>
        <tr><td><b>LAB Weightage</b></td><td><input type="number" step="any" name="lab_weight" value="<?php echo $lab_weight ?>"></td> </tr>
		<tr><td><b>Project Weightage</b></td><td><input type="number" step="any" name="project_weight" value="<?php echo $project_weight ?>"></td> </tr>
        <tr><td><b>VIVA Weightage</b></td><td><input type="number" step="any" name="viva_weight" value="<?php echo $viva_weight ?>"></td> </tr>
        <tr><td><b>Presentation Weightage</b></td><td><input type="number" step="any" name="presentation_weight" value="<?php echo $presentation_weight ?>"></td> </tr>
        <tr><td><b>Other Weightage</b></td><td><input type="number" step="any" name="other_weight" value="<?php echo $other_weight ?>"></td> </tr>
        <tr><td><b>Total</b></td><td><b><?php echo $total_weight ?></b></td> </tr>
        <tr><td><b>No. of CLO's</b></td><td><input type="number" name="clo_count" value="<?php echo $clo_count ?>"></td> </tr>
        </table>
    
    <?php if ($clo_count>0){
        Print "<br>";
        Print "<table class=\"w3-table w3-auto w3-table-all w3-topbar\">";
        Print "<tr><th colspan=\"3\" style=\"text-align: center\">CLO's Settings</th></tr>";
        $bloom_tax_level = array('C1','C2','C3','C4','C5','C6','A1','A2','A3','A4','A5','P1','P2','P3','P4','P5','P6','P7');
        Print "<th>CLO's</th><th>CLO Description</th><th>Taxonomy Level</th>";
        $clo_details = mysqli_fetch_assoc(mysqli_query($conn,"SELECT clo_details FROM courses_info WHERE course_id='$course'"))['clo_details'];
        $clo_details = explode(":\^\:",$clo_details);
        $j=0;
        while($j<count($clo_details)){
            Print "<tr><td><strong>$clo_details[$j]</strong></td>";
            Print "<td><textarea  id=\"course_setting_update\" style=\" width:80%; height:100px; \" name=\"CLO_descript_$clo_details[$j]\" >".$clo_details[$j+1]."</textarea></td>";
            $curr_bloom = $clo_details[$j+2];
            Print "<td><select name=\"bloom_tax_select_$clo_details[$j]\">";
            for ($t=0;$t<count($bloom_tax_level);$t++){
                if ($bloom_tax_level[$t]==$curr_bloom)
                    Print "<option value=$curr_bloom selected=\"selected\">".$curr_bloom."</option>";
                else
                   Print "<option value=".$bloom_tax_level[$t].">".$bloom_tax_level[$t]."</option>";
            }
            Print "</select></td></tr>";
            $j+=3;
        }
        Print "</table>";
}
    ?>
        
 <?php if ($clo_count>0){
        Print "<br>";
        Print "<table class=\"w3-table w3-auto w3-table-all w3-topbar\">";
        Print "<tr><th colspan=\"2\" style=\"text-align: center\">PLO's Enabled</th></tr>";
            $plo_enabled_data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT plos_enabled FROM courses_info WHERE course_id = '$course'"))['plos_enabled'];
            $plo_enabled=explode(":\^\:",$plo_enabled_data);
            $i = 0;
             if ($plo_enabled[$i]==1){
                 Print "<tr><td><input checked type=\"checkbox\" id=\"PLO1\" name=\"PLO1_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<tr><td><input type=\"checkbox\" id=\"PLO1\" name=\"PLO1_en\" value=\"Yes\">";
             Print "<label for=\"PLO1\"><b>PLO 1: Engineering Knowledge</b></label></td>";
             if ($plo_enabled[$i]==2){
                 Print "<td><input checked type=\"checkbox\" id=\"PLO2\" name=\"PLO2_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<td><input type=\"checkbox\" id=\"PLO2\" name=\"PLO2_en\" value=\"Yes\">";
             Print "<label for=\"PLO1\"><b>PLO 2: Problem Analysis</b></label></td></tr>";
             if ($plo_enabled[$i]==3){
                 Print "<tr><td><input checked type=\"checkbox\" id=\"PLO3\" name=\"PLO3_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<tr><td><input type=\"checkbox\" id=\"PLO3\" name=\"PLO3_en\" value=\"Yes\">";
             Print "<label for=\"PLO3\"><b>PLO 3: Design/Development of Solution</b></label></td>";
             if ($plo_enabled[$i]==4){
                 Print "<td><input checked type=\"checkbox\" id=\"PLO4\" name=\"PLO4_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<td><input type=\"checkbox\" id=\"PLO4\" name=\"PLO4_en\" value=\"Yes\">";
             Print "<label for=\"PLO1\"><b>PLO 4: Investigation</b></label></td></tr>";
             if ($plo_enabled[$i]==5){
                 Print "<tr><td><input checked type=\"checkbox\" id=\"PLO5\" name=\"PLO5_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<tr><td><input type=\"checkbox\" id=\"PLO5\" name=\"PLO5_en\" value=\"Yes\">";
             Print "<label for=\"PLO5\"><b>PLO 5: Modern Tool Usage</b></label></td>";
             if ($plo_enabled[$i]==6){
                 Print "<td><input checked type=\"checkbox\" id=\"PLO6\" name=\"PLO6_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<td><input type=\"checkbox\" id=\"PLO6\" name=\"PLO6_en\" value=\"Yes\">";
             Print "<label for=\"PLO6\"><b>PLO 6: The Engineer and Society</b></label></td></tr>";
             if ($plo_enabled[$i]==7){
                 Print "<tr><td><input checked type=\"checkbox\" id=\"PLO7\" name=\"PLO7_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<tr><td><input type=\"checkbox\" id=\"PLO7\" name=\"PLO7_en\" value=\"Yes\">";
             Print "<label for=\"PLO7\"><b>PLO 7: Environment and Sustainability</b></label></td>";
             if ($plo_enabled[$i]==8){
                 Print "<td><input checked type=\"checkbox\" id=\"PLO8\" name=\"PLO8_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<td><input type=\"checkbox\" id=\"PLO8\" name=\"PLO8_en\" value=\"Yes\">";
             Print "<label for=\"PLO8\"><b>PLO 8: Ethics</b></label></td></tr>";
             if ($plo_enabled[$i]==9){
                 Print "<tr><td><input checked type=\"checkbox\" id=\"PLO9\" name=\"PLO9_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<tr><td><input type=\"checkbox\" id=\"PLO9\" name=\"PLO9_en\" value=\"Yes\">";
             Print "<label for=\"PLO9\"><b>PLO 9: Individual and Teamwork</b></label></td>";
             if ($plo_enabled[$i]==10){
                 Print "<td><input checked type=\"checkbox\" id=\"PLO10\" name=\"PLO10_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<td><input type=\"checkbox\" id=\"PLO10\" name=\"PLO10_en\" value=\"Yes\">";
             Print "<label for=\"PLO10\"><b>PLO 10: Communication</b></label></td></tr>";
             if ($plo_enabled[$i]==11){
                 Print "<tr><td><input checked type=\"checkbox\" id=\"PLO11\" name=\"PLO11_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<tr><td><input type=\"checkbox\" id=\"PLO11\" name=\"PLO11_en\" value=\"Yes\">";
             Print "<label for=\"PLO11\"><b>PLO 11: Project Management</b></label></td>";
             if ($plo_enabled[$i]==12){
                 Print "<td><input checked type=\"checkbox\" id=\"PLO12\" name=\"PLO12_en\" value=\"Yes\">";
                 $i++;
             }
             else
                 Print "<td><input type=\"checkbox\" id=\"PLO12\" name=\"PLO12_en\" value=\"Yes\">";
             Print "<label for=\"PLO12\"><b>PLO 12: Lifelong Learning</b></label></td></tr>";
            Print "</table>";
}
?>
        
        <?php if($plo_enabled_data){
            Print "<br>";
            Print "<table class=\"w3-table w3-auto w3-table-all w3-topbar\">";
            Print "<th style=\"text-align: center\" colspan=\"2\">PLO's Mapping onto CLO's</th>";
            for ($i=0;$i<count($plo_enabled);$i++){
                Print "<tr><th style=\"text-align: center\" colspan='2'>PLO ".$plo_enabled[$i]."</th></tr>";
                Print "<tr style=\"text-align: center\"><td><strong>CLO's</strong></td><td><strong>Weightage</strong></td></tr>";
                $plo_data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT PLO".$plo_enabled[$i]." FROM courses_info WHERE course_id = '$course'"))['PLO'.$plo_enabled[$i]];
                $plo_data = explode(":\^\:",$plo_data);
                array_unshift($plo_data, "delay_array"); // this piece of code delays the array by 1 step, so it can start from 1 instead of 0
                unset($plo_data[0]);
                
                for($clo=1;$clo<=$clo_count;$clo++){
                    Print "<tr style=\"text-align: center\"><td>CLO ".$clo."</td>";
                    $clo_data_pos = array_search("CLO$clo",$plo_data);
                    if ($clo_data_pos)
                        $weight =$plo_data[$clo_data_pos+1];
                    else
                        $weight =0;
                    Print "<td><input type=\"number\" step=\"any\" name=\"clo_weight_PLO_$plo_enabled[$i]"."_".$clo."\" value=\"$weight\"></td></tr>";
                }
            }
        }
        Print "</table>";
    ?>
    <input type='hidden' name='method' value="update"/>
        <input type='hidden' name='course' value="<?php echo $course ?>"/>
        <!--<input type="hidden" name="clo_count" value="<?php //echo $clo_count ?>">-->

    </table>    
    <div align="center" style="margin-top: 20px;"><input class="sub" type="submit" value="Save Changes" /></div>
    </form>   