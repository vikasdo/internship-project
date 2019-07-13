<?php 
$con=mysqli_connect('localhost','root','','uploadf');

include 'header.php'?>
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
.x
{
	padding-right: 10px;
}
.s
{
	color:#8a2be2;
}

.hr
{
border:2px;
}
.article_img
{
	background-image: url("images/articlebg1.jpg");
	background-size: cover;
	background-position: center;
}


</style>
</head>
<body style="background-color: #f8f8f8">
		<?php
		?>
		<?php
	$qu="SELECT * FROM articles";
	$fire=mysqli_query($con,$qu);
?>
	<div class="container-fluid article_img " >
		<h1 class="text-center" style="color:#FFF"><strong><?php $t=isset($_GET['keyword'])?'Showing Results For  "'.$_GET['keyword'].'"':'Articles';
		echo $t;    ?></strong></h1>
		<br>
		<br>
		<form class="form-vertical col-lg-6" action="article.php" method="GET">
			<input type="text" class="form-control keyword col-lg-offset-6" name="keyword" style="height:50px; font-size:25px" placeholder="Search by keyword..." required align="center">
		</form>
		<br><br>
		<br>
		<br>
		<h4 style="color:#FFFF; opacity:0.8" class="text-center">Cant find Your Articles ? Search Here... </h4>
		<br>
		<br>
	</div>
	<br>
<br>
<?php $arr=array('btn-success','btn-danger','btn-primary','btn-info' ,'btn-warning');
	$i=0;
?>
<?php
	if(!isset($_GET['keyword']))
	{

foreach($fire as $row )
{
	$i++;
	if($i==5)
	{
		$i=1;
	}?>
	<div class="col-lg-8 col-lg-offset-2 "style="background-color:white">

			<br>
		<article>
	
<br><br>
<div class="col-lg-3 col-sm-12"><a href="db.php?val=<?php echo $row['aid'];?>" style="text-decoration: none;"><h4><strong><?php echo $row['head'];?></strong></h4></a></div>
<br>
<div class="col-lg-3 col-sm-4"><i class="fa fa-user-circle g" aria-hidden="true"><strong><?php echo $row['posted'];?></strong></i></div>
<div class="col-lg-3 col-sm-4"><strong><i class="fa fa-calendar" aria-hidden="true"><?php echo $row['date'];?></i></strong></div>
<div class="col-lg-3 col-sm-4"><input type="submit"  class="btn btn-sm <?php echo $arr[$i-1] ;?> ff" value="<?php	echo $row['category'];?>"></div>
<br><br>
<hr>
</article>
</div>
<?php
}
}
	else
		{
			$text=$_GET['keyword'];
			$results="SELECT * FROM articles WHERE head LIKE '%$text%' ORDER BY head";
			$result=mysqli_query($con,$results);
			foreach($result as $ww)
			{
									$i++;
					if($i==5)
					{
						$i=1;
}
				$aid=$ww['aid'];
				?>
						<div class="col-lg-8 col-lg-offset-2 "style="background-color:white">

								<br>
							<article>
						
					<br><br>
					<div class="col-lg-3 col-sm-12"><a href="db.php?val=<?php echo $ww['aid'];?>" style="text-decoration: none;"><h4><strong><?php echo $ww['head'];?></strong></h4></a></div>
					<br>
					<div class="col-lg-3 col-sm-4"><i class="fa fa-user-circle g" aria-hidden="true"><strong><?php echo $ww['posted'];?></strong></i></div>
					<div class="col-lg-3 col-sm-4"><strong><i class="fa fa-calendar" aria-hidden="true"><?php echo $ww['date'];?></i></strong></div>
					<div class="col-lg-3 col-sm-4"><input type="submit"  class="btn btn-sm <?php echo $arr[$i-1] ;?> ff" value="<?php	echo $ww['category'];?>"></div>
					<br><br>
					<hr>
					</article>
					</div>			<?php
			}
		}
	


?>
</div>

</body>
</html>