<?php
session_start();
include("db.php");


@$no_1=$_POST["username"];


@$no_2=$_POST["password"];
$result = mysql_query("SELECT * FROM login WHERE username = '$no_1' && password=password('$no_2')");

?>
<?php if($row = mysql_fetch_array($result)  )
  {
  		//session_register("$no_1");
	  session_register("uname");
		$_SESSION['uname'] = $row['fullname'];
		echo $_SESSION['uname'];
		session_register("u");
		$_SESSION['u'] = $row['username'];
		echo $_SESSION['u'];	
	  $_SESSION['type']=$row['level'];
	  $_SESSION['user']=$no_1;

	  if( $_SESSION['type']=="admin"||"manager")
	  {
	 
	   echo "<script type=\"text/javascript\">".
        "alert('Successfully Logged');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
		$sql=mysql_query("select uempID from userdetail");
$vf;

while($row=mysql_fetch_array($sql))
{
$vf=$row['uempID']+1;/*
$name=$row['name'];
$description=$row['description'];
$price=$row['price'];
$picture=$row['picture'];*/
}
$_SESSION['uid']=$vf;
//$no_1=$s;
$dt=(date('Y/m/d'));
$t=(date( 'H:i:s'));

//mysql_query("INSERT INTO userlogdetails (Username,LoginTime) VALUES  ('$myusername','');")or die("Opps some thing went swrong");


mysql_query("INSERT INTO userdetail (username,login_date,login_time) VALUES  ('$no_1','$dt','$t');")or die("Opps some thing went swrong");
	 }

		
  }else {  
  	 
	 echo "<script type=\"text/javascript\">".
        "alert('Incorrect Username or Password');".
        "</script>";
 		echo"<script>"."window.location.href='index.php'"."</script>>";
  }
  




?>
  

