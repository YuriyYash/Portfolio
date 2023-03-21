<?php

	$name = $_POST['name'];	
	$email = $_POST['email'];	
  $subject = $_POST['subject'];	
  $message = $_POST['message'];	
			
	$email_content = "User name: $name\n";
	$email_content .= "User email: $email\n";
  $email_content .= "Subject: $subject\n";
  $email_content .= "Message: $message\n";
		
	mail ("yashitweb@gmail.com", "Form sender", $email_content);

?>