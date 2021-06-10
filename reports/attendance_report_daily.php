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
   $uni_name = mysqli_fetch_assoc(mysqli_query($conn,"SELECT univ_name FROM univ_info WHERE id='1'"))['univ_name'];
    
    $dept_name = mysqli_fetch_assoc(mysqli_query($conn,"SELECT dept_name FROM program_info WHERE id='1'"))['dept_name'];

    $course = $_GET['course'];
    $module = $_GET['module_id'];


    $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course."'"))['course_code'];
    $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course."'"))['course_title'];
    $instrument = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $module FROM $course WHERE data_detail='Instrument'"))[$module];
    $date = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $module FROM $course WHERE data_detail='Date'"))[$module];


	  require('fpdf/fpdf.php');
      $pdf = new FPDF();
    //==========================================================
    //SET PDF INFO
    //==========================================================  
    $pdf->AddPage('P','A4');
    $pdf->SetFont('Times','B',16);
    $pdf->SetTitle('Attendance List');

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
      $pdf->SetFont('Times','b',13);
	  $pdf->Cell($pdf->GetPageWidth()-10,6,$instrument,0,0,'C');
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

    
    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));

        $roll_list = array();
        $name_list = array();
        $sr_no = array();
        $attendance = array();
        $present_count = 0;
        $leave_count = 0;
        $absent_count = 0;
        $counter = 1;
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $attendance_status= mysqli_fetch_assoc($conn->query("SELECT $module FROM $course WHERE data_detail ='$rollno'"))[$module];
            if ($attendance_status=='P')
                $present_count++;
            if ($attendance_status=='L')
                $leave_count++;
            if ($attendance_status=='A' || $attendance_status=='')
                $absent_count++;
            $attendance[]=$attendance_status;
            $roll_list[] = $rollno;
            $name_list[] = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            $sr_no[] = $counter;
            $counter++;
        }
    $pdf->Ln();
//$pdf->GetPageWidth()-GetStringWidth("Date: ")-GetStringWidth($date)-10
     $pdf->SetXY($pdf->GetPageWidth()-$pdf->GetStringWidth("Date: ")-$pdf->GetStringWidth($date)-10,$overviewheight+20);
      $pdf->Cell($pdf->GetStringWidth("Date: "),6,"Date: ",0,0,'C');
      $pdf->Cell($pdf->GetStringWidth($date),6,date_format(date_create($date),"d/m/Y"),0,0,'C');
     $pdf->SetX(10);
      $pdf->Cell($pdf->GetStringWidth("No. of Students Present: "),6,"No. of Students Present:  ",0,0,'C');
      $pdf->Cell($pdf->GetStringWidth($present_count),6,$present_count,0,0,'C');
      $pdf->Ln();
      $pdf->Cell($pdf->GetStringWidth("No. of Students Absent: "),6,"No. of Students Absent:  ",0,0,'C');
      $pdf->Cell($pdf->GetStringWidth($absent_count),6,$absent_count,0,0,'C');
      $pdf->Ln();
      $pdf->Cell($pdf->GetStringWidth("No. of Students on Leave: "),6,"No. of Students on Leave:  ",0,0,'C');
      $pdf->Cell($pdf->GetStringWidth($leave_count),6,$leave_count,0,0,'C');
    
    $pdf->SetXY(10,$overviewheight+40);


    $pdf->SetFont('Times','b',10);
    $pdf->Cell(15,7,'Sr No.',1,0,'C');
    $pdf->Cell(30,7,'Roll No.',1,0,'C');
    $pdf->Cell(50,7,'Names',1,0,'C');
    $pdf->Cell(30,7,'Attendance Status',1,0,'C');
    $pdf->Ln();

    $pdf->SetFont('Times','',10);
    // Data
    for ($i=0;$i<count($sr_no);$i++){
        $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
        $pdf->Cell(30,6,$roll_list[$i],1);
        $pdf->Cell(50,6,$name_list[$i],1);
        $pdf->Cell(30,6,$attendance[$i],1,0,'C');
        $pdf->Ln();
    }
    $filename = "Attendance_".$course_code."_".date_format(date_create($date),"d/m/Y").".pdf";
    $pdf->Output('I',$filename);

      ?>