<?php 



if (isset($_POST['compose'])) {


require 'PHPMailer /PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0
;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port =587 ;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "donthulavikas1999@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "16021999";
//Set who the message is to be sent from
$mail->setFrom('donthulavikas1999@gmail.com', 'First Last');
//Set an alternative reply-to address
//Set who the message is to be sent to
$mail->addAddress('8466vikas@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body = "http://localhost/uploadingtodrive/resetpass.php?token=123";

$mail->Body = $body;
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/a.jpg');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	require 'loginpage.php';
    echo "Message sent!";
}

}
?>