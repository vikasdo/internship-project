<head>
<title>We Host</title>
<?php
include 'header.php';
?>
<style>
.btn
{
border-radius:30px;	
background-color:#8a2be2;
color:white;
}
.c{
	font-size:50px;
	color:#8a2be2;
}
.if
{
	border-radius:20px;
}
:-ms-input-placeholder
{
	color:black;
}
.well1
{
	box-shadow:2px 2px  grey;
	
}
.gif
{
	height:200px;
	width:300px;
}
</style>
</head>
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
<br>
<h1 class="text-center c"><strong>Services</strong></h1>
<hr>
<div class="container">
<div class="col-lg-5">
<img src="images/connect.gif" class="img-responsive img-rounded gif">
</div>
<div class="col-lg-6">
<h2>Connect</h2>
<p class="text-justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>
</div>
<hr>
<div class="container">
<div class="col-lg-5">
<img src="images/upload.gif" class="img-responsive img-rounded gif">
</div>
<div class="col-lg-6">
<h2>Upload</h2>
<p class="text-justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>
</div>
<hr>
<div class="container">
<div class="col-lg-5">
<img src="images/discussion.gif" class="img-responsive img-rounded gif">
</div>
<div class="col-lg-6">
<h2>Discuss</h2>
<p class="text-justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>
</div>
<hr>
</body>
</html>