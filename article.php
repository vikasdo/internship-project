<?php include 'header.php'?>
<html lang="en">
<head>

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
 .bd
{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("images/bgimg.png");
	width: 100%;
	height:70vh;
	
	background-size: cover;
		background-position: center;
}
.title
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1
{
	color:#FFF;
	font-size:70px;
}
p
{
	font-family: "Noto Serif","Times New Roman";
}
.x
{
	padding-right: 10px;
}

</style>
</head>
<body>
		<?php
	$qu="SELECT * FROM articles";
	$fire=mysqli_query($con,$qu);
?>

	<div class="bd">
		<div class="title"> 

		<h1><strong><?php $y=isset($_GET['val'])?$_GET['val']:'ARTICLES'; echo $y; ?></strong></h1>

		</div> 

	</div>
<br><br><br><br><br>
<div class="col-lg-6 col-lg-offset-3">
<?php
foreach($fire as $row )
{?>
			<br>
		<section>
	<div class="col-lg-3 col-sm-6">	<h4>Category  :                         </h4></div>
	<div class="col-lg-3 col-sm-6 col-lg-offset-6"> <input type="submit"  class="btn btn-sm" value="<?php	echo $row['category'];?>"></div>
<br><br>
<h1><strong><?php echo $row['head'];?></strong></h1>
<br>
<div class="col-lg-6 "><span class="glyphicon glyphicon-user "><strong><?php echo $row['posted'];?></strong></span></div><div class="col-lg-3"><strong><?php echo $row['date'];?></strong></div>
<br><br>
<p class="text-justify">
<?php echo $row['description'];?>
</p>
<br>
<a href="db.php?val=<?php echo $row['aid'];?>" class="btn btn-lg">Read More</a>



</section>
<hr>
<br>
<?php
}
?>
</div>

</body>
</html>