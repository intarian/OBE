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
    $atten_cumm_course = array_values(atten_cumm_calc($course,$conn));


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
	  $pdf->Cell($pdf->GetPageWidth()-10,4,"Overall Attendance Report",0,0,'C');
   //   $pdf->Ln();
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

    $stu_count = mysqli_num_rows($conn->query("SELECT data_detail FROM $course"));

    // Fetch all attendance columns
    $attendance_cols = array();
    $sql_col_list = $conn->query("SHOW COLUMNS FROM $course");
		$col_list_d = array();
		while($col_list = $sql_col_list->fetch_assoc()){
			$col_list_d[] = $col_list['Field'];
		}
    for ($i=2; $i< count($col_list_d); $i++){ 
            $instrument = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $col_list_d[$i] FROM $course where data_detail='Instrument'"))[$col_list_d[$i]];
            if ($instrument=='Attendance')
                $attendance_cols[] =$col_list_d[$i]; 
			}
    // sort attendance columns via date
    $date = [];
    for ($i=0; $i< count($attendance_cols); $i++)
        $date[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $attendance_cols[$i] FROM $course where data_detail='Date'"))[$attendance_cols[$i]];
    arsort($date);
    $attendance_cols = (array_values(array_replace(array_flip(array_keys($date)), $attendance_cols))); 
    $date = array_values($date);
    
    $date[] = 'Overall';
/*    for ($i=0;$i<count($attendance_cols);$i++){
        $date =mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$i] FROM $course WHERE data_detail='Date'"))[$attendance_cols[$i]];
      //  echo "<th>".date_format(date_create($date),"d/m")."</th>";
    }
*/
        $roll_list = array();
        $name_list = array();
        $sr_no = array();
        $counter = 1;
        $roll_cell_width = 0;  // fetch max width of roll cell
        $name_cell_width = 0;  // fetch max width of name cell
        for ($stu_id=15;$stu_id<=$stu_count;$stu_id++){
            $rollno = mysqli_fetch_assoc($conn->query("SELECT data_detail FROM $course WHERE serial =$stu_id"))['data_detail'];
            $cellWidth = $pdf->GetStringWidth($rollno);
            if ($cellWidth > $roll_cell_width)
                $roll_cell_width = $cellWidth;
            $roll_list[] = $rollno;
            $name_fetch = mysqli_fetch_assoc($conn->query("SELECT name FROM student_records WHERE rollno = '".$rollno."'"))['name'];
            $name_list[] = $name_fetch;
            $cellWidth = $pdf->GetStringWidth($name_fetch);
            if ($cellWidth > $name_cell_width)
                $name_cell_width = $cellWidth;
            $sr_no[] = $counter;
            $counter++;
        }


    $pdf->SetXY(10,$overviewheight+25);

// for first page
    $pdf->SetFont('Times','b',10);
    $pdf->Cell(15,7,'Sr No.',1,0,'C');
    $pdf->Cell($roll_cell_width,7,'Roll No.',1,0,'C');
    $pdf->Cell($name_cell_width,7,'Names',1,0,'C');
    $cellWidth_atten = array();
    for ($i=0;$i<count($date);$i++){
        $cellWidth = $pdf->GetStringWidth($date[$i]);
        $cellWidth_atten[] = $cellWidth;
        if ($date[$i] == 'Overall'){
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($cellWidth+4,7,$date[$i],1,0,'C');
            $pdf->SetFont('Times','',10);
        }
        else
            $pdf->Cell($cellWidth+4,7,$date[$i],1,0,'C');
        if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $atten_print = $i;
            break;
        }
    }
    $pdf->Ln();

    $pdf->SetFont('Times','',10);
    // Data
    for ($i=0;$i<count($sr_no);$i++){
        $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
        $pdf->Cell($roll_cell_width,6,$roll_list[$i],1);
        $pdf->Cell($name_cell_width,6,$name_list[$i],1);
        if ($atten_print){
            for ($k=0;$k<=$atten_print;$k++)
                $pdf->Cell($cellWidth_atten[$k]+4,6,mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$k] FROM $course WHERE data_detail='$roll_list[$i]'"))[$attendance_cols[$k]],1,0,'C');
        }
        else{
            for ($k=0;$k<count($attendance_cols);$k++)
                $pdf->Cell($cellWidth_atten[$k]+4,6,mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$k] FROM $course WHERE data_detail='$roll_list[$i]'"))[$attendance_cols[$k]],1,0,'C');
                $pdf->SetFont('Times','b',10);
                $pdf->Cell($cellWidth_atten[$k]+4,6,number_format($atten_cumm_course[$i],2),1,0,'C');
                $pdf->SetFont('Times','',10);
        }
        $pdf->Ln();
    }

