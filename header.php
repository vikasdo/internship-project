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
	<link rel="icon" type="png/jpg" href="images/webicon.png">
</head>
<style>
.answer_list_empty 
{
    display:block;
    margin-left:auto;
    margin-right:auto;
	heigth:500px;
	width:470px;
}
.answer
{
	background-color:white;
}
.answer_p
{
	font-size:15px;
	text-align:justify;
	margin-right:30px;
	font-family:Bahnschrift Light;
}
.answer_img
{
	heigth:100px;
	width:100px;
}
.footer_list
{
	text-align:center;
}	
.footer_list a
{
	font-family:Bahnschrift Light;
	color:#000000;
	text-decoration:none;
}
.contact
{
	display:block;
    margin-left:auto;
    margin-right:auto;
}
.ti
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

<!-- This class is written for getting button on profile image on hover
.profile_img_prop
{
	height:250px;
	width:250px;
	background-color:#8a2be2;
	margin-top:auto;
	margin-left:auto;
	margin-right:auto;
}-->

.profile_image
{
	display:block;
	margin-top:auto;
	margin-left:auto 30px;
	margin-right:auto;
	height:150px;
	width:150px;
}
.profile_button
{
	margin-top:auto;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:auto;
}

<!--to be put under test
.side_list
{
	position:fixed;
	top:auto;
	margin-left:1220px; 
}-->

.faq_image
{
	background-image:url(images/faq_back.png);
	background-size:cover;
	background-position:center;
}
.article_img
{
	background-image:url(images/articlebg.jpg);
	background-size:cover;
	background-position:center;

}
.cont
{
	background-color:#e6e6e6;
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
	color:black;
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
	color:#000000;
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
.c
{
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
.profile_cover
{
	background-image:url(images/profile_cover.jpg);
	background-position:fit;
	background-size:cover;
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
	border-radius:30px;
	background-color:white;
	color:#8a2be2;
}
.ques
{
	transition:transform .2s;
}
.ques a i
{
	color:black;
	transition:transform .2s;
}
.ques:hover
{
	color:#8a2be2;
	transform:scale(1.1);
}
.ques a:hover
{
	color:#8a2be2;
}
.reply_box
{
	resize:none;
}
</style>
<body>
	<nav class="navbar">
	  <div class="container-fluid">
		<div class="navbar-brand navbar-header">
			<?php
				if(isset($_SESSION['id']))
				{
			        echo '<div id="main">
						<span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776; </span>';
						if($_SESSION['role']=='admin')
						{
						include 'admin_header.php';
				    	}
				    	elseif($_SESSION['role']=='teacher')
				    	{
				    		include 'mem_head.php';
				    	}
				    	else
				    	{
				    		include 'stud_header.php';
				    	}
				    echo'</div>';
				}
			?>
		</div>
		<br>
		<div class="navbar-header">
			<p class="navbar-brand">NotesVerse</p>
		</div>
		<ul class="nav navbar-nav">
		  <li class="<?php $t=isset($_GET['home'])?'active':''; echo $t;?>"><a href="db.php?home=1" id='c'>Home</a></li>
		  <li class="<?php $t=isset($_GET['a'])?'active':''; echo $t;?>"><a href="db.php?a=1" id='c'>Articles</a></li>
		  <li class="<?php $t=isset($_GET['notes'])?'active right':'right'; echo $t;?>"><a href="db.php?notes=1" id="c">Notes</a></li>
		  <li class="<?php $t=isset($_GET['faq'])?'active':''; echo $t;?>"><a href="db.php?faq=1" id='c'>FAQ'S</a></li> 
		  
		  <?php
		  if(!isset($_SESSION['id']))
		  {
		  
		  $t=isset($_GET['signup'])?'active':'';
		  echo '<li class="'. $t.'"><a href="index.php?signup=1" id="c">Sign Up</a></li>';	
		  }
			
			else
			{
			//display none
			}
			?>		
		</ul>
	  </div>
	</nav>
</body>