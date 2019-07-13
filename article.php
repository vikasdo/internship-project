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
<<<<<<< HEAD
<div class=" fg">
	<div class="col-lg-6 col-lg-offset-3">
		<img src="images/listempty.png" class="img-rounded img-responsive ">
	</div>

	<div class="col-lg-12 title">
		
		<h1 class="text-center"><strong>ARTICLES</strong></h1>
		<br>
	</div>
</div>

<div class="col-lg-6 col-lg-offset-3 fg">
<?php
if(mysqli_num_rows($fire)==0)
{
	echo '<img src="images/listempty.png" class-"img-responsive img-rounded"><h2>No Articles to show</h2>';

}

else{
	?>
=======

	<div class="bd">
		<div class="title"> 

		<h1><strong><?php $y=isset($_GET['val'])?$_GET['val']:'ARTICLES'; echo $y; ?></strong></h1>
>>>>>>> 6988e21423fb2a5adc97d86a499c6ea418dd8867

		</div> 

	</div>
<?php } ?>
<br><br><br><br><br>
<div class="col-lg-6 col-lg-offset-3">

<?php
foreach($fire as $row )
{?>
			<br>
		<article>
	<div class="col-lg-3 col-sm-6">	<h4>Category  :                         </h4></div>
	<div class="col-lg-3 col-sm-6 col-lg-offset-6"> <input type="submit"  class="btn btn-sm" value="<?php	echo $row['category'];?>"></div>
<br><br>
<<<<<<< HEAD
<a href="db.php?val=<?php echo $row['aid'];?>" style="text-decoration: none;"><h1><strong><?php echo $row['head'];?></strong></h1></a>
<br>
<div class="col-lg-6 "><span class="glyphicon glyphicon-user "><strong><?php echo $row['posted'];?></strong></span></div><div class="col-lg-3"><strong><?php echo $row['date'];?></strong></div>
=======
<h1><strong><?php echo $row['head'];?></strong></h1>
<br>
<div class="col-lg-6 "><span class="glyphicon glyphicon-user "><strong><?php echo $row['posted'];?></strong></span></div><div class="col-lg-3"><strong><?php echo $row['date'];?></strong></div>
<br><br>
<p class="text-justify">
<?php $k=$row['description']; $str=substr($k,0,300); echo $str;?>
</p>
>>>>>>> 6988e21423fb2a5adc97d86a499c6ea418dd8867
<br>
<a href="db.php?val=<?php echo $row['aid'];?>" class="btn btn-lg">Read More</a>



</article>
<hr>
<br>
<?php
}
?>
</div>

</body>
</html>