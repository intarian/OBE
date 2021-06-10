  // Use to select module based on user selection    
     $('#Instrument').on('change',function(){
    if($(this).val()=="Quiz" || $(this).val()=="Assignment"){
        $("#date").show()
        $("#question").show()
        $("#QuesPart").hide()
        $("#max_marks").show()
        $("#clo").show()
        $("#rubric_set").hide()
        $("#g_type").hide()
        $("#grade_type").hide()
        $("#rubric_type").hide()
        $("#CEP").show()
    }
    else { 
        if($(this).val()=="Final" || $(this).val()=="Midterm"){
            $("#date").show()
            $("#question").show()
            $("#QuesPart").show()
            $("#max_marks").show()
            $("#clo").show()
            $("#rubric_set").hide()
            $("#g_type").hide()
            $("#grade_type").hide()
            $("#rubric_type").hide()
            $("#CEP").hide()
        }
        else if($(this).val()=="Attendance"){
            $("#date").show()
            $("#question").hide()
            $("#QuesPart").hide()
            $("#max_marks").hide()
            $("#clo").hide()
            $("#rubric_set").hide()
            $("#g_type").hide()
            $("#grade_type").hide()
            $("#rubric_type").hide()
            $("#CEP").hide()
        }
        else if($(this).val()=="Project"){
            $("#date").show()
            $("#question").show()
            $("#QuesPart").hide()
            $("#max_marks").show()
            $("#clo").show()
            $("#grade_type").show()
            $("#g_type").show()
            $("#CEP").show()
        }
        else if($(this).val()=="VIVA"){
            $("#date").show()
            $("#question").show()
            $("#QuesPart").hide()
            $("#max_marks").show()
            $("#clo").show()
            $("#grade_type").show()
            $("#g_type").show()
            $("#CEP").show()
        }
        else if($(this).val()=="Presentation"){
            $("#date").show()
            $("#question").show()
            $("#QuesPart").hide()
            $("#max_marks").show()
            $("#clo").show()
            $("#grade_type").show()
            $("#g_type").show()
            $("#CEP").show()
        }
        else if($(this).val()=="LAB"){
            $("#date").show()
            $("#question").show()
            $("#QuesPart").hide()
            $("#max_marks").show()
            $("#clo").show()
            $("#grade_type").show()
            $("#g_type").show()
            $("#CEP").hide()
        }
        else if($(this).val()=="Other"){
            $("#date").show()
            $("#question").show()
            $("#QuesPart").hide()
            $("#max_marks").show()
            $("#clo").show()
            $("#grade_type").show()
            $("#g_type").show()
            $("#CEP").show()
        }
        else{
            $("#date").hide()
            $("#question").hide()
            $("#QuesPart").hide()
            $("#max_marks").hide()
            $("#clo").hide()
            $("#grade_type").hide()
            $("#rubric_set").hide()
            $("#rubric_type").hide()
            $("#CEP").hide()
        }
        
    }
        
});
        $('#grade_type').on('change',function(){
        if($(this).val()=="rubric"){
            $("#rubric_type").show()
            $("#rubric_set").show()
        }
        else{
            $("#rubric_type").hide()
            $("#rubric_set").hide()
        }
    });

    