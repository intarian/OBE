<?php
    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("Location:../login/index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
        exit;
    }
    
    // include function folder
    foreach (glob("../functions/*.php") as $filename)
    {
        include $filename;
    }
    $conn = OpenCon();


    $course = $_GET['course'];
    
    $uni_name = mysqli_fetch_assoc(mysqli_query($conn,"SELECT univ_name FROM univ_info WHERE id='1'"))['univ_name'];
    
    $dept_name = mysqli_fetch_assoc(mysqli_query($conn,"SELECT dept_name FROM program_info WHERE id='1'"))['dept_name'];

    $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course."'"))['course_code'];
    $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course."'"))['course_title'];


	  require('fpdf/fpdf.php');
      $pdf = new FPDF();
    //==========================================================
    //SET PDF INFO
    //==========================================================  
    $pdf->AddPage('L','A4');
    $pdf->SetFont('Times','B',16);

      //==========================================================
      //Prints Overview
      //==========================================================
      $overviewheight=5;
      $pdf->SetY($overviewheight);
      $pdf->SetFont('Times', 'b' ,14);
      $pdf->Cell($pdf->GetPageWidth()-10,1,$uni_name,0,0,'C');
      $pdf->SetY($overviewheight+7);
      $pdf->SetFont('Times', 'b' ,12.5);
	  $pdf->Cell($pdf->GetPageWidth()-10,1,$dept_name,0,0,'C');
      $pdf->SetY($overviewheight+12);
      $pdf->Ln();
      $pdf->SetFont('Times','b',13);
	  $pdf->Cell($pdf->GetPageWidth()-10,4,"Cumulative Result Sheet (Tentative)",0,0,'C');
   //   $pdf->Ln();
      $pdf->SetY($overviewheight+6);
      $pdf->SetFont('Times','b',11);
      $pdf->SetX(7);
      $pdf->Cell($pdf->GetStringWidth("Course Code: "),$overviewheight+14,"Course Code: ",0,0,'C');
      $pdf->Cell($pdf->GetStringWidth($course_code),$overviewheight+14,$course_code,0,0,'C');
      $pdf->SetX(132);
      $pdf->Cell($pdf->GetStringWidth($module_id),$overviewheight+14,$module_id);
      $pdf->SetX($pdf->GetPageWidth()-$pdf->GetStringWidth("Course Title: ")-$pdf->GetStringWidth($course_title)-10);
      $pdf->Cell($pdf->GetStringWidth("Course Title: "),$overviewheight+14,"Course Title: ",0,0,'C');
      $pdf->Cell($pdf->GetStringWidth($course_title),$overviewheight+14,$course_title,0,0,'C');
      $pdf->Line(7,$overviewheight+19,$pdf->GetPageWidth()-10,$overviewheight+19);


// Fetch weights of different items:
    $mid_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT mid_weight FROM courses_info WHERE course_id='$course'"))['mid_weight'];
    $final_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT final_weight FROM courses_info WHERE course_id='$course'"))['final_weight'];
    $quiz_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quiz_weight FROM courses_info WHERE course_id='$course'"))['quiz_weight'];
    $assign_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT assign_weight FROM courses_info WHERE course_id='$course'"))['assign_weight'];
    $project_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT project_weight FROM courses_info WHERE course_id='$course'"))['project_weight'];
    $lab_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT lab_weight FROM courses_info WHERE course_id='$course'"))['lab_weight'];
    $viva_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT viva_weight FROM courses_info WHERE course_id='$course'"))['viva_weight'];
    $presentation_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT presentation_weight FROM courses_info WHERE course_id='$course'"))['presentation_weight'];
    $other_weight = mysqli_fetch_assoc(mysqli_query($conn,"SELECT other_weight FROM courses_info WHERE course_id='$course'"))['other_weight'];

