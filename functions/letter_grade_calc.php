<?php 
// This file computes Letter Grades based on the provided score. Letter grades are calculated based on the absoulute system
function letter_grade_calc($total_score){
    if($total_score >=85)
        return 'A';
    elseif ($total_score >= 80 && $total_score < 85)
        return 'A-';
    elseif ($total_score >= 75 && $total_score < 80)
        return 'B+';
    elseif ($total_score >= 70 && $total_score < 75)
        return 'B';
    elseif ($total_score >= 65 && $total_score < 70)
        return 'B-';
    elseif ($total_score >= 61 && $total_score < 65)
        return 'C+';
    elseif ($total_score >= 58 && $total_score < 61)
        return 'C';
    elseif ($total_score >= 55 && $total_score < 58)
        return 'C-';
    elseif ($total_score >= 50 && $total_score < 55)
        return 'D';
    else
        return 'F';
}
?>