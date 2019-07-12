<?php
session_start();
$con=mysqli_connect('localhost','root','','uploadf');
if(isset($_POST['file'])){    

					$des='images/'.basename($_FILES['filew']['name']);
					$imgtype = strtolower(pathinfo($des,PATHINFO_EXTENSION));
					$cat=$_POST['select'];
										$cat1=$_POST['select1'];
										$cat2=$_POST['select2'];
					
					
						if(1){
						move_uploaded_file($_FILES['filew']['tmp_name'], $des);
						$sql1="insert into files(name,type,uid,category,ys,branch) values('$des','$imgtype',1,'$cat','$cat2','$cat1')";
						$res1=mysqli_query($con,$sql1);
						
						require 'notesindex.php';
						}
					}

				elseif(isset($_GET['notes'])){
						

						require 'notesindex.php';
				}

/* php mailer */
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
elseif (isset($_POST['subscribe'])) {


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
						$mail->Username ="donthulavikas1999@gmail.com";
						//Password to use for SMTP authentication
						$mail->Password = "16021999";
						//Set who the message is to be sent from

						$mail->setFrom('donthulavikas1999@gmail.com', 'Hello');
						//Set an alternative reply-to address
						//Set who the message is to be sent to
						$rec=$_POST["emails"];
						$mail->addAddress($rec, 'user');
						//Set the subject line
						$h='Hello User
';
$to = 'bob@example.com';

$subject = 'Website Change Request';

						$mail->Subject = $h;
						//Read an HTML message body from an external file, convert referenced images to embedded,
						//convert HTML into a basic plain-text alternative body
						 
 
$mail->MsgHTML('<html>
<head>
<style>
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

.email-signup-thankyou{
  font-family:sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  background: #333;
  padding:10%;
  background-image:url("https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
  }
  .content{
  	 background-image:url("https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    margin: auto;  /* Magic! */
    max-width:700px;
    color:#333;
    box-shadow: 0 3px 6px rgba(0,0,0,0.55), 0 3px 6px rgba(0,0,0,0.23);
   
    background-position: right 5px bottom 5px;
    background-size: 10em;
    text-align:center;
    position: relative;
    padding:10%;
    border-radius:5px;

    .left-hole,.right-hole{
      position: absolute;
      width:20px; height:20px;
      background:#333;
      border-radius:50%;
      top:15px;
    }
    .left-hole{
      left:15px;
      top:10px;
    }
    .right-hole{
      right:15px;
      top:10px;
    }
    h2,h3{
      text-align:left;
      padding:5% 5% 0% 3%;
      color:#333;
      font-weight:900;
    }
    .main-content{
      > h1 {
        color:#333;
        text-transform:uppercase;
        margin-top:-2%;
        font-size:2.5em;
        font-weight:900;
      }
    }
  }
}
</style>
</head>




<body >

  <div class="header-custom email-signup-thankyou">
<div class="content">
    <div class="left-hole"></div>
    <div class="right-hole"></div>
    <div class="main-content">
      <h1>Success! You are Subscribed</h1>
      <p>Thank you for subscribing, it means a lot to us, just like you do! We really appreciate you giving us a moment of your time.</p>
      <p class="strong">  welcome ...</p>

      <h3>Next steps & what to expect:</h3>
      <ul>
        <li>daily Notes</li>
        <li>Articles</li>
        <li> daily Q&A</li>
      </ul>
    </div>

  </div>
</div>


</body></html>');
				
	

						//send the message, check for errors
						if (!$mail->send()) {
						    echo "Mailer Error: " . $mail->ErrorInfo;
						} else {
						    require'index.php';
						    
                        }

}
elseif (isset($_GET['show'])) {
	$r=$_GET['show'];
	$sql="select * from files where category='$r'";
	$res=mysqli_query($con,$sql);
	require 'categorywise.php';
}
elseif(isset($_GET['pageno'])||isset($_GET['view']))
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
       elseif (isset($_POST['sort'])) {
	$text=$_POST['search'];
	
	$sql="select * from files where name like '%$text%'or branch like '%$text%' or category like '%$text%' or ys like '%$text%'  ";
	$res1=mysqli_query($con,$sql);
	
	if($res1)
		require 'notesindex.php';
}
elseif(isset($_GET['a']))
{
	require 'article.php';
}
elseif(isset($_GET['faq']))
{
	require 'faq.php';
}
elseif(isset($_GET['home']))
{
	require 'index.php';
}
elseif(isset($_GET['val']))
{
	$r=$_GET['val'];
	require 'post.php';
}


elseif(isset($_GET['question']))
{
	$_SESSION['qid']=$_GET['question'];
	require 'question.php';
}


elseif (isset($_POST['resetpass'])) {


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
		$mail->Username ="donthulavikas1999@gmail.com";
						//Password to use for SMTP authentication
						$mail->Password = "16021999";
//Set who the message is to be sent from

$mail->setFrom('donthulavikas.com', 'hellot');
//Set an alternative reply-to address
//Set who the message is to be sent to
$rec=$_POST["email"];
echo $rec;
$mail->addAddress($rec, 'John Doe');
//Set the subject line
$h=$_POST['heading'];
$mail->Subject = $h;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body = "http://localhost/internship-project/resetpass.php?token=123
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


?>
