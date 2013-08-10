
function checkPassword(str) 
{ var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/; 
return re.test(str);
} function checkForm(form) 
{ if(form.username.value == "") 
{ alert("Error: Username cannot be blank!");
form.username.focus(); 
return false; 
} re = /^\w+$/;
if(!re.test(form.username.value))
{ alert("Error: Username must contain only letters, numbers and underscores!");
form.username.focus();
return false; 
} if(form.newpassword.value != "" && form.newpassword.value == form.confirmnewnewpassword.value)
{ if(!checkPassword(form.newpassword.value))
{ alert("The newpassword you have entered is not valid!"); form.newpassword.focus(); 
return false;
} } else { alert("Error: Please check that you've entered and confirmed your newpassword!"); 
form.newpassword.focus(); 
return false; } return true;
}  JavaScript Document