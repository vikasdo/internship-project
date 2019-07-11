<?php
session_start();
$con=mysqli_connect('localhost','root','','uploadf');
if(isset($_POST['file']))
                    {

					$des='images/'.basename($_FILES['filew']['name']);
					$imgtype = strtolower(pathinfo($des,PATHINFO_EXTENSION));
					$cat=$_POST['select'];
					echo $imgtype;
					if (file_exists($des)) 
							{
							    echo "Sorry, file already exists.";
							    $uploadOk = 0;
							}
					// Check file size
					elseif ($_FILES["filew"]["size"] > 5000000000) 
							{

							    $uploadOk = 0;
							}
						else{
						move_uploaded_file($_FILES['filew']['tmp_name'], $des);
						$sql1="insert into files(name,type,uid,category) values('$des','$imgtype',1,'$cat')";
						$res1=mysqli_query($con,$sql1);
						$sql="select * from files";
						$res=mysqli_query($con,$sql);
						require 'notesindex.php';
						}
					}

			/*	elseif(isset($_GET['page'])){
				$i=$_GET['page'];
						if($i='notes'){
						$sql="select * from files";
						$res=mysqli_query($con,$sql);

						require 'notesindex.php';
						}
				}
*/


elseif (isset($_POST['compose'])) {


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
$mail->Username ="dvikas8466@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Vikas@1234";
//Set who the message is to be sent from

$mail->setFrom('donthulavikas.com', 'hellot');
//Set an alternative reply-to address
//Set who the message is to be sent to
$rec=$_POST["toemail"];
echo $rec;
$mail->addAddress($rec, 'John Doe');
//Set the subject line
$h=$_POST['heading'];
$mail->Subject = $h;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body = "http://localhost/uploadingtodrive/resetpass.php?token=123
";
$m=$_POST['msg'];
$mail->Body = $body.$m;
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
elseif (isset($_GET['show'])) {
	$r=$_GET['show'];
	$sql="select * from files where category='$r'";
	$res=mysqli_query($con,$sql);
	require 'categorywise.php';
}
elseif(isset($_GET['pageno']))
{


	 if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 4;
        $offset = ($pageno-1) * $no_of_records_per_page;

       

        $total_pages_sql = "SELECT COUNT(*) FROM files";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM files LIMIT $offset, $no_of_records_per_page";
        $res1 = mysqli_query($con,$sql);
        require 'notesindex.php';
       }

?>