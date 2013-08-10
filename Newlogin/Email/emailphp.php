<?php

	mysql_connect("localhost", "root", "123") or die(mysql_error());
	mysql_select_db("newlogin") or die(mysql_error());
    require("phpmailer/class.phpmailer.php");
	
	
    $mail = new PHPMailer();
	
	$name = $_REQUEST['name'] ;
	$email = $_REQUEST['email'] ;
	$subject = $_REQUEST['subject'] ;
	$message = $_REQUEST['message'] ;
	//$username= $_REQUEST['username'] ;
	
	
	//$qry=mysql_query("select * from login where email='$email'");
	//$row = mysql_fetch_array($qry); 
	//$email1=$row["email"];
	$password=$row["password"];
	////$email1="roshanpiyadigama@gmail.com";

    // ---------- adjust these lines ---------------------------------------
    $mail->Username = "rdbsixnet@gmail.com"; // your GMail user name
    $mail->Password = "rdbsixnet123"; 
    $mail->AddAddress($email); // recipients email
    $mail->FromName = "$name"; // readable name

    $mail->Subject = "$subject";
    $mail->Body    = "$message"; 
    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
    ?>
