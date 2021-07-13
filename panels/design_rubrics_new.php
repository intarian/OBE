<?php 
    if(mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_ended FROM courses_info WHERE courses_info.`course_id` ='$course'"))['course_ended']){
        echo "<h5 align=\"center\" class=\"w3-text-red\"><strong>The course is marked ended</strong></h5>";
        exit();
    }

	$method = $_GET['method'];
    $rubric_set_count = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_set_count FROM courses_info Where course_id='".$course."'"))['rubric_set_count'];
    $rubric_count = $_GET['rubric_count'];
    if($_GET['rubric_name'])
        $rubric_name = $_GET['rubric_name'];
    else{
        $rubric_set_id_new = $rubric_set_count+1;
        $rubric_name = "Rubric Set ".$rubric_set_id_new;
    }
        
    $rubric_level = $_GET['rubric_level'];
?>

<?php if($method==''): ?>
    <div class="w3-container">
    <h3 align="center">Design Rubrics</h3>

    
    <form id="design_rubrics" method="get" action="">
    <table class="w3-table w3-auto w3-bordered">
        
        <tr><td><b>Rubric Set Id: </b></td>
        <td><b> <?php echo $rubric_set_count+1 ?></b></td>
        </tr>
        
        <tr><td><b>Course Code: </b></td>
        <td><b> <?php echo $course_code ?></b></td>
        </tr>
        
        <tr><td><b>Course Title: </b></td>
        <td><b> <?php echo $course_title ?></b></td>
        </tr>
        

        <tr>
            <td><b>Name of Rubric</b></td><td><input type="text" style=" width:80%; height:10%; font-weight: bold;" name="rubric_name"></input></td>
        </tr>

        <tr>
             <td><b># of Criterion</b></td><td>
                <select name="rubric_count">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
            </td> 
        </tr>

        <tr>
             <td><b>Level of Criterion</b></td><td>
                <select name="rubric_level">
                  <option value="6">6</option>
                  <option value="5">5</option>
                  <option value="4">4</option>
                </select>
            </td> 
        </tr>
        
    <input type='hidden' name='method' value="design_rubric"/>
    <input type='hidden' name='course' value="<?php echo $course ?>"/>
    <input type='hidden' name='menu' value="design_rubrics"/>
    </table>
    <br>
    <table align='center' class='w3-striped w3-bordered  w3-hoverable'>
    <tr><td align="center"><input class="sub" type="submit" value="Design Rubrics" /></td></tr>
    </table>

    </table>
    </form>
    </div>
<?php endif; ?>


