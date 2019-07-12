<?php include 'header.php';
$qu="SELECT * FROM articles where aid=$r";
$exe=mysqli_query($con,$qu);
$fire=mysqli_fetch_array($exe);
$s="SELECT * FROM articles where category='".$fire['category']."' and aid !=$r";
$er=mysqli_query($con,$s);
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
h1,h4,h2,h3
{
	color: #8a2be2;
}
.x
{
	padding-right: 10px;
}
.cx
{
	width:600px;
	height:300px;
}
.d
{
	width: 100px;
	height: 100px;
}
.aa
{
	width: 50px;
	height: 50px;
}
</style>
</head>
<body style="background-color: #f8f8f8">
	<br><br>



<div class="col-lg-6 col-lg-offset-1" style="background-color: #ffff">
	<img src="<?php echo $fire['articleimg'];?>" class="img-responsive img-rounded cx">
	<br><br>
	<section>
	<h1 class="text-center"><strong><?php echo $fire['head'];?></strong></h1>
	<br>
	<h4 style="font-family: cursive;"><p><strong><span class="glyphicon glyphicon-tags"></span></strong> <?php echo $fire['category'];?></p></h4>
	<br><br>
	<p class="text-justify"><?php echo $fire['description'];?></p>

	<br><br>
	<h2><strong><span class="glyphicon glyphicon-comment"></span>    Leave your Comment....</strong></h2>
	<br>
	<form class="form-group" method="POST" action="">
		<textarea class="form-control" rows="4" placeholder="Write Something...." name="tarea" > 	</textarea>
<br>
<a href="#" class="btn btn-lg">Comment</a>


	</form>

</section>

	</div>
	<div class="col-lg-4 " style="background-color:#fff; margin-left:10px">
<blockquote><h3>Related Posts :</h3></blockquote>
<br>
<?php 
foreach($er as $row)
{?>
<div class="col-lg-12">

<div class="col-lg-2">
	<img src="<?php echo $row['articleimg'];?>" class="img-responsive img-circle aa">
</div>
<div class="col-lg-8">
	<a href="db.php?val=<?php echo $row['aid']; ?>"><h5 ><?php echo $row['head']?></h5></a>

</div>

</div>
<br><hr>
<?php
}
?>
</div>


	</div>
</div>
<br>
<div class="col-lg-12">
<?php include 'footer.php';?>
</div>
</body>
</html>