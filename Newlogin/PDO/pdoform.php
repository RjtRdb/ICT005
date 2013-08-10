<script type="text/javascript" language="JavaScript">
function radioWithText(d) {
   
    document.getElementById('two').style.display = "none";
   
    document.getElementById(d).style.display='inline'; 
}
</script>





<body>
<form name="form" method="post" action="pdophp.php" onSubmit="return validate()">
	       <table width="811">
		     <tr>
      <td width="117" height="28">S/W Requirements</td>
      <td width="682">
<label>
          <input type="text" name="sw" id="sw" />
        </label>
        <span id="swvalidator"></span> 
    <tr>
      <td height="27">Objective</td>
      <td>
        <label>
        Quality<input type="Radio" name="radio2text" value="Radiobutton1" 
			onclick="javascript:radioWithText('one')" checked="checked" /><br>

		Price   <input type="Radio" name="radio2text" value="Radiobutton2" 
		onclick="javascript:radioWithText('two')" unchecked />
        </label><span  id="ravalidator"></span> <br> <div id="two" style="display:none;">
    <br>Enter the Price<br><input type="Text" name="three">
	</div>   </td>
    </tr>
    
		   <tr>
      <td height="27">Best Solution</td>
      <td>
     
        <textarea rows="6" cols="20" name="bs" id="bs">
		</textarea>
       
        <span  id="bsvalidator"></span>      </td>
    </tr>
		      <tr>
		        <td height="21"><div align="center">
		          <input type="reset" name="reset" id="reset" value="Reset">
	            </div></td>
		        <td>
		          <input type="submit" name="submit" id="submit" value="Login" >	           </td>
	          </tr>
	        </table>
</form>	 

</body>