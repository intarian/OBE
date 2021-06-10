<?php 
// This file computes total attendance percentage for all students
function bloom_dictionary($clo_descrip,$bloom_level){
    
    $clo_word = explode(' ',trim($clo_descrip));
    if ($bloom_level =='C1')
        $bloom_verbs = ['define','identify','label','list','name','recall','state'];

    if ($bloom_level =='C2')
        $bloom_verbs = ['describe','discuss','explain','locate','paraphrase','translate'];

    if ($bloom_level =='C3')
        $bloom_verbs = ['apply','demonstrate','illustrate','prepare','solve','use'];

    if ($bloom_level =='C4')
        $bloom_verbs = ['analyze','categorize','compare','contrast','differentiate','discriminate','outline'];

    if ($bloom_level =='C5')
        $bloom_verbs = ['combine','construct','design','develop','generate','plan','propose'];

    if ($bloom_level =='C6')
        $bloom_verbs = ['assess','conclude','evaluate','interpret','justify','select','support'];

    if ($bloom_level =='P1')
        $bloom_verbs = ['detect','hear','listen','observe','perceive','recognize','see','sense','smell','taste','view','watch'];

    if ($bloom_level =='P2')
        $bloom_verbs = ['sit','stand','station','achieve','place','establish','assume'];

    if ($bloom_level =='P3')
        $bloom_verbs = ['copy','duplicate','imitate','manipulate','operate','practice','repeat'];

    if ($bloom_level =='P4')
        $bloom_verbs = ['complete','conduct','demonstrate','execute','increase','make','pace','produce'];

    if ($bloom_level =='P5')
        $bloom_verbs = ['control','direct','excel','guide','maintain','manage','master','organize','perfect','perform','proceed'];

    if ($bloom_level =='P6')
        $bloom_verbs = ['adapts','reorganizes','alerts','revises','changes'];

    if ($bloom_level =='P7')
        $bloom_verbs = ['designs','originates','combines','composes','constructs'];

    if ($bloom_level =='A1')
        $bloom_verbs = ['accept','acknowledge','listen','notice','tolerate'];

    if ($bloom_level =='A2')
        $bloom_verbs = ['agree','answer','assist','care','communicate','comply','conform','consent','contribute','cooperate','follow','obey','participate','read','respond','visit','volunteer'];

    if ($bloom_level =='A3')
        $bloom_verbs = ['adopt','assume','choose','behave','commit','desire','exhibit','express','initiate','prefer','seek'];

    if ($bloom_level =='A4')
        $bloom_verbs = ['adapt','adjust','arrange','balance','classify','conceptualize','formulate','group','organize','rank','theorize'];

    if ($bloom_level =='A5')
        $bloom_verbs = ['act','advocate','defend','exemplify','influence','justify','maintain','serve','support'];
    
    $verb_status = 0;
    
    for ($i=0;$i<count($bloom_verbs);$i++){
        if(strpos(strtolower($clo_word[0]), strtolower($bloom_verbs[$i]))!== false)
            $verb_status = 1;
    }
    
 if ($verb_status == 1)
        return 1;
    else
        return 0;
}
 ?>
