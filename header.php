<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\college\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\college\css\bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
.cont
{
	background-image:url(images/footer.jpg);
	background-size:cover;
	background-position:center;
}
.results_list
{
	text-decoration:none;
	font-size:25px;
	color:black;
}
.question
{
	color:#8a2be2;
	font-size:50px;
	font-family:Bahnschrift Light;
}
.text
{
	color:white;
	font-family:Bahnschrift Light;
}
.text_faq
{
	color:black;
	font-family:Bahnschrift Light;
}
.subscribe
{
	padding-top:30px;
}
#news
{
	font-family:Bahnschrift Light;
	text-align:center;
	font-size:15px;
	color:#ffffff;
}
.icon
{
	font-size:24px;
	padding-right:10px;
}
.btn_web
{
	border-radius:30px;	
	background-color:#8a2be2;
	color:white;
}
.btn_web:hover
{
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
	height:350px;
	width:600px;
}
.team
{
	height:90px;
	width:150px;
}
.home_p
{
	font-size:60px;
}
.navbar
{
		background-color:#8a2be2;
}
.navbar-brand
{
	color:white;
	font-size:30px;
	padding-right:70px;
}
.nav.navbar-nav a
{
	font-size:17px;
	color:white;
}
.nav.navbar-nav a:hover
{
	display:block;
	transition:ease 0.8s;
	color:#8a2be2;
	border-radius:30px;
}
#btn1
{
	background-color:white;
	color:#8a2be2;
	border-radius:0px;
	height:34px;
}
.keyword
{
	border-radius:40px;
}
.list
{
	list-style-type:none;
}
.faq
{
	font-family:Calibri Light;
	color:#8a2be2;
	font-size:35px;
	opacity:0.8;
}
.faq_list
{
	text-decoration:none;
	font-size:20px;
	color:black;
}
.active #c
{
	color:#8a2be2;
}
.active
{
	border-radius: 30px;
	background-color: white;
	color:#8a2be2;
}

</style>
<body>
	<nav class="navbar">
	  <div class="container-fluid">
		<br>
		<div class="navbar-header">
		  <p class="navbar-brand">WebSiteName</p>
		</div>
		<ul class="nav navbar-nav">
		<li class="<?php $t=isset($_GET['home'])?'active':''; echo $t;?>"><a href="db.php?home=1" id='c'>Home</a></li>
		  <li class="<?php $t=isset($_GET['faq'])?'active':''; echo $t;?>"><a href="db.php?faq=1" id='c'>FAQ'S</a></li>
		  <li class="<?php $t=isset($_GET['a'])?'active':''; echo $t;?>"><a href="db.php?a=1" id='c'>Articles</a></li>
		  <li class="<?php $t=isset($_GET['notes'])?'active right':'right'; echo $t;?>"><a href="db.php?notes=1" id="c">Notes</a></li>
</ul>
		<div class="nav navbar-right">
		<form class="navbar-form" action="" method="">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" required>
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit" id="btn1">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
			</div>
		</form>
		</div>
	  </div>
	</nav>
</body>