//// Find columns with active instruments
    // Find all columns with all instruments
    $sql_col_list = $conn->query("SHOW COLUMNS FROM $course");
            $col_list_d = array();
            while($col_list = $sql_col_list->fetch_assoc()){
                $col_list_d[] = $col_list['Field'];
            }
    // Use col list to collect cols list with their corresponding instruments
        $quiz_cols = array();
        $assign_cols = array();
        $mid_cols = array();
        $final_cols = array();
        $other_cols = array();
        $attendance_cols = array();
		$lab_cols = array();
        $project_cols = array();
        $viva_cols = array();
        $presentation_cols = array();
        for ($i=2; $i< count($col_list_d); $i++){ 
            $instrument = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course where data_detail='Instrument'"))[$col_list_d[$i]];
            if($instrument=='Quiz')
                $quiz_cols[]=$col_list_d[$i];
            if($instrument=='Assignment')
                $assign_cols[]=$col_list_d[$i];
            if($instrument=='Midterm')
                $mid_cols[]=$col_list_d[$i];
            if($instrument=='Final')
                $final_cols[]=$col_list_d[$i];
            if ($instrument=='Project')
                $project_cols[] = $col_list_d[$i];
            if ($instrument=='Other')
                $other_cols[] =$col_list_d[$i]; 
            if ($instrument=='Attendance')
                $attendance_cols[] =$col_list_d[$i]; 
			if ($instrument=='LAB')
        		$lab_cols[] =$col_list_d[$i];
            if ($instrument=='VIVA')
        		$viva_cols[] =$col_list_d[$i];
            if ($instrument=='Presentation')
        		$presentation_cols[] =$col_list_d[$i];
            }

// Find total no of instruments available
    $total_instruments = array();
    $total_instrument_weight = array();
    if ($quiz_cols){
	   $total_instruments[]='Quiz';
       $total_instrument_weight[] = $quiz_weight;
    }
    if ($assign_cols){
	   $total_instruments[]='Assignments';
        $total_instrument_weight[] = $assign_weight;
    }
    if ($project_cols){
	   $total_instruments[]='Project';
        $total_instrument_weight[] = $project_weight;
    }
    if ($viva_cols){
	   $total_instruments[]='VIVA';
        $total_instrument_weight[] = $viva_weight;
    }
    if ($presentation_cols){
	   $total_instruments[]='Presentation';
        $total_instrument_weight[] = $presentation_weight;
    }
    if ($lab_cols){
	   $total_instruments[]='LAB Experiments';
        $total_instrument_weight[] = $lab_weight;
    }
    if ($other_cols){
	   $total_instruments[]='Other';
        $total_instrument_weight[] = $other_weight;
    }
    if ($mid_cols){
	   $total_instruments[]='Mid-Term';
        $total_instrument_weight[] = $mid_weight;
    }
    if ($final_cols){
	   $total_instruments[]='Final-Term';
        $total_instrument_weight[] = $final_weight;
    }
    $total_instruments[]='Total';
    $total_instrument_weight[] = array_sum($total_instrument_weight);
    
    $total_instruments[]='Grade';
    
    // Collect all enrolled students roll no and names
    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));
        $roll_list = array();
        $name_list = array();
        $sr_no = array();
        $counter = 1;
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $roll_list[] = $rollno;
            $name_list[] = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            $sr_no[] = $counter;
            $counter++;
        }
        
        // Calculate average and print scores
        $quiz_cumm_avg = array_values(course_cumm_calc($course,'Quiz',$quiz_weight,$conn));
        $assign_cumm_avg = array_values(course_cumm_calc($course,'Assignment',$assign_weight,$conn));
        $project_cumm_avg = array_values(course_cumm_calc($course,'Project',$project_weight,$conn));
        $viva_cumm_avg = array_values(course_cumm_calc($course,'VIVA',$viva_weight,$conn));
        $presentation_cumm_avg = array_values(course_cumm_calc($course,'Presentation',$presentation_weight,$conn));
        $lab_cumm_avg = array_values(course_cumm_calc($course,'LAB',$lab_weight,$conn));
        $other_cumm_avg = array_values(course_cumm_calc($course,'Other',$other_weight,$conn));
        $mid_cumm_avg = array_values(course_cumm_calc($course,'Mid',$mid_weight,$conn));
        $final_cumm_avg = array_values(course_cumm_calc($course,'Final',$final_weight,$conn));

// Display active instruments list    
    $pdf->SetXY(10,$overviewheight+25);

    $pdf->SetFont('Times','b',10);
    $pdf->Cell(15,7,'Sr No.',1,0,'C');
    $pdf->Cell(30,7,'Roll No.',1,0,'C');
    $pdf->Cell(50,7,'Names',1,0,'C');
    $cellWidth_instrument = array();

