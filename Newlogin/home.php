<?php
session_start();


?>
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
//print_r($_SESSION);
?>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<body>

<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#">User Settings</a>
      <ul>
        <li><a href="adduser.php">Add new user</a></li>
        <li><a href="edituser.php">View,Edit or Delete user</a></li>
         <li><a href="monitoruser.php">Monitoring user</a></li>
        <li><a href="changepwd.php">Change password</a></li>
      </ul>
  </li>
 
  <li><a class="MenuBarItemSubmenu" href="#">Distribution</a>
   
            <ul>
              <li><a href="Distribution/dis_form.php">Distribute Items</a></li>
              <li><a href="Distribution/dis_search.php">Search Distribute items</a></li>
            </ul>
        </li>
        
    <li><a class="MenuBarItemSubmenu" href="#"><img src="images.jpg" width="35" height="20" align="center">Email</a>
      <ul>
        <li><a href="Email/sendmail.php">Send Email</a></li>
        <li><a href="Email/receivemail.php">Check receive Email</a></li>
      </ul>
  </li>
</ul>



<tr><td><a href="logout.php">logout</a></td></tr>





<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
