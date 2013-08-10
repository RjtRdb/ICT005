<?php
session_start();
include("db.php");
$_SESSION['uname']=NULL;
$dt=(date('Y/m/d H:i:s'));
$t=(date(' H:i:s'));
$kp= $_SESSION['uid'];
mysql_query("update userdetail set logout_date='$dt'  where uempID='$kp' ;")or die("Opps some thing went swrong");
mysql_query("update userdetail set  logout_time ='$t' where uempID='$kp' ;")or die("Opps some thing went swrong");

session_destroy(); //ends the current session

header("Location: " . "index.php" );

?>