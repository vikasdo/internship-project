<?php include 'header.php';
$qu="SELECT * FROM articles where aid=$r";
$exe=mysqli_query($con,$qu);
$fire=mysqli_fetch_array($exe);


?>
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
.cx
{
	width:900px;
	height:300px;
}

</style>
</head>
<body>
	<br><br>
<div class="col-lg-3 bg-success">
	<!-- Profile -->islfsldjszdg
</div>
<div class="col-lg-6 col-lg-offset-1 bg-primary">
	<img src="<?php echo $fire['articleimg'];?>" class="img-responsive thumbnail cx">
	</div>






</div>















</body>
</html>