<?php
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port =587 ;

$mail->SMTPAuth = true;
//Username to use for SMTP authentication
		$mail->Username ="donthulavikas1999@gmail.com";
						//Password to use for SMTP authentication
						$mail->Password = "16021999";
//Set who the message is to be sent from

$mail->setFrom('donthulavikas.com', 'hellot');
//Set an alternative reply-to address
//Set who the message is to be sent to
?>