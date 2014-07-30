<?php
	$to = "contact@jakenusca.com";
	$from = $_REQUEST["name"];
	$subject = "MESSAGE FROM CONTACT FORM";
	$email = $_REQUEST["email"];
	$message = $_REQUEST["text"];
	$bot = $_REQUEST["robot"];
	
	$headers = "To: $to" . "\r\n";
	$headers .= "From: $from <$email>" . "\r\n";
	
	if (!$from || !$subject || !$email || !$message)
		$jerk = 1;
	else
		$jerk = 0;
	
	if ($bot == "false" && $jerk == 0)
	{
		ini_set('sendmail_from', 'contact@jakenusca.com');
		$sent = mail($to, $subject, $message, $headers);

		if($sent){
			echo "true";
			exit;
		}
		else{
			echo "false";
			exit;
		}
	}
	echo "false";
	exit;
?>