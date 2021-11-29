<?php

	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
	
	$usersJson = json_decode(file_get_contents('php://input'), true);
	//echo print_r($_POST);
	
	
	foreach($usersJson as $user) {
		$email = $user['email'];
		$name = $user['name'];

		//echo $name."\n";
		sendEmail($name, $email);
	}
	
	//echo print_r($usersJson);
	
	function sendEmail($recipient, $emailAddress){
		// the message
		$msg = "hier HAST du deine email amk";
		
		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);
		
		// send email
		mail($emailAddress,"CENIS",$msg.' '.$recipient);
	}
	
?>


