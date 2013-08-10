
 <?php
session_start();
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
//print_r($_SESSION);
?>


<?php
	include("db.php");
 	$a1=$_POST["fullname"];
	
	$a2=$_POST["employnum"];
	
	$a3=$_POST["phone"];
	
	$a4=$_POST["email"];
	
	$a5=$_POST["username"];
	
	$a6=$_POST["password"];
	
	$a7=$_POST["conpassword"];
	
	$a8=$_POST["select"];

	
	$qry=mysql_query("select * from login where employnumber='$a2'");
	
	while($row=mysql_fetch_array($qry)){
		$x=1;

	}	
	if($x==1){
		 echo "<script type=\"text/javascript\">".
        "alert('EmployNumber Already Exist');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
	}else{
		
		if(!preg_match("!^[a-z0-9_~]{1,30}$!i", $a1))
		{
    	 echo "<script type=\"text/javascript\">".
        "alert('Invalid  name');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
		} 
		else
		{
		mysql_query("insert into login values('$a1','$a2','$a3','$a4','$a5',password('$a6'),password('$a7'),'$a8')");
		mysql_close($con);
	  echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
	}
	}
?>