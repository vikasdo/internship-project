<?php include 'header.php'?>
<html lang="en">
<head>

<style>
.c{
	font-size:50px;
	color:#8a2be2;
}
.ff
{
	border-radius: 20px;

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
p
{
	font-family: "Noto Serif","Times New Roman";
}
.x
{
	padding-right: 10px;
}
.s
{
	color:#8a2be2;
}
.col-lg-3 .g{
	margin-right: 10px;
}

</style>
</head>
<body>
		<?php
	$qu="SELECT * FROM articles";
	$fire=mysqli_query($con,$qu);
?>
<div class=" fg">
	<div class="col-lg-12 s">
		
		<h1 class="text-center"><strong>ARTICLES</strong></h1>
	</div>

	<div class="col-lg-6 col-lg-offset-3">
		<img src="images/listempty.png" class="img-rounded img-responsive ">
	</div>

</div>
<br>
<div class="col-lg-6 col-lg-offset-3">
<?php $arr=array('btn-success','btn-danger','btn-primary','btn-info' ,'btn-warning');
	$i=0;
?>
<?php
foreach($fire as $row )
{
	$i++;
	if($i==5)
	{
		$i=1;
	}
	?>
			<br>
		<article>
	
<br><br>
<a href="db.php?val=<?php echo $row['aid'];?>" style="text-decoration: none;"><h1><strong><?php echo $row['head'];?></strong></h1></a>
<br>
<div class="col-lg-3 "><i class="fa fa-user-circle g" aria-hidden="true"><strong><?php echo $row['posted'];?></strong></i></div><div class="col-lg-4"><strong><i class="fa fa-calendar" aria-hidden="true"><?php echo $row['date'];?></i></strong></div>
<div class="col-lg-5"><input type="submit"  class="btn btn-sm <?php echo $arr[$i-1] ;?> ff" value="<?php	echo $row['category'];?>"></div>
<br><br>
<hr>
</article>

<?php
}
?>
</div>

</body>
</html>