// for second page
if ($atten_print){
    $pdf->AddPage('L','A4');
    $pdf->SetFont('Times','b',10);
    $pdf->Cell(15,7,'Sr No.',1,0,'C');
    $pdf->Cell($roll_cell_width,7,'Roll No.',1,0,'C');
    $pdf->Cell($name_cell_width,7,'Names',1,0,'C');
    $cellWidth_atten = array();
    for ($i=$atten_print+1;$i<count($date);$i++){
        $cellWidth = $pdf->GetStringWidth($date[$i]);
        $cellWidth_atten[$i] = $cellWidth;
        if ($date[$i] == 'Overall'){
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($cellWidth+4,7,$date[$i],1,0,'C');
            $pdf->SetFont('Times','',10);
        }
        else
            $pdf->Cell($cellWidth+4,7,$date[$i],1,0,'C');
        if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $atten_print2 = $i;
            break;
        }
    }
    $pdf->Ln();

    $pdf->SetFont('Times','',10);
    // Data
    for ($i=0;$i<count($sr_no);$i++){
        $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
        $pdf->Cell($roll_cell_width,6,$roll_list[$i],1);
        $pdf->Cell($name_cell_width,6,$name_list[$i],1);
        if ($atten_print2){
            for ($k=$atten_print+1;$k<=$atten_print2;$k++)
                $pdf->Cell($cellWidth_atten[$k]+4,6,mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$k] FROM $course WHERE data_detail='$roll_list[$i]'"))[$attendance_cols[$k]],1,0,'C');
        }
        else{
            for ($k=$atten_print+1;$k<count($attendance_cols);$k++)
                $pdf->Cell($cellWidth_atten[$k]+4,6,mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$k] FROM $course WHERE data_detail='$roll_list[$i]'"))[$attendance_cols[$k]],1,0,'C');
                $pdf->SetFont('Times','b',10);
                $pdf->Cell($cellWidth_atten[$k]+4,6,number_format($atten_cumm_course[$i],2),1,0,'C');
                $pdf->SetFont('Times','',10);
        }
        $pdf->Ln();
    }
}

// for third page
if ($atten_print2){
    $pdf->AddPage('L','A4');
    $pdf->SetFont('Times','b',10);
    $pdf->Cell(15,7,'Sr No.',1,0,'C');
    $pdf->Cell($roll_cell_width,7,'Roll No.',1,0,'C');
    $pdf->Cell($name_cell_width,7,'Names',1,0,'C');
    $cellWidth_atten = array();
    for ($i=$atten_print2+1;$i<count($date);$i++){
        $cellWidth = $pdf->GetStringWidth($date[$i]);
        $cellWidth_atten[$i] = $cellWidth;
        if ($date[$i] == 'Overall'){
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($cellWidth+4,7,$date[$i],1,0,'C');
            $pdf->SetFont('Times','',10);
        }
        else
            $pdf->Cell($cellWidth+4,7,$date[$i],1,0,'C');
        if ($pdf->GetX()>$pdf->GetPageWidth()-$cellWidth-4){
            $atten_print3 = $i;
            break;
        }
    }
    $pdf->Ln();

    $pdf->SetFont('Times','',10);
    // Data
    for ($i=0;$i<count($sr_no);$i++){
        $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
        $pdf->Cell($roll_cell_width,6,$roll_list[$i],1);
        $pdf->Cell($name_cell_width,6,$name_list[$i],1);
        if ($atten_print3){
            for ($k=$atten_print2+1;$k<=$atten_print3;$k++)
                $pdf->Cell($cellWidth_atten[$k]+4,6,mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$k] FROM $course WHERE data_detail='$roll_list[$i]'"))[$attendance_cols[$k]],1,0,'C');
        }
        else{
            for ($k=$atten_print2+1;$k<count($attendance_cols);$k++)
                $pdf->Cell($cellWidth_atten[$k]+4,6,mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$k] FROM $course WHERE data_detail='$roll_list[$i]'"))[$attendance_cols[$k]],1,0,'C');
                $pdf->SetFont('Times','b',10);
                $pdf->Cell($cellWidth_atten[$k]+4,6,number_format($atten_cumm_course[$i],2),1,0,'C');
                $pdf->SetFont('Times','',10);
        }
        $pdf->Ln();
    }
}


// for fourth page
        // Prints the rest of clos on additional page
    if ($atten_print3){
        $pdf->AddPage('L','A4');
        $pdf->SetFont('Times','b',10);
        $pdf->Cell(15,7,'Sr No.',1,0,'C');
        $pdf->Cell($roll_cell_width,7,'Roll No.',1,0,'C');
        $pdf->Cell($name_cell_width,7,'Names',1,0,'C');
        $cellWidth_atten = array();
        for ($i=$atten_print3+1;$i<=count($attendance_cols);$i++){
            $cellWidth = $pdf->GetStringWidth($date[$i]);
            $cellWidth_atten[$i] = $cellWidth;
            if ($date[$i] == 'Overall'){
                $pdf->SetFont('Times','b',10);
                $pdf->Cell($cellWidth+4,7,$date[$i],1,0,'C');
                $pdf->SetFont('Times','',10);
            }
            else
                $pdf->Cell($cellWidth+4,7,$date[$i],1,0,'C');
        }
        $pdf->Ln();
        $pdf->SetFont('Times','',10);
        // Data
        for ($i=0;$i<count($sr_no);$i++){
            $pdf->Cell(15,6,$sr_no[$i],1,0,'C');
            $pdf->Cell($roll_cell_width,6,$roll_list[$i],1);
            $pdf->Cell($name_cell_width,6,$name_list[$i],1);
            for ($k=$atten_print3+1;$k<count($attendance_cols);$k++)
                $pdf->Cell($cellWidth_atten[$k]+4,6,mysqli_fetch_assoc($conn->query("SELECT $attendance_cols[$k] FROM $course WHERE data_detail='$roll_list[$i]'"))[$attendance_cols[$k]],1,0,'C');
            $pdf->SetFont('Times','b',10);
            $pdf->Cell($cellWidth_atten[$k]+4,6,number_format($atten_cumm_course[$i],2),1,0,'C');
            $pdf->SetFont('Times','',10);
            $pdf->Ln();
        }
    }
 
    $pdf->Output();

      ?>