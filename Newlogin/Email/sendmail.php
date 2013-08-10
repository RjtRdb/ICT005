<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="emailphp.php" name="form_email" id="form_email" method="post" onSubmit="return validate()">
  <table width="545" height="373" border="0">
    <tr>
      <td width="181" height="27">Name</td>
      <td width="348">
        <label>
          <input type="text" name="name" id="name" onBlur="onlyalphabate(document.getElementById('fullname'))" placeholder="eg: Dilani Famalka Dehipe"/>
        </label><span  id="fnvalidator"></span>      </td>
    </tr>
    
    <tr>
      <td height="26">E-mail</td>
      <td>
        <label>
          <input type="text" name="email" id="email" onBlur="validate_em(document.getElementById('email'))"  placeholder="eg: mymail@mail.com"/>
        </label><span  id="emvalidator"></span>      </td>
    </tr>
   
    <tr>
      <td height="28">Subject</td>
      <td>
        <label>
          <input type="text" name="subject" id="subject" onBlur="validate_un(document.getElementById('username'))" placeholder="eg: dilani001"/>
        </label><span id="unvalidator"></span>      </td>
    </tr>
    <tr>
      <td height="27">Message</td>
      <td>
        <label>
           <textarea rows="6" cols="50" name="message" id="message">
		</textarea>
        </label><span  id="pwvalidator"></span>      </td>
    </tr>
   
   
   <tr>
       <td> <input type="reset" name="reset" id="reset" value="Clear"/></td>     
  <td>
    <label>
    <input type="submit" name="submit" id="submit" value="Submit" onSubmit="validate()"/>
    </label></td>
    <label>&nbsp;&nbsp;&nbsp;&nbsp;</label>
  </tr>
      </table> 
</form>
</body>


</html>
