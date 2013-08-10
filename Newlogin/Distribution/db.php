
<?php

$logUser = NULL;
if(isset($_SESSION['uname']))
{
	$logUser = $_SESSION['uname'];
	//echo $logUser;
}
if($logUser == NULL)
{
	header("Location: " . "index.php" );
}
echo "You are logged :  ";
echo $_SESSION['uname'];
/*print_r($_SESSION);*/
?>


<?php
	$con = mysql_connect("localhost","root","123"); // create connection
	if (!$con)
  {
  	die('Could not connect: ' . mysql_error());
  }
  
  mysql_select_db("newlogin", $con);// select database
 
?>