<?php if($method=='design_rubric'): ?>
    <div class="w3-container">
    <h3 align="center">Add your Rubrics</h3>

    
    <form id="design_rubrics" method="get" action="">
    <table class="w3-table w3-auto w3-bordered">
        
        <tr><td><b>Rubric Set Id: </b></td>
        <td><b> <?php echo $rubric_set_count+1 ?></b></td>
        </tr>
        
        <tr><td><b>Course Code: </b></td>
        <td><b> <?php echo $course_code ?></b></td>
        </tr>
        
        <tr><td><b>Course Title: </b></td>
        <td><b> <?php echo $course_title ?></b></td>
        </tr>
        
        <tr><td><b>Rubric Name: </b></td>
        <td><b> <?php echo $rubric_name ?></b></td>
        </tr>
        
        <tr><td><b># of Criterion: </b></td>
        <td><b> <?php echo $rubric_count ?></b></td>
        </tr>
    
        <tr><td><b>Level of Criterion: </b></td>
        <td><b> <?php echo $rubric_level ?></b></td>
        </tr>
        
        </table>
        <br>

        
    <?php 
        for($i=1;$i<=$rubric_count;$i++){
            Print "<table class='w3-table w3-auto w3-bordered w3-topbar'>";
            Print "<tr>";
            Print "<td><b>Name of Criterion: $i</b></td><td>";
            Print "<input list='rubric_list' name='rubric_name_$i' /></label>
            <datalist id='rubric_list'>
              <option value='Realization of Experiment'>
              <option value='Team Work'>
              <option value='Computer Use'>
              <option value='Conduction Experiment'>
              <option value='Data Analysis'>
              <option value='Data Collection'>
              <option value='Laboratory Safety Rules'>
            </datalist>";

            Print "</tr>";

            /// Rubric Levels fpr grading.
            if ($rubric_level == 6){
                Print "<tr>";
                Print "<td><b>Exemplary [5]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_5_$i' placeholder='Outstanding performance/analysis/results' value='Outstanding performance/analysis/results'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Satisfactory [4]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_4_$i' placeholder='Produced accurate results/analysis' value='Produced accurate results/analysis'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Developing [3]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_3_$i' placeholder='Produced acceptable results/analysis' value='Produced acceptable results/analysis'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Unsatisfactory [2]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_2_$i' placeholder='Produced results/analysis with some errors' value='Produced results/analysis with some errors' ></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Unacceptable [1]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_1_$i' placeholder='Produced highly unacceptable results/analysis' value='Produced highly unacceptable results/analysis'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Absent [0]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_0_$i' placeholder='Did not perform' value='Did not perform'></textarea></td>";
                Print "</tr>";
            }
            
            
            if ($rubric_level == 5){
                Print "<tr>";
                Print "<td><b>Exemplary [5]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_5_$i' placeholder='Outstanding performance/analysis/results' value='Outstanding performance/analysis/results'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Accomplished [4]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_4_$i' placeholder='Produced accurate results/analysis' value='Produced accurate results/analysis'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Developing [3]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_3_$i' placeholder='Produced acceptable results/analysis' value='Produced acceptable results/analysis'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Begining [1]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_2_$i' placeholder='Produced results/analysis with some errors' value='Produced results/analysis with some errors' ></textarea></td>";
                Print "</tr>";


                Print "<tr>";
                Print "<td><b>Absent [0]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_0_$i' placeholder='Did not perform' value='Did not perform'></textarea></td>";
                Print "</tr>";
            }
            
            
            if ($rubric_level == 4){
                Print "<tr>";
                Print "<td><b>Exemplary [5]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_5_$i' placeholder='Outstanding performance/analysis/results' value='Outstanding performance/analysis/results'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Competent [3]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_4_$i' placeholder='Produced accurate results/analysis' value='Produced accurate results/analysis'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Developing [1]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_3_$i' placeholder='Produced acceptable results/analysis' value='Produced acceptable results/analysis'></textarea></td>";
                Print "</tr>";

                Print "<tr>";
                Print "<td><b>Absent [0]</b></td><td><textarea style='width:80%; height:30%;' name='rubric_0_$i' placeholder='Did not perform' value='Did not perform'></textarea></td>";
                Print "</tr>";
            }

            Print "</table>";
            Print "<br>";

        }
                ?>
        
        
    <input type='hidden' name='method' value="rubric_select"/>
    <input type='hidden' name='rubric_name' value="<?php echo $rubric_name ?>"/>
    <input type='hidden' name='rubric_count' value="<?php echo $rubric_count ?>"/>
    <input type='hidden' name='course' value="<?php echo $course ?>"/>
    <input type='hidden' name='rubric_level' value="<?php echo $rubric_level ?>"/>
    <input type='hidden' name='menu' value="design_rubrics"/>

    <br>
    <table align='center' class='w3-striped w3-bordered  w3-hoverable'>
    <tr><td align="center"><input class="sub" type="submit" value="Confirm Rubrics" /></td></tr>
    </table>

    </form>
    </div>
<?php endif; ?>


