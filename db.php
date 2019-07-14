<?php
session_start();
$con=mysqli_connect('localhost','root','','uploadf');

$_SESSION['id']=10;

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
						include 'phpmail.php';
						$rec=$_POST["toemail"];
						echo $rec;
						$mail->addAddress($rec, 'John Doe');
						//Set the subject line
						$h=$_POST['heading'];
						$mail->Subject = $h;
						$body = "http://localhost/uploadingtodrive/resetpass.php?token=123
						";
				
						$mail->Body  = file_get_contents("index.php");
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
include 'phpmail.php';
						$rec=$_POST["emails"];
						$mail->addAddress($rec, 'user');
						//Set the subject line
						$h='Hello User';


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
							$_SESSION['subscribe']=$rec;
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
elseif(isset($_GET['sv']))
{

$es=$_GET['sv'];
$ta=$_POST['abc'];
$query="INSERT INTO comments(uid,comment,aid) VALUES(17,'$ta',$es)";
$tire=mysqli_query($con,$query);
		if($tire)
		{
		header('Location:db.php?val='.$es);
		exit;
		}

}

elseif (isset($_POST['resetpass'])) {


				require 'PHPMailer /PHPMailerAutoload.php';
				include 'phpmail.php';
				$rec=$_POST["email"];
				$str="h12asq";
				$str1=str_shuffle($str);
				echo $str1;
				$token=$str1;
				$mail->addAddress($rec, 'weteam');

				$h='Please reset your password through the link';
				$mail->Subject = $h;
				
			    $mail->Body=' <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="background-image: url("images/secure.png");">
	<h1>You will be directed to Reset password Page</h1>

	<br> to change password<br>
</div>
</body>
</html>'.'Please click this link: http://localhost/internship-project/resetpass.php?token='.$token.'&email='.$rec;
				//Replace the plain text body with one created manually
				$mail->AltBody = 'This is a plain-text message body';
				if (!$mail->send())
						 {
						    echo "Mailer Error: " . $mail->ErrorInfo;
						 }
				  else 
						  {
                             $sql="update user set token='$token' where email='$rec';";
                             $res=mysqli_query($con,$sql);
							header("location:index.php?msg=we have a sent an email to you plese check it to verify");
						    
						  }

}


elseif(isset($_POST['login']))
{
	
  $email=$_POST['email'];
  $password=$_POST['pass'];
   
    
				  if(!empty($email)&&!empty($password))
				  {
				   $sql="select * from user where email='$email'";
				   $res=mysqli_query($con,$sql);
				    $row=mysqli_fetch_array($res);
				    $eml=$row['email'];
				     if($eml==$email)
				     {
				      $sql="select * from user where email='$email' AND password='$password'";
				      $res=mysqli_query($con,$sql);
				      
				       $row=mysqli_fetch_array($res);
				       $pas=$row['password'];
							       if($pas==$password)
							       {
							         $_SESSION['id']=$row['uid'];
							        $_SESSION["email"]=$eml;
							header('location:index.php?msg=Success');

							      }
							       else
							       {
							header('location:index.php?msg=Incorrect Password');
							       }

				        }
				     else
				     {
				header('location:index.php?msg=Incorrect Email');
				     }
				  }
				  else{
				     if(empty($email)){
				      header('location:index.php?msg=Dont leave email field empty');
				    }
				   elseif(empty($password)){
				header('location:index.php?msg=Dont leave password field empty');
				  }else{

				       header('location:index.php?msg=Dont leave all fields empty');
				}
				}
				}

elseif(isset($_POST['signup']))
{
	$email=$_POST['email'];
	$sql="SELECT * FROM user WHERE email='$email'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)==0)
		echo 'You are successfully signed up';
	else
		header("Location:index.php?msg1=Email is already taken!");
}
elseif(isset($_POST['paschng']))
{
	$pas=$_POST['newpassword'];
	$cpas=$_POST['confirmpassword'];
		$email=$_GET['email'];

	$sql1="update user set password='$pas' where email='$email'";
	$res=mysqli_query($con,$sql1);
		echo 'You Have successfully changed up';
}

if(isset($_POST['replyto']))
{
	$replyto=$_GET['replyto'];
	$replyby=$_POST['replyby'];
	$qid=$_POST['qid'];
	echo 'Reply by : '.$replyby;
	echo 'Reply to : '.$replyto;
	echo 'Question : '.$qid;
}





?>
