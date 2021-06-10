<?php
	$sql_col_list = $conn->query("SHOW COLUMNS FROM $course");
		$col_list_d = array();
		while($col_list = $sql_col_list->fetch_assoc()){
			$col_list_d[] = $col_list['Field'];
		}
	    $course_title = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_title FROM courses_info WHERE course_id='".$course."'"))['course_title'];
        $course_code = mysqli_fetch_assoc(mysqli_query($conn,"SELECT course_code FROM courses_info WHERE course_id='".$course."'"))['course_code'];
      
      Print "<table class='w3-table w3-hoverable w3-white'>";
      Print "<td><a href=\"main.php?menu=cumulative&course=$course\" class=\"w3-bar-item w3-button w3-padding\"><em class=\"fa fa-pie-chart fa-fw\"></em>Overall Result</a></td>";
      Print "</table>";
      
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
            
      // Attendance Cols Display Starts Here
      if($attendance_cols){  
          Print "<li class=\"parent-gi\">Attendance";
          Print "<br>";
          $date = [];
            for ($i=0; $i< count($attendance_cols); $i++)
                $date[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $attendance_cols[$i] FROM $course where data_detail='Date'"))[$attendance_cols[$i]];
          arsort($date);
          $attendance_cols = (array_values(array_replace(array_flip(array_keys($date)), $attendance_cols))); 
          $date = array_values($date);
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          for ($i=0; $i< count($attendance_cols); $i++){
                $instrument = 'Attendance';
                Print "<li>";
                Print "<tr>";
                Print "<td><a href='?course=".$course."&amp;module=".$attendance_cols[$i]."&amp;menu=atten_display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".date_format(date_create($date[$i]),"d/m/Y")."</a></td>";
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course"."&amp;module=$attendance_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course"."&amp;id=$attendance_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            }
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }

            
    // Quiz Cols Display Starts Here
      if($quiz_cols){  
          Print "<li class=\"parent-gi\">Quizzes";
          Print "<br>";
          $question = [];
            for ($i=0; $i< count($quiz_cols); $i++)
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course where data_detail='Question'"))[$quiz_cols[$i]];
          asort($question);
          $quiz_cols = (array_values(array_replace(array_flip(array_keys($question)), $quiz_cols))); 
          $question = array_values($question);
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=Quiz&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";

          for ($i=0; $i< count($quiz_cols); $i++){
                $cep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $quiz_cols[$i] FROM $course where data_detail='cep'"))[$quiz_cols[$i]];
                $instrument = 'Quiz';
                Print "<li>";
                Print "<tr>";
                if ($cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]."</a></td>";
               else
                   Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
                   
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course"."&amp;module=$quiz_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course"."&amp;id=$quiz_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            }
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }
      // Assignment Cols Display Starts Here
      if($assign_cols){   
          Print "<li class=\"parent-gi\">Assignment";
          Print "<br>";
          $question = [];
            for ($i=0; $i< count($assign_cols); $i++)
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course where data_detail='Question'"))[$assign_cols[$i]];
          asort($question);
          $assign_cols = (array_values(array_replace(array_flip(array_keys($question)), $assign_cols))); 
          $question = array_values($question);
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=Assignment&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";
          for ($i=0; $i< count($assign_cols); $i++){
                $cep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $assign_cols[$i] FROM $course where data_detail='cep'"))[$assign_cols[$i]];
                $instrument = 'Assignment';
                Print "<li>";
                Print "<tr>";
                if ($cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]."</a></td>";
               else
                   Print "<td><a href='?course=".$course."&ampinstrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course"."&amp;session=".$session."&amp;module=$assign_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course"."&amp;session=".$session."&amp;id=$assign_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            }
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }
      // LAB Cols Display Starts Here
      if($lab_cols){   
          Print "<li class=\"parent-gi\">LAB Experiments";
          Print "<br>";
          $question = [];
            for ($i=0; $i< count($lab_cols); $i++)
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course where data_detail='Question'"))[$lab_cols[$i]];
          asort($question);
          $lab_cols = (array_values(array_replace(array_flip(array_keys($question)), $lab_cols))); 
          $question = array_values($question);
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=LAB&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";
          for ($i=0; $i< count($lab_cols); $i++){
                $instrument = 'LAB';
                $g_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $lab_cols[$i] FROM $course where data_detail='g_type'"))[$lab_cols[$i]];
                Print "<li>";
                Print "<tr>";
                if ($g_type=='conventional')
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]."</a></td>";
                else
                  Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b></a></td>";
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course&amp;module=$lab_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course&amp;id=$lab_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            }
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }
    // Project Cols Display Starts Here
      if($project_cols){   
          Print "<li class=\"parent-gi\">Projects";
          Print "<br>";
          $question = [];
            for ($i=0; $i< count($project_cols); $i++)
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course where data_detail='Question'"))[$project_cols[$i]];
          asort($question);
          $project_cols = (array_values(array_replace(array_flip(array_keys($question)), $project_cols))); 
          $question = array_values($question);
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=Project&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";
          for ($i=0; $i< count($project_cols); $i++){
                $g_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course where data_detail='g_type'"))[$project_cols[$i]];
                $cep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $project_cols[$i] FROM $course where data_detail='cep'"))[$project_cols[$i]];
                $instrument = 'Project';
                Print "<li>";
                Print "<tr>";
                if ($g_type=='conventional' && $cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]."</a></td>";
                if ($g_type=='conventional' && $cep==1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
                if ($g_type=='rubric' && $cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b></a></td>";
                if ($g_type=='rubric' && $cep==1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b>&nbsp;<b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
              
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course&amp;module=$project_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course&amp;id=$project_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            }
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }
    // Presentation Cols Display Starts Here
      if($presentation_cols){   
          Print "<li class=\"parent-gi\">Presentations";
          Print "<br>";
          $question = [];
            for ($i=0; $i< count($presentation_cols); $i++)
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course where data_detail='Question'"))[$presentation_cols[$i]];
          asort($question);
          $presentation_cols = (array_values(array_replace(array_flip(array_keys($question)), $presentation_cols))); 
          $question = array_values($question);
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=Presentation&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";
          for ($i=0; $i< count($presentation_cols); $i++){
                $g_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course where data_detail='g_type'"))[$presentation_cols[$i]];
                $cep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $presentation_cols[$i] FROM $course where data_detail='cep'"))[$presentation_cols[$i]];
                $instrument = 'Presentation';
                Print "<li>";
                Print "<tr>";
                if ($g_type=='conventional' && $cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]."</a></td>";
                if ($g_type=='conventional' && $cep==1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
                if ($g_type=='rubric' && $cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b></a></td>";
                if ($g_type=='rubric' && $cep==1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b>&nbsp;<b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
              
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course&amp;module=$presentation_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course&amp;id=$presentation_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            }
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }
    // VIVA Cols Display Starts Here
      if($viva_cols){   
          Print "<li class=\"parent-gi\">VIVA's";
          Print "<br>";
          $question = [];
            for ($i=0; $i< count($viva_cols); $i++)
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course where data_detail='Question'"))[$viva_cols[$i]];
          asort($question);
          $viva_cols = (array_values(array_replace(array_flip(array_keys($question)), $viva_cols))); 
          $question = array_values($question);
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=VIVA&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";
          for ($i=0; $i< count($viva_cols); $i++){
                $g_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course where data_detail='g_type'"))[$viva_cols[$i]];
                $cep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $viva_cols[$i] FROM $course where data_detail='cep'"))[$viva_cols[$i]];
                $instrument = 'VIVA';
                Print "<li>";
                Print "<tr>";
                if ($g_type=='conventional' && $cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]."</a></td>";
                if ($g_type=='conventional' && $cep==1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
                if ($g_type=='rubric' && $cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b></a></td>";
                if ($g_type=='rubric' && $cep==1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b>&nbsp;<b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
              
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course&amp;module=$viva_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course&amp;id=$viva_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            }
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }
    // Other Cols Display Starts Here
      if($other_cols){  
          Print "<li class=\"parent-gi\">Others";
          Print "<br>";
          $question = [];
            for ($i=0; $i< count($other_cols); $i++)
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course where data_detail='Question'"))[$other_cols[$i]];
          asort($question);
          $other_cols = (array_values(array_replace(array_flip(array_keys($question)), $other_cols))); 
          $question = array_values($question);
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=Other&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";
          for ($i=0; $i< count($other_cols); $i++){
                $g_type = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course where data_detail='g_type'"))[$other_cols[$i]];
                $cep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $other_cols[$i] FROM $course where data_detail='cep'"))[$other_cols[$i]];
                $instrument = 'Other';
                Print "<li>";
                Print "<tr>";
                if ($g_type=='conventional' && $cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]."</a></td>";
                if ($g_type=='conventional' && $cep==1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
                if ($g_type=='rubric' && $cep!=1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b></a></td>";
                if ($g_type=='rubric' && $cep==1)
                    Print "<td><a href='?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>".$instrument." ".$question[$i]." <b class='w3-lime w3-round'>&nbsp;R&nbsp;</b>&nbsp;<b class='w3-orange w3-round'>&nbsp;CEP&nbsp;</b></a></td>";
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course&amp;module=$other_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course&amp;id=$other_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            }
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }

    // Midterm Cols Display Starts Here
      if($mid_cols){
          Print "<li class=\"parent-gi\">Mid-Term Exam";
          Print "<br>";
          $quest_no = [];
          $question = [];
          $qpart = [];
            for ($i=0; $i< count($mid_cols); $i++){
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course where data_detail='Question'"))[$mid_cols[$i]];
                $qpart[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $mid_cols[$i] FROM $course where data_detail='QuesPart'"))[$mid_cols[$i]];
                $quest_no[$i] = $question[$i].$qpart[$i];
            }
          asort($quest_no);
          $mid_cols = (array_values(array_replace(array_flip(array_keys($quest_no)), $mid_cols)));
          $question = (array_values(array_replace(array_flip(array_keys($quest_no)), $question)));
          $qpart = (array_values(array_replace(array_flip(array_keys($quest_no)), $qpart)));
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=Midterm&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";
          for ($i=0; $i< count($mid_cols); $i++){
                $instrument = 'Midterm';
                Print "<li>";
                Print "<tr>";
              if ($qpart[$i])
                Print "<td><a href='main.php?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart[$i]."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Question:  ".$question[$i]." (".$qpart[$i].")</a></td>";
              else
                  Print "<td><a href='main.php?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart[$i]."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Question:  ".$question[$i]."</a></td>";
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course"."&amp;module=$mid_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course&amp;id=$mid_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            } 
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }

    // Final Cols Display Starts Here
      if($final_cols){
          Print "<li class=\"parent-gi\">Final-Term Exam";
          Print "<br>";
          $quest_no = [];
          $question = [];
          $qpart = [];
            for ($i=0; $i< count($final_cols); $i++){
                $question[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course where data_detail='Question'"))[$final_cols[$i]];
                $qpart[$i] = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $final_cols[$i] FROM $course where data_detail='QuesPart'"))[$final_cols[$i]];
                $quest_no[$i] = $question[$i].$qpart[$i];
            }
          asort($quest_no);
          $final_cols = (array_values(array_replace(array_flip(array_keys($quest_no)), $final_cols)));
          $question = (array_values(array_replace(array_flip(array_keys($quest_no)), $question)));
          $qpart = (array_values(array_replace(array_flip(array_keys($quest_no)), $qpart)));
          Print "<ul class=\"sub-nav-gi\">";
          Print "<table class=w3-col>";
          Print "<td><a href='?course=".$course."&amp;instrument_s=Final&amp;menu=instrument_cumulative' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Cumulative</a></td>";
          for ($i=0; $i< count($final_cols); $i++){
                $instrument = 'Final';
                Print "<li>";
                Print "<tr>";
              if ($qpart[$i])
                Print "<td><a href='main.php?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart[$i]."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Question:  ".$question[$i]." (".$qpart[$i].")</a></td>";
              else
                  Print "<td><a href='main.php?course=".$course."&amp;instrument=".$instrument."&amp;question=".$question[$i]."&amp;qpart=".$qpart[$i]."&amp;menu=display' class='w3-bar-item w3-button w3-padding'><em class='fa fa-book fa-fw'></em>Question:  ".$question[$i]."</a></td>";
			  	Print "<td><a href=\"main.php?menu=module_edit&course=$course&amp;module=$final_cols[$i]\"><em class='fa fa-pencil fa-fw'></em></a></td>";
                Print "<td><a href=\"drop_component.php?course=$course&amp;id=$final_cols[$i]\"  onclick=\"return confirm('Are you sure?')\"><em class='fa fa-trash fa-fw'></em></a></td>";
                Print "</tr>";
                Print "</li>";
            } 
          Print "</table>";
          Print "</ul>";
          Print "</li>";
      }      
            for ($i=0;$i<count($col_list_d)/1.5;$i++) // add empty spaces below navigation menu end
                Print "<br>";
?>