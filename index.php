<!doctype HTMl>
<html>
<title>We Host</title>
<?php
include 'header.php';
?>

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
	echo '<h1 class="text-center" style="color:black"><strong>SIGN UP</strong></h1>
			<form class="form-vertical" action="db.php" method="post">
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
					<input type="submit" class="btn btn-lg" name="signup" value="Register">
					<br>
					<br>
				</div>
				<div class="col-lg-12">
					<a href="index.php?signup=0" style="text-decoration:none" class="col-lg-offset-3">Already have an account?</a>
				</div>
				<br><br>
			</form>';
}
else
{
echo '<h1 class="text-center" style="color:black"><strong>LOGIN</strong></h1>
	  <form class="form-vertical" action="db.php" method="post">
	  <br>
		<input type="text" class="form-control well1 if" name="email" placeholder="Enter Email" required>
		<br><br>
		<input type="password" class="form-control well1 if" name="pass" placeholder="Enter Password" required>
		<br>
		<div class="col-lg-6 col-lg-offset-4">
			<input type="submit" class="btn btn-lg" name="login" value="Login">
			<br>
			<br>
		</div>
		<div class="col-lg-12">
			<a href="index.php?signup=1" style="text-decoration:none" class="col-lg-offset-3">Dont have an account?</a>
		</div>
		<br><br>
	  </form>';
}
?>
</div>
</div>
<br><br>
<h1 class="text-center c"><strong>Features</strong></h1>
<hr>
<div class="container">
	<div class="col-lg-5">
		<img src="images/connect.gif" class="img-responsive img-rounded gif">
	</div>
	<div class="col-lg-6">
		<h4 class="text-center home_p"><strong>Get the required content anywhere, anytime!</strong></h4>
	</div>
</div>
<hr>
<div class="container">
	<div class="col-lg-5">
		<h4 class="text-center home_p" style="color:rgb(51, 196, 255 )"><strong>Cloud based storage for easy access</strong></h4>
	</div>
	<div class="col-lg-6">
		<img src="images/upload.gif" class="img-responsive img-rounded gif">
	</div>
</div>
<hr>
<div class="container">
	<div class="col-lg-5">
		<img src="images/discussion.gif" class="img-responsive img-rounded gif">
	</div>
	<div class="col-lg-6">
		<h4 class="text-center home_p" style="color:brown"><blockquote><strong>Share your ideas with people across world</strong></blockquote></h4>
	</div>
</div>
<hr>
<div class="container">
	<div class="col-lg-6">
		<h4 class="text-center home_p" style="color:grey"><blockquote><strong>Your data is safe with us</strong></blockquote></h4>
	</div>
	<div class="col-lg-5">
		<img src="images/lock.gif" style="height: 200px; width:300px;" class="img-responsive img-rounded gif">
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