for ($i=0;$i<count($total_instruments);$i++){
    if ($i == count($total_instruments)-1){
        $cellWidth = $pdf->GetStringWidth($total_instruments[$i]);
        $cellWidth_instrument[$i] = $cellWidth;
        $pdf->Cell($cellWidth+4,7,$total_instruments[$i],1,0,'C');
    }
    else {
        $cellWidth = $pdf->GetStringWidth($total_instruments[$i]." (XY%)");
        $cellWidth_instrument[$i] = $cellWidth;
        $pdf->Cell($cellWidth+4,7,$total_instruments[$i]." (".$total_instrument_weight[$i]."%)",1,0,'C');
    }
    if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
        $instrument_print = $i;
        break;
    }
}
    $pdf->Ln();
    $pdf->SetFont('Times', '' ,10); 

// Print Data 
    for ($i=0;$i<count($sr_no);$i++){    
        $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
        $pdf->Cell(30,6,$roll_list[$i],1);
        $pdf->Cell(50,6,$name_list[$i],1);
        if ($instrument_print)
            $print_instrument_page_1 = $instrument_print;
        else
            $print_instrument_page_1 = count($total_instruments);
          for ($k=0;$k<=$print_instrument_page_1;$k++){
             $total_score=round(round($quiz_cumm_avg[$i]+$assign_cumm_avg[$i]+$project_cumm_avg[$i]+$viva_cumm_avg[$i]+$presentation_cumm_avg[$i]+$lab_cumm_avg[$i]+$other_cumm_avg[$i]+$mid_cumm_avg[$i]+$final_cumm_avg[$i],1,PHP_ROUND_HALF_UP),0,PHP_ROUND_HALF_UP);
              if ($total_instruments[$k] == 'Quiz')
                $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($quiz_cumm_avg[$i],2),1,0,'C');
              if ($total_instruments[$k] == 'Assignments')
                $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($assign_cumm_avg[$i],2),1,0,'C');
              if ($total_instruments[$k] == 'Project')
                $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($project_cumm_avg[$i],2),1,0,'C');
              if ($total_instruments[$k] == 'VIVA')
                $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($viva_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'Presentation')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($presentation_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'LAB Experiments')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($lab_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'Other')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($other_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'Mid-Term')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($mid_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'Final-Term')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($final_cumm_avg[$i],2),1,0,'C');
        $pdf->SetFont('Times', 'b' ,10);
        if ($total_instruments[$k] == 'Total')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,$total_score,1,0,'C');
        if ($total_instruments[$k] == 'Grade')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,letter_grade_calc($total_score),1,0,'C');
        $pdf->SetFont('Times', '' ,10); 
        }
        $pdf->Ln();
    }

