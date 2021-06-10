<?php // return the column with specified parameters
// Find list of all cols
function ColFind($course_id,$instrument,$question,$qpart,$conn){
	$sql_col_list = mysqli_query($conn,"SHOW COLUMNS FROM $course_id");
	$col_list_d = array();
	while($col_list = mysqli_fetch_assoc($sql_col_list)){
		$col_list_d[] = $col_list['Field'];
	}
	// Use list to find the one with matching parameter
	for ($i=2; $i< count($col_list_d); $i++){ 
        if ($qpart==""){
            $sql = "SELECT i_col FROM(
            SELECT IF($col_list_d[$i] = '$instrument', '$col_list_d[$i]', NULL) AS i_col FROM $course_id WHERE data_detail='Instrument') as A
            INNER JOIN
            (SELECT IF($col_list_d[$i] = '$question', '$col_list_d[$i]', NULL) AS q_col FROM $course_id WHERE data_detail='Question') as B
            ON A.i_col=B.q_col;";}
        else{
        // Below SQL query return column with three parameters
            $sql ="SELECT i_col FROM(
            SELECT IF($col_list_d[$i] = '$instrument', '$col_list_d[$i]', NULL) AS i_col FROM $course_id WHERE data_detail='Instrument') as A
            INNER JOIN
            (SELECT IF($col_list_d[$i] = '$question', '$col_list_d[$i]', NULL) AS q_col FROM $course_id WHERE data_detail='Question') as B
            INNER JOIN
            (SELECT IF($col_list_d[$i] = '$qpart', '$col_list_d[$i]', NULL) AS qp_col FROM $course_id WHERE data_detail='QuesPart') as C
            ON A.i_col=B.q_col AND B.q_col=C.qp_col AND A.i_col=C.qp_col;";}
		$data = mysqli_query($conn,$sql);
		$info = mysqli_fetch_assoc($data);
		if ($info['i_col']){
            $col_name = $info['i_col'];
        }
    }
    return $col_name;		
}
?>