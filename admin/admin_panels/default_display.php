    <?php 
    Print "<table class='w3-table w3-striped w3-bordered w3-border w3-white'>";
    $univ_name = mysqli_fetch_assoc(mysqli_query($conn,"SELECT univ_name FROM univ_info WHERE id=1"))['univ_name'];
    Print "<tr><td style=\"width:20%\"><b>University Name: </b></td>";
    Print "<td style=\"width:80%\"><b>".$univ_name."</b></td></tr>";

    $univ_vision = mysqli_fetch_assoc(mysqli_query($conn,"SELECT univ_vision FROM univ_info WHERE id=1"))['univ_vision'];
    Print "<tr><td style=\"width:20%\"><b>University Vision: </b></td>";
    Print "<td style=\"width:80%\">".$univ_vision."</td></tr>";

    $univ_mission = mysqli_fetch_assoc(mysqli_query($conn,"SELECT univ_mission FROM univ_info WHERE id=1"))['univ_mission'];
    Print "<tr><td style=\"width:20%\"><b>University Mission: </b></td>";
    Print "<td style=\"width:80%\">".$univ_mission."</td></tr>";

    $dept_name = mysqli_fetch_assoc(mysqli_query($conn,"SELECT dept_name FROM program_info WHERE id=1"))['dept_name'];
    Print "<tr><td style=\"width:20%\"><b>Department Name: </b></td>";
    Print "<td style=\"width:80%\"><b>".$dept_name."</b></td></tr>";
    
    $dept_vision = mysqli_fetch_assoc(mysqli_query($conn,"SELECT dept_vision FROM program_info WHERE id=1"))['dept_vision'];
    Print "<tr><td style=\"width:20%\"><b>Department Vision: </b></td>";
    Print "<td style=\"width:80%\">".$dept_vision."</td></tr>";
    
    $dept_mission = mysqli_fetch_assoc(mysqli_query($conn,"SELECT dept_mission FROM program_info WHERE id=1"))['dept_mission'];
    Print "<tr><td style=\"width:20%\"><b>Department Mission: </b></td>";
    Print "<td style=\"width:80%\">".$dept_mission."</td></tr>";
    
    $prog_name = mysqli_fetch_assoc(mysqli_query($conn,"SELECT program_name FROM program_info WHERE id=1"))['program_name'];
    Print "<tr><td style=\"width:20%\"><b>Program Name: </b></td>";
    Print "<td style=\"width:80%\"><b>".$prog_name."</b></td></tr>";

    $peo_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT peo_count FROM program_info WHERE id=1"))['peo_count'];
    Print "<tr><td style=\"width:20%\"><b>No. of PEO's: </b></td>";
    Print "<td style=\"width:80%\">".$peo_count."</td></tr>";
    
    $plo_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT plo_count FROM program_info WHERE id=1"))['plo_count'];
    Print "<tr><td style=\"width:20%\"><b>No. of PLO's: </b></td>";
    Print "<td style=\"width:80%\">".$plo_count."</td></tr>";
    Print "</table>";
    Print "<br>";
    
    $plo_data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT plo_data FROM program_info WHERE id=1"))['plo_data'];
    $plo_data = explode(":\^\:",$plo_data);
    Print "<table class='w3-table w3-striped w3-bordered w3-border w3-topbar w3-white'>";
    Print "<th bgcolor=\"#deed9d\" colspan=\"2\"; style=\"text-align:center\";>PLO's Defined</th>";
        for ($i=0;$i<count($plo_data);$i+=2){
            Print "<tr><td><b>$plo_data[$i]</b></td>";
            Print "<td>".$plo_data[$i+1]."</td></tr>";            
        }
	Print "</table>";
    Print "<br>";
    Print "<table class='w3-table w3-striped w3-bordered w3-border w3-topbar w3-white'>";
    Print "<th bgcolor=\"#6aadba\" colspan=\"$plo_count\"; style=\"text-align:center\";>PLO's Mapping onto PEO</th>";
    Print "<tr><th>PLO's</th>";
    for ($i=1;$i<=$peo_count;$i++){
        Print "<th>PEO ".$i."</th>";
    }
    Print "</tr>";
    for ($plo=1;$plo<=12;$plo++){
        Print "<tr><td><b>PLO $plo</b></td>";
        for ($peo = 1;$peo<=$peo_count;$peo++){
            $peo_data = explode(":\^\:",mysqli_fetch_assoc(mysqli_query($conn,"SELECT PEO_$peo FROM program_info WHERE id=1"))['PEO_'.$peo]);
            if (array_search("PLO$plo",$peo_data))
                Print "<td><em class='fa fa-check fa-fw'></em></td>";
            else
                Print "<td></td>";
        }
    }
    Print "</table>";
    Print "<br>";
    ?>