// Prints the rest of instruments on additional page
    if ($instrument_print){
        $pdf->AddPage('L','A4');
        $pdf->SetFont('Times','b',10);
    $pdf->SetFont('Times','b',10);
    $pdf->Cell(15,7,'Sr No.',1,0,'C');
    $pdf->Cell(30,7,'Roll No.',1,0,'C');
    $pdf->Cell(50,7,'Names',1,0,'C');
    $cellWidth_instrument = array();

for ($i=$instrument_print+1;$i<count($total_instruments);$i++){
    if ($i == count($total_instruments)-1){
        $cellWidth = $pdf->GetStringWidth($total_instruments[$i]);
        $cellWidth_instrument[$i] = $cellWidth;
        $pdf->Cell($cellWidth+4,7,$total_instruments[$i],1,0,'C');
    }
    else {
        $cellWidth = $pdf->GetStringWidth($total_instruments[$i]." (XY%)");
        $cellWidth_instrument[$i] = $cellWidth;
        $pdf->Cell($cellWidth+4,7,$total_instruments[$i]." (".$total_instrument_weight[$i]."%)",1,0,'C');
    }
}
    $pdf->Ln();
    $pdf->SetFont('Times', '' ,10); 
    // Remaining Data
    for ($i=0;$i<count($sr_no);$i++){
        $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
        $pdf->Cell(30,6,$roll_list[$i],1);
        $pdf->Cell(50,6,$name_list[$i],1);
      for ($k=$instrument_print+1;$k<=count($total_instruments);$k++){
          $total_score=round(round($quiz_cumm_avg[$i]+$assign_cumm_avg[$i]+$project_cumm_avg[$i]+$viva_cumm_avg[$i]+$presentation_cumm_avg[$i]+$lab_cumm_avg[$i]+$other_cumm_avg[$i]+$mid_cumm_avg[$i]+$final_cumm_avg[$i],1,PHP_ROUND_HALF_UP),0,PHP_ROUND_HALF_UP);
              if ($total_instruments[$k] == 'Quiz')
                $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($quiz_cumm_avg[$i],2),1,0,'C');
              if ($total_instruments[$k] == 'Assignments')
                $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($assign_cumm_avg[$i],2),1,0,'C');
              if ($total_instruments[$k] == 'Project')
                $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($project_cumm_avg[$i],2),1,0,'C');
              if ($total_instruments[$k] == 'VIVA')
                $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($viva_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'Presentation')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($presentation_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'LAB Experiments')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($lab_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'Other')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($other_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'Mid-Term')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($mid_cumm_avg[$i],2),1,0,'C');
        if ($total_instruments[$k] == 'Final-Term')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,number_format($final_cumm_avg[$i],2),1,0,'C');
        $pdf->SetFont('Times', 'b' ,10);
        if ($total_instruments[$k] == 'Total')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,$total_score,1,0,'C');
        if ($total_instruments[$k] == 'Grade')
            $pdf->Cell($cellWidth_instrument[$k]+4,6,letter_grade_calc($total_score),1,0,'C');
        $pdf->SetFont('Times', '' ,10);
        } 
        $pdf->Ln();
    }
    }



        /*
    if ($assign_cols){
       $cellWidth = $pdf->GetStringWidth("Assignments (XY%)");
       $cellWidth_instrument[1] = $cellWidth;
       $pdf->Cell($cellWidth+4,7,"Assignments (".$assign_weight."%)",1,0,'C');
    }
    if ($project_cols){
	   $cellWidth = $pdf->GetStringWidth("Project (XY%)");
       $cellWidth_instrument[2] = $cellWidth;
       $pdf->Cell($cellWidth+4,7,"Project (".$project_weight."%)",1,0,'C');
    }
    if ($viva_cols){
	   $cellWidth = $pdf->GetStringWidth("VIVA (XY%)");
       $cellWidth_instrument[3] = $cellWidth;
       $pdf->Cell($cellWidth+4,7,"VIVA (".$viva_weight."%)",1,0,'C');
    }
    // check if overflow occurs
    if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4)
            $instrument_printed = 'VIVA';
    else{
        if($presentation_cols){
           $cellWidth = $pdf->GetStringWidth("Presentation (XY%)");
           $cellWidth_instrument[4] = $cellWidth;
           $pdf->Cell($cellWidth+4,7,"Presentation (".$presentation_weight."%)",1,0,'C');
        }
        // check if overflow occurs
        if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $instrument_printed = 'presentation';
            
        }
    if ($lab_cols){
	   $cellWidth = $pdf->GetStringWidth("LAB Experiments (XY%)");
       $cellWidth_instrument[5] = $cellWidth;
       $pdf->Cell($cellWidth+4,7,"LAB Experiments (".$lab_weight."%)",1,0,'C');
    }
    // check if overflow occurs
    if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $instrument_printed = 'lab';
            break;
        }
    if ($other_cols){
	   $cellWidth = $pdf->GetStringWidth("Other (XY%)");
       $cellWidth_instrument[6] = $cellWidth;
       $pdf->Cell($cellWidth+4,7,"Other (".$other_weight."%)",1,0,'C');
    }
    // check if overflow occurs
    if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $instrument_printed = 'other';
            break;
        }
    if ($mid_cols){
	   $cellWidth = $pdf->GetStringWidth("Mid-Term (XY%)");
       $cellWidth_instrument[7] = $cellWidth;
       $pdf->Cell($cellWidth+4,7,"Mid-Term (".$mid_weight."%)",1,0,'C');
    }
    // check if overflow occurs
    if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $instrument_printed = 'VIVA';
            break;
        }

    if ($final_cols){
	   $cellWidth = $pdf->GetStringWidth("Final-Term (XY%)");
       $cellWidth_instrument[8] = $cellWidth;
       $pdf->Cell($cellWidth+4,7,"Final-Term (".$final_weight."%)",1,0,'C');
    }
    $cellWidth = $pdf->GetStringWidth("Total");
    $cellWidth_instrument[9] = $cellWidth;
    $total_weight = 
    $pdf->Cell($cellWidth+4,7,"Total",1,0,'C');

/*    for ($i=1;$i<=$clo_count;$i++){
        $cellWidth = $pdf->GetStringWidth("CLO ",$i);
        
        $pdf->Cell($cellWidth+4,7,"CLO ".$i,1,0,'C');
        if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $clo_print = $i;
            break;
        }
    }
    */

        /*
    // Data
    for ($i=0;$i<count($sr_no);$i++){
        $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
        $pdf->Cell(30,6,$roll_list[$i],1);
        $pdf->Cell(50,6,$name_list[$i],1);
        //if ($clo_print){
          //  for ($k=1;$k<=$clo_print;$k++)
        $total_score=round(round($quiz_cumm_avg[$i]+$assign_cumm_avg[$i]+$project_cumm_avg[$i]+$viva_cumm_avg[$i]+$presentation_cumm_avg[$i]+$lab_cumm_avg[$i]+$other_cumm_avg[$i]+$mid_cumm_avg[$i]+$final_cumm_avg[$i],1,PHP_ROUND_HALF_UP),0,PHP_ROUND_HALF_UP);
        
        if ($quiz_cols)
            $pdf->Cell($cellWidth_instrument[0]+4,6,number_format($quiz_cumm_avg[$i],2),1,0,'C');
        if ($assign_cols)
            $pdf->Cell($cellWidth_instrument[1]+4,6,number_format($assign_cumm_avg[$i],2),1,0,'C');
        if ($project_cols)
            $pdf->Cell($cellWidth_instrument[2]+4,6,number_format($project_cumm_avg[$i],2),1,0,'C');
        if ($viva_cols)
            $pdf->Cell($cellWidth_instrument[3]+4,6,number_format($viva_cumm_avg[$i],2),1,0,'C');
        if ($presentation_cols)
            $pdf->Cell($cellWidth_instrument[4]+4,6,number_format($presentation_cumm_avg[$i],2),1,0,'C');
        if ($lab_cols)
            $pdf->Cell($cellWidth_instrument[5]+4,6,number_format($lab_cumm_avg[$i],2),1,0,'C');
        if ($other_cols)
            $pdf->Cell($cellWidth_instrument[6]+4,6,number_format($other_cumm_avg[$i],2),1,0,'C');
        if ($mid_cols)
            $pdf->Cell($cellWidth_instrument[7]+4,6,number_format($mid_cumm_avg[$i],2),1,0,'C');
        if ($final_cols)
            $pdf->Cell($cellWidth_instrument[8]+4,6,number_format($final_cumm_avg[$i],2),1,0,'C');
        $pdf->Cell($cellWidth_instrument[9]+4,6,$total_score,1,0,'C');
        //}
        //else{
          //  for ($k=1;$k<=$clo_count;$k++)
            //    $pdf->Cell($cellWidth_clo[$k-1]+4,6,clo_attain_single($course,$k,'Percentage',$roll_list[$i],$conn),1,0,'C');
        //}
        $pdf->Ln();
    }
    */
