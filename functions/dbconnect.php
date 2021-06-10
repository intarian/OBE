<?php /*
      $host = "localhost";
      $username = "session2010";
      $pass = "83272";
      $dbname = "obe_exp";
      $link = mysql_connect ($host, $username, $pass) or die ("Could not connect to database, try again later");
      mysql_select_db($dbname,$link);
	  */
	  
	
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "session2010";
 $dbpass = "83272";
 $db = "obe";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
     
	  ?>