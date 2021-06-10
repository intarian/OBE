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


    $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course."'"))['course_code'];
    $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course."'"))['course_title'];


	  require('fpdf/fpdf.php');
      $pdf = new FPDF();
    //==========================================================
    //SET PDF INFO
    //==========================================================  
    $pdf->AddPage('P','A4');
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
	  $pdf->Cell($pdf->GetPageWidth()-10,4,"CLO Attainment Sheet",0,0,'C');
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

    $clo_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT CLO_count FROM courses_info WHERE course_id='$course'"))['CLO_count'];
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


    
    $pdf->SetXY(10,$overviewheight+25);


    $pdf->SetFont('Times','b',10);
    $pdf->Cell(15,7,'Sr No.',1,0,'C');
    $pdf->Cell(30,7,'Roll No.',1,0,'C');
    $pdf->Cell(50,7,'Names',1,0,'C');
    $cellWidth_clo = array();
    for ($i=1;$i<=$clo_count;$i++){
        $cellWidth = $pdf->GetStringWidth("CLO ",$i);
        $cellWidth_clo[] = $cellWidth;
        $pdf->Cell($cellWidth+4,7,"CLO ".$i,1,0,'C');
        if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $clo_print = $i;
            break;
        }
    }
    $pdf->Ln();

    $pdf->SetFont('Times','',10);
    // Data
    for ($i=0;$i<count($sr_no);$i++){
        $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
        $pdf->Cell(30,6,$roll_list[$i],1);
        $pdf->Cell(50,6,$name_list[$i],1);
        if ($clo_print){
            for ($k=1;$k<=$clo_print;$k++)
                $pdf->Cell($cellWidth_clo[$k-1]+4,6,clo_attain_single($course,$k,'Percentage',$roll_list[$i],$conn),1,0,'C');
        }
        else{
            for ($k=1;$k<=$clo_count;$k++)
                $pdf->Cell($cellWidth_clo[$k-1]+4,6,clo_attain_single($course,$k,'Percentage',$roll_list[$i],$conn),1,0,'C');
        }
        $pdf->Ln();
    }

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
 
    $pdf->Output();

      ?>