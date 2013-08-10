
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
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("table").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("table").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuserdetail.php?q="+str,true);
xmlhttp.send();
}
</script>


<body>
<span class="selectRequiredMsg">Search By Username.</span>

<form id="form1" name="form1" method="post" action="">


 
  <label>
  <?php $sql=mysql_query("SELECT username FROM login;");

  ?>
  
  <select name="users" onChange="showUser(this.value)" multiple="multiple">
  <option id="*">All</option>
  <?php while($row=mysql_fetch_array($sql))
{
$serial=$row['username']; 
?>
  <option name="<?php echo $serial;?>"><?php echo $serial;?></option>
  
  <?php 
  }
  ?>
  </select>
  </label>
  </span>
</form>
<span class="selectRequiredMsg">Search By Date.</span>
<form id="form2" name="form2" method="post" action="aaa2.php">


 
  <label>
  
  
  Date <input type="text" name="date" id="date">
  <input type="submit" value="search" >
  </label>
  </span>
</form>

<div class="table" id="table">
 
</div>

</body>
</html>
