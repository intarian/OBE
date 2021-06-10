
<?php
//Find column name with matching parameter
    $mid_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT mid_weight FROM courses_info WHERE course_id='$course'"))['mid_weight'];
    $final_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT final_weight FROM courses_info WHERE course_id='$course'"))['final_weight'];
    $quiz_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quiz_weight FROM courses_info WHERE course_id='$course'"))['quiz_weight'];
    $assign_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT assign_weight FROM courses_info WHERE course_id='$course'"))['assign_weight'];
    $project_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT project_weight FROM courses_info WHERE course_id='$course'"))['project_weight'];
    $lab_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT lab_weight FROM courses_info WHERE course_id='$course'"))['lab_weight'];
    $viva_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT viva_weight FROM courses_info WHERE course_id='$course'"))['viva_weight'];
    $presentation_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT presentation_weight FROM courses_info WHERE course_id='$course'"))['presentation_weight'];
    $other_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT other_weight FROM courses_info WHERE course_id='$course'"))['other_weight'];

    Print "<table class='w3-table'><tr><td><a href='reports/Cummulative_attain_report.php?course=$course' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print Cummulative Result</b></a></td></tr></table>";

	
    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course")); 
    $quiz_cumm_avg = course_cumm_calc($course,'Quiz',$quiz_weight,$conn);
    $assign_cumm_avg = course_cumm_calc($course,'Assignment',$assign_weight,$conn);
    $project_cumm_avg = course_cumm_calc($course,'Project',$project_weight,$conn);
    $viva_cumm_avg = course_cumm_calc($course,'VIVA',$viva_weight,$conn);
    $presentation_cumm_avg = course_cumm_calc($course,'Presentation',$presentation_weight,$conn);
    $lab_cumm_avg = course_cumm_calc($course,'LAB',$lab_weight,$conn);
    $other_cumm_avg = course_cumm_calc($course,'Other',$other_weight,$conn);
    $mid_cumm_avg = course_cumm_calc($course,'Mid',$mid_weight,$conn);
    $final_cumm_avg = course_cumm_calc($course,'Final',$final_weight,$conn);
    $total_score = [];
    $all_grades = [];  // store all obtained grades here to display on chart
    $roll_no_all = [];
    $name_all = [];
    for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){ // set offset for roll no
        $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
		$name = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
        $roll_no_all[$stu_id] = $rollno;
        $name_all[$stu_id] =  $name;
		$total_score[$stu_id]=round(round($quiz_cumm_avg[$stu_id]+$assign_cumm_avg[$stu_id]+$project_cumm_avg[$stu_id]+$viva_cumm_avg[$stu_id]+$presentation_cumm_avg[$stu_id]+$lab_cumm_avg[$stu_id]+$other_cumm_avg[$stu_id]+$mid_cumm_avg[$stu_id]+$final_cumm_avg[$stu_id],1,PHP_ROUND_HALF_UP),0,PHP_ROUND_HALF_UP);
        $all_grades[$stu_id] = letter_grade_calc($total_score[$stu_id]);
    }
    
    // Insert grade chart here

    // Print chart data
    $all_grades = array_values($all_grades);
    $no_of_stu_in_each_grade = array_fill(0,9,0);

    // Find the total no of students in each grade
    for ($i=0;$i<count($all_grades);$i++){
        // For A grade
        if ($all_grades[$i] == 'A')
            $no_of_stu_in_each_grade[0]++;
        if ($all_grades[$i] == 'A-')
            $no_of_stu_in_each_grade[1]++;
        if ($all_grades[$i] == 'B+')
            $no_of_stu_in_each_grade[2]++;
        if ($all_grades[$i] == 'B')
            $no_of_stu_in_each_grade[3]++;
        if ($all_grades[$i] == 'B-')
            $no_of_stu_in_each_grade[4]++;
        if ($all_grades[$i] == 'C+')
            $no_of_stu_in_each_grade[5]++;
        if ($all_grades[$i] == 'C')
            $no_of_stu_in_each_grade[6]++;
        if ($all_grades[$i] == 'C-')
            $no_of_stu_in_each_grade[7]++;
        if ($all_grades[$i] == 'D')
            $no_of_stu_in_each_grade[8]++;
        if ($all_grades[$i] == 'F')
            $no_of_stu_in_each_grade[9]++;
    }
    $total_possible_grades = ['A','A-','B+','B','B-','C+','C','C-','D','F'];