/*
        // Prints the rest of clos on additional page
    if ($clo_print){
        $pdf->AddPage('P','A4');
        $pdf->SetFont('Times','b',10);
        $pdf->Cell(15,7,'Sr No.',1,0,'C');
        $pdf->Cell(30,7,'Roll No.',1,0,'C');
        $pdf->Cell(50,7,'Names',1,0,'C');
        $cellWidth_clo = array();
        for ($i=$clo_print+1;$i<=$clo_count;$i++){
            $cellWidth = $pdf->GetStringWidth("CLO ".$i);
            $cellWidth_clo[] = $cellWidth;
            $pdf->Cell($cellWidth+4,7,"CLO ".$i,1,0,'C');
        }
        $pdf->Ln();
        $pdf->SetFont('Times','',10);
        // Data
        for ($i=0;$i<count($sr_no);$i++){
            $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
            $pdf->Cell(30,6,$roll_list[$i],1);
            $pdf->Cell(50,6,$name_list[$i],1);
            for ($k=$clo_print+1;$k<=$clo_count;$k++)
                $pdf->Cell($cellWidth_clo[$k-$clo_print-1]+4,6,clo_attain_single($course,$k,'Percentage',$roll_list[$i],$conn),1,0,'C');
            $pdf->Ln();
        }
    }
 */
    $pdf->Output();
    
      ?>