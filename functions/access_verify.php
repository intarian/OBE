<?php // This function verify that if the logged in user have the proper rights to view the course contents
function access_verify($course,$username,$conn){
    $discover_access_usernames = mysqli_fetch_assoc(mysqli_query($conn,"SELECT access_user FROM courses_info WHERE course_id='".$course."'"))['access_user'];
    $access_names = explode(":\^\:",$discover_access_usernames);
    for ($i=0;$i<count($access_names);$i++){
        if ($username == $access_names[$i])
            return 1;
    }
    return 0;
}
?>