?>
   <canvas id="myChart" width="100" height="40"></canvas>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php echo trim(json_encode($total_possible_grades),"[]") ?>],
            datasets: [{
                label: 'Grade Distribution',
                data: [<?php echo trim(json_encode($no_of_stu_in_each_grade),"[]")?>],
                backgroundColor: ["rgba(15, 117, 25, 1)","rgba(24, 185, 40, 1)","rgba(180, 255, 171, 1)","rgba(226, 219, 29, 1)","rgba(190, 184, 25, 1)","rgba(227, 199, 38, 1)","rgba(203, 177, 26, 1)","rgba(221, 163, 29, 1)","rgba(217, 82, 28, 1)","rgba(190, 36, 25, 1)"],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
<?php
    // Print rest of result
    Print "<table class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white'>";
    Print "<thead bgcolor=\"#43c7e6\">";
    Print "<th>Roll No</th> <th>Name</th>";
    if ($quiz_cols)
	   Print "<th>Quiz &nbsp;(".$quiz_weight."%)</th>";
    if ($assign_cols)
	   Print "<th>Assignment &nbsp;(".$assign_weight."%)</th>";
    if ($project_cols)
	   Print "<th>Project &nbsp;(".$project_weight."%)</th>";
    if ($viva_cols)
	   Print "<th>VIVA &nbsp;(".$viva_weight."%)</th>";
    if ($presentation_cols)
	   Print "<th>Presentation &nbsp;(".$presentation_weight."%)</th>";
    if ($lab_cols)
	   Print "<th>LAB Experiments &nbsp;(".$lab_weight."%)</th>";
    if ($other_cols)
	   Print "<th>Other &nbsp;(".$other_weight."%)</th>";
    if ($mid_cols)
	   Print "<th>Mid-Term &nbsp;(".$mid_weight."%)</th>";
    if ($final_cols)
	   Print "<th>Final-Term &nbsp;(".$final_weight."%)</th>";
    
    Print "<th>Total</th><th>Grade</th>";
    Print "</thead>";
    Print "<tbody>";

    for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){ // set offset for roll no
		Print "<tr>";
        Print "<td>".$roll_no_all[$stu_id]."</td>";
        Print "<td>".$name_all[$stu_id]."</td>";    
		if ($total_score[$stu_id] < 50) {
            if ($quiz_cols)
                Print "<td class='w3-red'>".number_format($quiz_cumm_avg[$stu_id],2)."</td>";
            if ($assign_cols)
                Print "<td class='w3-red'>".number_format($assign_cumm_avg[$stu_id],2)."</td>";
            if ($project_cols)
                Print "<td class='w3-red'>".number_format($project_cumm_avg[$stu_id],2)."</td>";
            if ($viva_cols)
                Print "<td class='w3-red'>".number_format($viva_cumm_avg[$stu_id],2)."</td>";
            if ($presentation_cols)
                Print "<td class='w3-red'>".number_format($presentation_cumm_avg[$stu_id],2)."</td>";
            if ($lab_cols)
                Print "<td class='w3-red'>".number_format($lab_cumm_avg[$stu_id],2)."</td>";
            if ($other_cols)
                Print "<td class='w3-red'>".number_format($other_cumm_avg[$stu_id],2)."</td>";
            if ($mid_cols)
                Print "<td class='w3-red'>".number_format($mid_cumm_avg[$stu_id],2)."</td>";
            if ($final_cols)
                Print "<td class='w3-red'>".number_format($final_cumm_avg[$stu_id],2)."</td>";
            Print "<td class='w3-red'><strong>".$total_score[$stu_id]."</strong></td>";
			Print "<td class='w3-red'><strong>".letter_grade_calc($total_score[$stu_id])."</strong></td>";
		}
		else {
            if ($quiz_cols)
                Print "<td>".number_format($quiz_cumm_avg[$stu_id],2)."</td>";
            if ($assign_cols)
                Print "<td>".number_format($assign_cumm_avg[$stu_id],2)."</td>";
            if ($project_cols)
                Print "<td>".number_format($project_cumm_avg[$stu_id],2)."</td>";
            if ($viva_cols)
                Print "<td>".number_format($viva_cumm_avg[$stu_id],2)."</td>";
            if ($presentation_cols)
                Print "<td>".number_format($presentation_cumm_avg[$stu_id],2)."</td>";
            if ($lab_cols)
                Print "<td>".number_format($lab_cumm_avg[$stu_id],2)."</td>";
            if ($other_cols)
                Print "<td>".number_format($other_cumm_avg[$stu_id],2)."</td>";
            if ($mid_cols)
                Print "<td>".number_format($mid_cumm_avg[$stu_id],2)."</td>";
            if ($final_cols)
                Print "<td>".number_format($final_cumm_avg[$stu_id],2)."</td>";
			Print "<td><strong>".$total_score[$stu_id]."</strong></td>";
			Print "<td><strong>".letter_grade_calc($total_score[$stu_id])."</strong></td>";
		}
		Print "</tr>";  
    }
    Print "</tbody>";
	Print "</table>";
?>
