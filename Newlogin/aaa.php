
<?php 
include('db.php');
?>


<?php
session_start();
	if($_SESSION['type']=="admin" )
				{
					$r=$_SESSION['user'];
					
				}else if($_SESSION['type']=="manager" )
				{
					 echo "<script type=\"text/javascript\">".
      				  "alert('You are not Authorized');".
       				 "</script>";
 					echo"<script>"."window.location.href='home.php'"."</script>>";
					
				}
				else
				{
					header("Location:index.php");
					 
				}
?>




<body>
<span class="selectRequiredMsg">Please select user.</span>

<form id="form1" name="form1" method="post" action="aaa2.php">


 
  <label>
  
  
  Date <input type="text" name="date" id="date">
  <input type="submit" value="search">
  </label>
  </span>
</form>
<?php
$date      = $_POST['date'];
 $sql="SELECT * FROM userdetail WHERE login_date = '".$date."'";
 $result = mysql_query($sql);
?>
 
 <table width="75%" height="73" cellpadding="0" cellspacing="0">
<tr>
	<th width="15%"><span class="style9">Username</span></th>
	<th width="15%"><span class="style9">LoginDate</span></th>
    <th width="15%"><span class="style9">LoginTime</span></th>
    <th width="15%"><span class="style9">LogoutDate</span></th>
    <th width="15%"><span class="style9">LogoutTime</span></th>
   </tr>
 
<?php

while ($row1 = mysql_fetch_array($result)){
		
		$Username = $row1['username'];
		$LoginDate = $row1['login_date'];
		$LoginTime = $row1['login_time'];
		$LogoutDate = $row1['logout_date'];
		$LogoutTime = $row1['logout_time'];
?>
		<tr>
		   <td><span class="style9"><?php echo $Username?></span></td>
		  <td><span class="style9"><?php echo $LoginDate?></span></td>
		  <td><span class="style9"><?php echo $LoginTime?></span></td>
          <td><span class="style9"><?php echo $LogoutDate?></span></td>
          <td><span class="style9"><?php echo $LogoutTime?></span></td>
   </tr>
<?php 
}
 ?>
 </table>
 
<div class="table" id="table">
 
</div>

</body>
</html>