<?php if($method=='rubric_select'): ?>
        <div class="w3-container">
        <h3 align="center">Confirm Rubrics</h3>
            
        <form id="design_rubrics" method="get" action="">
        <table class="w3-table w3-auto w3-bordered">
        
        <tr><td><b>Rubric Set Id: </b></td>
        <td><b> <?php echo $rubric_set_count+1 ?></b></td>
        </tr>
        
        <tr><td><b>Course Code: </b></td>
        <td><b> <?php echo $course_code ?></b></td>
        </tr>
        
        <tr><td><b>Course Title: </b></td>
        <td><b> <?php echo $course_title ?></b></td>
        </tr>
        
        <tr><td><b>Rubric Name: </b></td>
        <td><b> <?php echo $rubric_name ?></b></td>
        </tr>
        
        <tr><td><b># of Criterion: </b></td>
        <td><b> <?php echo $rubric_count ?></b></td>
        </tr>
            
        <tr><td><b>Level of Criterion: </b></td>
        <td><b> <?php echo $rubric_level ?></b></td>
        </tr>
            
    </table>
    <br>

    <?php
    // Get and Fetch Data from all sources
    $delimiter = mysqli_real_escape_string($conn,":\^\:");
    $rubrics = array();
    $set_id = $rubric_set_count+1;
    array_push($rubrics,"set_".$course."_".$set_id);
    array_push($rubrics,$rubric_name);
    array_push($rubrics,$rubric_count);
    array_push($rubrics,$rubric_level);
    
    for ($r=1;$r<=$rubric_count;$r++){
        Print "<table class='w3-table w3-auto w3-bordered w3-topbar'>";
        Print "<tr>";
        Print "<td><b>Name of Criterion: $r</b></td><td>";
        if($_GET['rubric_name_'.$r]){
            $r_name = $_GET['rubric_name_'.$r];
            array_push($rubrics, $r_name);
            Print "<td><b>$r_name</b></td>";
        }
        else{
            array_push($rubrics, "Criterion ".$r);
            Print "<td><b>Criterion $r</b></td>";
        }
        Print "</tr>";
        
        if ($rubric_level == 6) {
            for ($i=5;$i>=0;$i--){
                if ($i==5){
                    Print "<tr>";
                    Print "<td><b>Exemplary [5]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Outstanding performance/analysis/results");
                        Print "<td>";
                        Print "Outstanding performance/analysis/results";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==4){
                    Print "<tr>";
                    Print "<td><b>Satisfactory [4]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced accurate results/analysis");
                        Print "<td>";
                        Print "Produced accurate results/analysis";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==3){
                    Print "<tr>";
                    Print "<td><b>Developing [3]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced acceptable results/analysis");
                        Print "<td>";
                        Print "Produced acceptable results/analysis";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==2){
                    Print "<tr>";
                    Print "<td><b>Unsatisfactory [2]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced results/analysis with some errors");
                        Print "<td>";
                        Print "Produced results/analysis with some errors";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==1){
                    Print "<tr>";
                    Print "<td><b>Unacceptable [1]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced highly unacceptable results/analysis");
                        Print "<td>";
                        Print "Produced highly unacceptable results/analysis";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==0){
                    Print "<tr>";
                    Print "<td><b>Absent [0]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Did not perform");
                        Print "<td>";
                        Print "Did not perform";
                        Print "</td>";
                    }
                    Print "</tr>";
                }    
            }
        } // end if rubric level condition for level 5.
        
        if ($rubric_level == 5) {
            for ($i=4;$i>=0;$i--){
                if ($i==4){
                    Print "<tr>";
                    Print "<td><b>Exemplary [5]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Outstanding performance/analysis/results");
                        Print "<td>";
                        Print "Outstanding performance/analysis/results";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==3){
                    Print "<tr>";
                    Print "<td><b>Accomplished [4]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced accurate results/analysis");
                        Print "<td>";
                        Print "Produced accurate results/analysis";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==2){
                    Print "<tr>";
                    Print "<td><b>Developing [3]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced acceptable results/analysis");
                        Print "<td>";
                        Print "Produced acceptable results/analysis";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==1){
                    Print "<tr>";
                    Print "<td><b>Begining [1]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced results/analysis with some errors");
                        Print "<td>";
                        Print "Produced results/analysis with some errors";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==0){
                    Print "<tr>";
                    Print "<td><b>Absent [0]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){

                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Did not perform");
                        Print "<td>";
                        Print "Did not perform";
                        Print "</td>";
                    }
                    Print "</tr>";
                }    
            }
        } // end if rubric level condition. level 4
        
        if ($rubric_level == 4) {
            for ($i=3;$i>=0;$i--){
                if ($i==3){
                    Print "<tr>";
                    Print "<td><b>Exemplary [5]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Outstanding performance/analysis/results");
                        Print "<td>";
                        Print "Outstanding performance/analysis/results";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==3){
                    Print "<tr>";
                    Print "<td><b>Competent [3]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced accurate results/analysis");
                        Print "<td>";
                        Print "Produced accurate results/analysis";
                        Print "</td>";
                    }
                    Print "</tr>";
                }


                if ($i==1){
                    Print "<tr>";
                    Print "<td><b>Developing [1]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){
                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Produced results/analysis with some errors");
                        Print "<td>";
                        Print "Produced results/analysis with some errors";
                        Print "</td>";
                    }
                    Print "</tr>";
                }

                if ($i==0){
                    Print "<tr>";
                    Print "<td><b>Absent [0]</b></td><td>";
                    if($_GET['rubric_'.$i.'_'.$r]){

                        array_push($rubrics, $_GET['rubric_'.$i.'_'.$r]);
                        Print "<td>";
                        Print $_GET['rubric_'.$i.'_'.$r];
                        Print "</td>";
                    }
                    else {
                        array_push($rubrics, "Did not perform");
                        Print "<td>";
                        Print "Did not perform";
                        Print "</td>";
                    }
                    Print "</tr>";
                }    
            }
        } // end if rubric level condition. level 3
        
        Print "</table>";
    }

    // convert array to mysql variable to store in database
    for($i=0;$i<count($rubrics);$i++){
        if ($i == 0) // don't place delimiter in the begining.
            $set_rubrics=$set_rubrics.mysqli_real_escape_string($conn,$rubrics[$i]);
        else
            $set_rubrics=$set_rubrics.$delimiter.mysqli_real_escape_string($conn,$rubrics[$i]);
    }
    
 

  
 ?>

    <input type='hidden' name='menu' value="design_rubrics"/>
    <input type='hidden' name='method' value="submit_rubric"/>
    <input type='hidden' name='set_rubrics' value="<?php echo $set_rubrics ?>"/>
    <input type='hidden' name='set_count' value="<?php echo $rubric_set_count ?>"/>
    <input type='hidden' name='course' value="<?php echo $course ?>"/>
        <br>
    <table align='center' class='w3-striped w3-bordered  w3-hoverable'>
    <tr><td align="center"><input class="sub" type="submit" value="Submit Rubrics" onclick="return confirm('Once submitted, Rubrics cannot be deleted or edited. However, you may create more Rubrics?')" /></td></tr>
    </table>
            
</div>

<?php endif; ?>

<?php if($method=='submit_rubric'): ?>

    <?php
        $set_id = $_GET['set_count'] +1;
        $rubric_data = $_GET['set_rubrics'];
        $delimiter = mysqli_real_escape_string($conn,":\^\:");
        $exist_rubrics = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_sets FROM courses_info Where course_id='".$course."'"))['rubric_sets']; // check if previously any rubrics exist, then store its data
        if($exist_rubrics)
            $set_rubrics=mysqli_real_escape_string($conn,$exist_rubrics).$delimiter.$rubric_data;
        else
            $set_rubrics=$rubric_data;

        if(mysqli_query($conn,"UPDATE courses_info SET rubric_sets = '$set_rubrics' WHERE courses_info.`course_id` ='$course'") && mysqli_query($conn,"UPDATE courses_info SET rubric_set_count = $set_id WHERE courses_info.`course_id` ='$course'")){
            echo "<div align='center'>";
            echo "Rubric Set Created";
            echo "<br>";
            Print "<a href='reports/rubric_evaluation_sheet.php?course=$course&set_id=$set_id' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print Rubric Evaluation Sheet</b></a>";
            echo "</div>";
        }
    ?>

<?php endif; ?>
