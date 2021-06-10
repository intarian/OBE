<?php
    $clo_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT CLO_count FROM courses_info WHERE course_id='$course'"))['CLO_count'];
    
    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course")); 

    $roll_list = array();
    $name_list = array();
    for ($clo=1;$clo<=$clo_count;$clo++){
        $clo_list_.$clo = array();
    }
    
    // add clo data to array and find average achievement
    for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
        $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
        $name_list[] = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name']; 
        $roll_list[]=$rollno;
        for($i=1;$i<=$clo_count;$i++) {
            ${"clo_list_".$i}[] = clo_attain_single($course,$i,'Percentage',$rollno,$conn);
        }
    }

    // Store data to print in Chart
    $clo_label = array();
    $clo_avgs = array();
    $bg_color = array();
    for ($i=1;$i<=$clo_count;$i++){
        $clo_label[] = "CLO $i";
        $clo_avgs[] = number_format(array_sum(${"clo_list_".$i})/count(${"clo_list_".$i}),2);
    }

    Print "<table class='w3-table'><tr><td><a href='reports/CLO_attain_report.php?course=$course' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print CLO Attainment Result</b></a></td></tr></table>";


    // For CLO graph bar colors, generate array of colors:
    $clo_bar_colors_all = ["rgba(15, 117, 25, 1)","rgba(89,84,204,1.00)","rgba(190, 184, 25, 1)","rgba(233,118,3,1.00)","rgba(0,159,57,1.00)","rgba(201,0,228,1.00)","rgba(7,160,163,1.00)","rgba(188,2,2,1.00)"];
    $clo_bar_colors = array();
    for ($clo_color=0;$clo_color<$clo_count;$clo_color++){
        $clo_bar_colors[$clo_color] = $clo_bar_colors_all[$clo_color];
    }
    
?>
    <canvas id="myChart" width="100" height="40"></canvas>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php echo trim(json_encode($clo_label),"[]") ?>],
            datasets: [{
                label: 'CLO Averages',
                data: [<?php echo trim(json_encode($clo_avgs),"[]")?>],
                backgroundColor: [<?php echo trim(json_encode($clo_bar_colors),"[]")?>],
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
    echo "<table class='w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white'>";
    echo "<tr>";
    echo "<th>Roll No</th><th> Name </th>";
    for ($i=1;$i<=$clo_count;$i++){
        echo "<th> CLO ".$i." (%)</th>";
    }
    echo "</tr>";

    

    for ($id=0;$id<count($roll_list);$id++){
        echo "<tr>";
        echo "<td>".$roll_list[$id]."</td>";
        echo "<td>".$name_list[$id]."</td>";
        for($i=1;$i<=$clo_count;$i++) {
			$clo_obt = ${"clo_list_".$i}[$id];//clo_attain_single($course,$i,'Percentage',$rollno,$conn);
			if ($clo_obt < 50)
            	echo "<td class=w3-text-red>".number_format($clo_obt,1)."</td>";
			else
            	echo "<td>".number_format($clo_obt,1)."</td>";
		}

        echo "</tr>";
    }
    echo "</table>"; 

?>