<link rel="stylesheet" type="text/css" href="stylesu.css" />
<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
<?php
$q=$_GET["q"];
$date=$_POST["date"];

include('db.php');

$sql;
if($q=="All"){

$sql="SELECT * FROM userdetail";
}else{

$sql="SELECT * FROM userdetail WHERE username = '".$q."'";
}

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
