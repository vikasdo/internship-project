<html lang="en">
<head>
<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\college\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\college\css\bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
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
}
#btn1
{
background-color:white;
color:#8a2be2;
border-radius:0px;
height:34px;
}

.active #c
{
		color:#8a2be2;
			background-color: white;
}
#search
{
	margin-left:300px;
	width:300px;
}
</style>
<body>
	<nav class="navbar navbar-sticky">
	  <div class="container-fluid">
		<br>
		<div class="navbar-header">
		  <p class="navbar-brand">WebSiteName</p>
		</div>
		<ul class="nav navbar-nav">
		  <li class="<?php $t=isset($_GET['home'])?'active':''; echo $t;?>" ><a href="db.php?home=1" id="c">Home</a></li>
		  <li class="<?php $t=isset($_GET['faq'])?'active':''; echo $t;?>"  ><a href="db.php?faq=1" id="c">FAQ'S</a></li>
		  <li class="<?php $t=isset($_GET['article'])?'active':''; echo $t;?>"><a href="db.php?article=1" id="c">Articles</a></li>
		  <li class="<?php $t=isset($_GET['page'])?'active':''; echo $t;?>" ><a href="db.php?page=1"  id="right">Notes</a></li>
		</ul>
		<form class="navbar-form navbar-left" action="/action_page.php">
			<div class="input-group">
				<input type="text" id="search" class="form-control" placeholder="Search">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit" id="btn1">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
			</div>
		</form>
	  </div>
	</nav>
</body>
</html>