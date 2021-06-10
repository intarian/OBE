<?php
    // Get enabled PLO's
    $PLO_enabled = mysqli_fetch_assoc(mysqli_query($conn,"SELECT plos_enabled FROM courses_info WHERE course_id='$course'"))['plos_enabled'];
    $plo_list = explode(":\^\:",$PLO_enabled);

    for ($plo=1;$plo<=count($plo_list);$plo++){
        $plo_list_.$plo = array();
    }

    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));
    
    $roll_list = array();
    $name_list = array();
    for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
        $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
        $name_list[] = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name']; 
        $roll_list[]=$rollno;
        for ($i=1;$i<=count($plo_list);$i++){
            ${"plo_list_".$i}[] = plo_attain_single($course,$plo_list[$i-1],$rollno,$conn);
        }
    }
    
    // Store data to print in Chart
    $plo_label = array();
    $plo_avgs = array();
    $bg_color = array();
    for ($i=1;$i<=count($plo_list);$i++){
        $plo_no = $plo_list[$i-1];
        $plo_label[] = "PLO $plo_no";
        $plo_avgs[] = number_format(array_sum(${"plo_list_".$i})/count(${"plo_list_".$i}),2);
    }

    //Display all PLO details of selected course
    Print "<table class='w3-table'><tr><td><a href='reports/PLO_attain_report.php?course=$course' target='_blank'><b><em class=\"fa fa-file-pdf-o fa-fw\"></em>Print PLO Attainment Result</b></td></tr></table>";

    // For PLO graph bar colors, generate array of colors:
    $plo_bar_colors_all = ["rgba(54,48,203,1.00)","rgba(54,220,109,1.00)","rgba(193,188,37,1.00)","rgba(233,3,74,1.00)","rgba(0,159,57,1.00)","rgba(0,228,118,1.00)","rgba(52,221,224,1.00)","rgba(196,57,57,1.00)"];
    $plo_bar_colors = array();
    for ($plo_color=0;$plo_color<count($plo_list);$plo_color++){
        $plo_bar_colors[$plo_color] = $plo_bar_colors_all[$plo_color];
    }
?>
    <canvas id="myChart" width="100" height="35"></canvas>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php echo trim(json_encode($plo_label),"[]") ?>],
            datasets: [{
                label: 'PLO Averages',
                data: [<?php echo trim(json_encode($plo_avgs),"[]")?>],
                backgroundColor: [<?php echo trim(json_encode($plo_bar_colors),"[]")?>],
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
    for ($i=0;$i<count($plo_list);$i++){
        echo "<th> PLO ".$plo_list[$i]." (%)</th>";
    }
    echo "</tr>";

     
    for ($id=0;$id<count($roll_list);$id++){
        echo "<tr>";
        echo "<td>".$roll_list[$id]."</td>";
        echo "<td>".$name_list[$id]."</td>";
        for($i=1;$i<=count($plo_list);$i++) {
			$plo_obt = ${"plo_list_".$i}[$id];//clo_attain_single($course,$i,'Percentage',$rollno,$conn);
			if ($plo_obt < 50)
            	echo "<td class=w3-text-red>".number_format($plo_obt,1)."</td>";
			else
            	echo "<td>".number_format($plo_obt,1)."</td>";
		}

        echo "</tr>";
    }
    echo "</table>"; 
?>