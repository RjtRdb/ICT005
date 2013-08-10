<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="123"; // Mysql password
$db_name="newlogin"; // Database name
$tbl_name="monitor_user"; // Table name
session_start();
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];


$sql="SELECT * FROM login WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"

while($row = mysql_fetch_array($result))
{
$_SESSION['myses_var']=$row['level'];
$_SESSION['usrnam']=$row['username'];
}
session_register("myusername");
session_register("mypassword");
if($_SESSION['myses_var'] == 'admin')
{
ud($myusername);
    header("location:home.php");
}

else
 {
echo "Wrong Username or Password";
$err='my';
$_SESSION['username']= 'bad';
 header("location:index.php");
}

$sql=mysql_query("select * from userdetail");
$i=1;
$id;
while($row=mysql_fetch_array($sql))
{
$id=$row['uempID'];

}
function ud($s)
{
$myusername=$s;
$dt=(date('Y/m/d H:i:s'));

//mysql_query("INSERT INTO userlogdetails (Username,LoginTime) VALUES  ('$myusername','');")or die("Opps some thing went swrong");

$sql=mysql_query("select uempID from userdetail");
$vf;
$name;
while($row=mysql_fetch_array($sql))
{
$vf=$row['uempID']+1;/*
$name=$row['name'];
$description=$row['description'];
$price=$row['price'];
$picture=$row['picture'];*/
}
$_SESSION['uid']=$vf;
mysql_query("INSERT INTO userdetail (username,login_time) VALUES  ('$myusername','$dt');")or die("Opps some thing went swrong");

}
}
?>

