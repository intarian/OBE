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
    $col_name=$_GET['module'];
    if ($col_name){
        $instrument = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='Instrument'"))[$col_name];
        $question = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='Question'"))[$col_name];
        $rubric_set_id = mysqli_fetch_assoc($conn->query("SELECT $col_name FROM $course WHERE data_detail='rubric_set_id'"))[$col_name];
        if ($instrument=='Other')
            $module = '';
        else
            $module_id = $instrument." ".$question;
    }
    else{
        $rubric_set_id=$_GET['set_id'];
        $module = '';
        
    }


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
      $pdf->Cell($pdf->GetPageWidth()-10,4,"Rubric Evaluation Sheet",0,0,'C');
	//  $pdf->Text(115,$overviewheight+8,"Rubric Evaluation Sheet");
      $pdf->SetFont('Times','b',11);
      $pdf->SetY($overviewheight+6);
      $pdf->SetX(7);
      $pdf->Cell($pdf->GetStringWidth("Course Code: "),$overviewheight+14,"Course Code: ",0,0,'C');
      $pdf->Cell($pdf->GetStringWidth($course_code),$overviewheight+14,$course_code,0,0,'C');
      $pdf->SetX(132);
      $pdf->Cell($pdf->GetStringWidth($module_id),$overviewheight+14,$module_id);
      $pdf->SetX($pdf->GetPageWidth()-$pdf->GetStringWidth("Course Title: ")-$pdf->GetStringWidth($course_title)-10);
      $pdf->Cell($pdf->GetStringWidth("Course Title: "),$overviewheight+14,"Course Title: ",0,0,'C');
      $pdf->Cell($pdf->GetStringWidth($course_title),$overviewheight+14,$course_title,0,0,'C');
      $pdf->Line(7,$overviewheight+19,$pdf->GetPageWidth()-10,$overviewheight+19);

    // Fetch Rubric Details
    $all_rubrics_fetch = mysqli_fetch_assoc(mysqli_query($conn,"Select rubric_sets FROM courses_info Where course_id='".$course."'"))['rubric_sets'];
    $all_rubrics_fetch = explode(":\^\:",$all_rubrics_fetch);
    for ($e=0;$e<count($all_rubrics_fetch);$e++)
        if($all_rubrics_fetch[$e]=="set_".$course."_".$rubric_set_id)
            $index = $e;
    $rubric_name = $all_rubrics_fetch[$index+1];
    $rubric_count = $all_rubrics_fetch[$index+2];
    $rubric_level = $all_rubrics_fetch[$index+3];
    
    // Print Rubric Details
    $pdf->SetXY(7,$overviewheight+20);
    $pdf->SetFont('Times','b',14);
    $pdf->Cell($pdf->GetStringWidth("Rubric Name: "),10,"Rubric Name: ",0,0,'C');
    $pdf->Cell($pdf->GetStringWidth($rubric_name),10,$rubric_name,0,0,'C');
    $pdf->Ln();
    for ($t=0;$t<$rubric_count;$t++){
        $pdf->SetX(7);
        $overviewheight += 7*($rubric_level+1);
        $pdf->SetFont('Times','b',12);
        $pdf->Cell($pdf->GetStringWidth("Criterion: "),7,"Criterion: ",0,0,'C');
        $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t],0,0,'C');
        $pdf->Ln();
        if ($rubric_level == 4){
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Exemplary [5]: "),7,"Exemplary [5]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+1]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+1],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Competent [3]: "),7,"Competent [3]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+2]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+2],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Developing [1]: "),7,"Developing [1]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+3]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+3],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Absent [0]: "),7,"Absent [0]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+4]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+4],0,0,'C');
            $pdf->Ln();
       }
        if ($rubric_level == 5){
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Exemplary [5]: "),7,"Exemplary [5]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+1]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+1],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Accomplished [4]: "),7,"Accomplished [4]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+2]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+2],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Developing [3]: "),7,"Developing [3]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+3]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+3],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Begining [1]: "),7,"Begining [1]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+4]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+4],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Absent [0]: "),7,"Absent [0]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+5]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+5],0,0,'C');
            $pdf->Ln();
       }
        if ($rubric_level == 6){
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Exemplary [5]: "),7,"Exemplary [5]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+1]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+1],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Satisfactory [4]: "),7,"Satisfactory [4]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+2]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+2],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Developing [3]: "),7,"Developing [3]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+3]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+3],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Unsatisfactory [2]: "),7,"Unsatisfactory [2]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+4]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+4],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Unacceptable [1]: "),7,"Unacceptable [1]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+5]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+5],0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($pdf->GetStringWidth("Absent [0]: "),7,"Absent [0]: ",0,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Cell($pdf->GetStringWidth($all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+6]),7,$all_rubrics_fetch[$index+4+($rubric_level*$t)+$t+6],0,0,'C');
            $pdf->Ln();
       }
    }

	// get student data for rubric evaluation
    $rubrics_fetched = array();
    for ($t=0;$t<$rubric_count;$t++)
        $rubrics_fetched[] = $all_rubrics_fetch[$index+4+($rubric_level*$t)+$t];

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

	// start printing data
	$pdf->Ln();
    //$pdf->SetXY(10,$overviewheight+40);


    $pdf->SetFont('Times','b',10);
    $pdf->Cell(15,7,'Sr No.',1,0,'C');
    $pdf->Cell(30,7,'Roll No.',1,0,'C');
    $pdf->Cell(50,7,'Names',1,0,'C');
    $cellWidth_rubrics = array();
    for ($i=0;$i<count($rubrics_fetched);$i++){
        $cellWidth = $pdf->GetStringWidth($rubrics_fetched[$i]);
        $cellWidth_rubrics[] = $cellWidth;
        $pdf->Cell($cellWidth+8,7,$rubrics_fetched[$i],1,0,'C');
        if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth){
            $rubric_print = $i+1;
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
        if ($rubric_print){
            for ($k=0;$k<$rubric_print;$k++)
                $pdf->Cell($cellWidth_rubrics[$k]+8,6,'',1);
        }
        else{
            for ($k=0;$k<count($rubrics_fetched);$k++)
                $pdf->Cell($cellWidth_rubrics[$k]+8,6,'',1);
        }
        $pdf->Ln();
    }

        // Prints the rest of rubrics on additional page
    if ($rubric_print){
        $pdf->AddPage('L','A4');
        $pdf->SetFont('Times','b',10);
        $pdf->Cell(15,7,'Sr No.',1,0,'C');
        $pdf->Cell(30,7,'Roll No.',1,0,'C');
        $pdf->Cell(50,7,'Names',1,0,'C');
        $cellWidth_rubrics = array();
        for ($i=$rubric_print;$i<count($rubrics_fetched);$i++){
            $cellWidth = $pdf->GetStringWidth($rubrics_fetched[$i]);
            $cellWidth_rubrics[] = $cellWidth;
            $pdf->Cell($cellWidth+8,7,$rubrics_fetched[$i],1,0,'C');
        }
        $pdf->Ln();
        $pdf->SetFont('Times','',10);
        // Data
        for ($i=0;$i<count($sr_no);$i++){
            $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
            $pdf->Cell(30,6,$roll_list[$i],1);
            $pdf->Cell(50,6,$name_list[$i],1);
            for ($k=0;$k<count($rubrics_fetched)-$rubric_print;$k++)
                $pdf->Cell($cellWidth_rubrics[$k]+8,6,'',1);
            $pdf->Ln();
        }
    }
 
    $pdf->Output();

      ?>