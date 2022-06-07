<?php
if(!$_POST) exit;

    $to 	  = 'lorzbecislao@gmail.com'; #Replace your email id...
	$name	  = $_POST['name'];
	$email    = $_POST['email'];
    $message  = $_POST['message'];
        
	if(get_magic_quotes_gpc()) { $message = stripslashes($message); }

	 $e_subject = 'You\'ve been contacted by ' . $name . '.';

	 $msg  = "You have been contacted by $name";
	 $msg .= "$message\r\n\n";
	 $msg .= "You can contact $name via email, $email.\r\n\n";
	 $msg .= "-------------------------------------------------------------------------------------------\r\n";
								
	 if(mail($to, $e_subject, $msg, "From: $email\r\nReturn-Path: $email\r\n")) {
		$response = ['status' => 'success'];
	 } else {
		$response = ['status' => 'error'];
	 }
     echo json_encode($response); 
?>