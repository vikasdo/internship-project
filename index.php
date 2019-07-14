<?php
include 'header.php';
?>
<title>We Host</title>
<body>
<div class="container-fluid" style="background-image:url(images/bg.gif); background-size:cover">
<div class="col-lg-8">
<p style="font-size:55px; font-family:Bahnschrift Light; color:black ;padding-top:40px"><strong>Take notes anywhere <br> Find information faster <br> Share ideas with anyone </strong></p>
</div>
<div class="col-lg-3">

<?php

$x=isset($_GET['signup'])?$_GET['signup']:'';
if($x=='1')
{
	if(isset($_GET['msg1']))
	{
		$msg1=$_GET['msg1'];
	}
	else
		$msg1='';
	echo '<h1 class="text-center" style="color:black"><strong>SIGN UP</strong></h1>'.
		  '<h4 class="text-center">'.$msg1.'</h4>'
		 .'<form class="form-vertical" action="db.php" method="post">
				<br>
				<input type="text" class="form-control well1 if" name="name" placeholder="Enter Name" required>
				<br><br>
				<input type="text" class="form-control well1 if" name="email" placeholder="Enter Email" required>
				<br><br>
				<input type="text" class="form-control well1 if" name="mobile" placeholder="Enter Mobile" required>
				<br><br>
				<input type="password" class="form-control well1 if" name="pass" placeholder="Enter Password" required>
				<br>
				<div class="col-lg-6 col-lg-offset-4">
					<input type="submit" class="btn btn_web btn-lg" name="signup" value="Register">
					<br>
					<br>
				</div>
				<div class="col-lg-12">
					<a href="index.php?signup=0" style="text-decoration:none" class="col-lg-offset-3">Already have an account?</a>
				
				</div>
				
				<br><br>
			</form>';
}
elseif(isset($_GET['reset']))
{
	if(isset($_GET['msg']))
		{
			$msg=$_GET['msg'];
		}
		else
			$msg='';
	echo '<h1 class="text-center" style="color:black"><strong>RESET PASSWORD</strong></h1>'.$msg.'
			<form class="form-vertical"  action="db.php" method="post">
				<input type="text" class="form-control well1 if" name="email" placeholder="Enter Email" required>
				<br><br>
				<div class="col-lg-6 col-lg-offset-2 ">
				<input type="submit" class="btn btn_web btn-lg"  align="center" name="resetpass" value="Reset Password">
				</div>
			</form>';
}
else
{
		if(isset($_GET['msg']))
		{
			$msg=$_GET['msg'];
		}
		else
			$msg='';
echo '<h1 class="text-center" style="color:black"><strong>LOGIN</strong></h1>'.
		'<h4 class="text-center">'.$msg.'</h4>'
	 .'<form class="form-vertical" action="db.php" method="post">
	  <br>
		<input type="text" class="form-control well1 if" name="email" title="Email is required" placeholder="Enter Email" required>
		<br><br>
		<input type="password" class="form-control well1 if" name="pass" title="Password is required" placeholder="Enter Password" required>
		<br>
		<div class="col-lg-6 col-lg-offset-4">
			<input type="submit" class="btn btn_web btn-lg" name="login" value="Login">
			<br>
			<br>
		</div>
		<div class="col-lg-12">
			<a href="index.php?reset=1" style="text-decoration:none" class="col-lg-offset-3 text-center">Forgot password?</a>
		</div>
		<br><br>
	  </form>';
}
?>
</div>
</div>
<br>
<br>
<br>
<!--<h1 class="text-center c"><strong>Features</strong></h1>
<hr>-->
<div class="container">
	<div class="col-lg-5">
		<img src="images/access.png" class="img-responsive img-rounded gif">
	</div>
	<div class="col-lg-6">
		<p class="text-center home_p"><strong>"Get the required content anywhere, anytime!"</strong></p>
	</div>
</div>
<hr>
<div class="container">
	<div class="col-lg-6">
		<p class="text-center home_p" style="color:purple"><strong>"Cloud based storage for easy access"</strong></p>
	</div>
	<div class="col-lg-5">
		<img src="images/cs.jpg" class="img-responsive img-rounded gif">
	</div>
</div>
<hr>
<div class="container">
	<div class="col-lg-5">
		<img src="images/discuss.png" class="img-responsive img-rounded gif">
	</div>
	<div class="col-lg-6">
		<p class="text-center home_p" style="color:brown"><strong>"Share your ideas with people across world"</strong></p>
	</div>
</div>
<hr>
<div class="container">
	<div class="col-lg-6">
		<p class="text-center home_p" style="color:grey"><strong>"Your data is safe with us"</strong></p>
	</div>
	<div class="col-lg-5">
		<img src="images/secure.png" class="img-responsive img-rounded gif">
	</div>
</div>
<hr>
<div class="container">
	<div class="col-lg-5">
		<img src="images/technical.jpg" class="img-responsive img-rounded gif">
	</div>
	<div class="col-lg-6">
		<p class="text-center home_p" style="color:darkgreen"><strong>"Don't worry ,our support is online 24x7"</strong></p>
	</div>
</div>
<br>
<br>
<!--footer-->
<?php
include 'footer.php';
?>

</body>
</html>