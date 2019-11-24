<?php 
	include 'header.php';
	$uid=$_SESSION['id'];
	$data="SELECT * FROM user WHERE uid='$uid'";
	$res=mysqli_query($con,$data);
	$row=mysqli_fetch_array($res);
?>
<style>
	.menu
	{
		color:white;
	}
	.question_of_list
	{
		text-transform:capitalize;
		font-size:28px;
	}
	.menu_nav
	{
		font-family:Bahnschrift Light;
	}
</style>
<title>Profile | <?php echo $row['name'];?></title>
<body>
<div class="container-fluid">
	<div class="media">
		<div class="media-left">
			<img src="images/user.png" class="profile_image">
		</div>
		<div class="media-body">
			<h2 style="text-transform:capitalize"><strong><?php echo $row['name'];?></strong></h2>
			<h4 style="text-transform:capitalize"><?php echo $row['role'];?></h4>
		</div>
		<div class="row container-fluid" style="margin-left:90px">
				<div class="col-lg-2">
					<a href="db.php?name=questions" class="menu_nav" style="text-decoration:none"><h3>QUESTIONS</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=community" class="menu_nav" style="text-decoration:none"><h3>COMMUNITY</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=mynotes" class="menu_nav" style="text-decoration:none"><h3>MY NOTES</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=followers" class="menu_nav" style="text-decoration:none"><h3>FOLLOWERS</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=following" class="menu_nav" style="text-decoration:none"><h3>FOLLOWING</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=trends" class="menu_nav" style="text-decoration:none"><h3>TRENDS</h3></a>
				</div>
			</div>
	</div>
	<hr>
	<!--<button class="profile_button btn btn-info">Change</button>-->
</div>
<br><br><br><br>
</div>
<?php
if(isset($_SESSION['name']))
{
	$page=$_SESSION['name'];
	if($page=='questions')
	{
		$user=$row['uid'];
		echo '<div class="container" style="background-color:#ffffff">';
			$sql="SELECT * FROM questions WHERE uid='$user'";
			$resq=mysqli_query($con,$sql);
			echo '<h1 style="text-align:center">MY QUESTIONS</h1>'.'<hr>';
			while($rowd=mysqli_fetch_array($resq))
			{
				echo '<div class="col-lg-12 col-md-3">';
					echo '<a href="http://localhost/internship-project/db.php?question='.$rowd['qid'].'" style="text-decoration:none">'.'<strong class="question_of_list">'.$rowd['question'].'</strong>'.'</a>'.'<br>';
					echo '<div style="text-transform:capitalize">'.'Category :'.$rowd['qcat'].'</div>'.'<br>';
					echo '<i class="fa fa-eye">683</i>'.'<i class="fa fa-thumbs-up"> 987 </i>'.'<i class="fa fa-thumbs-down"> 10 </i>';
					echo '<br>'.'<hr>';
				echo '</div>'.'<br>'.'<br>';
			}
		echo '</div>';
	}
	elseif($page=='community')
	{
		$uid=$_SESSION['id'];
		$users="SELECT * FROM user WHERE uid!=$uid";
		$res=mysqli_query($con,$users);
		echo '<h4 style="text-align:center">DISCOVER PEOPLE AROUND YOU</h4>';
		while($row=mysqli_fetch_array($res))
		{
		?>
			<div class="media container col-lg-4">
				<hr>
				<div class="media-left">
					<img src="<?php echo $row['profile_image'];?>" style="height:120px; width:120px">
				</div>
				<div class="media-body">
					<h3><strong><?php echo $row['name'];?></strong></h3>
					<h5 style="text-transform:capitalize"><?php echo $row['role'];?></h5>
				</div>
				<div class="media-right">
					<br>
					<a href="#" type="submit" class="btn btn-info" style="float:right" title="Follow <?php echo $row['name'];?>">Follow</a>
				</div>
			</div>
		<?php
		}
		echo '<br><br><br><br><br>';
	}
	elseif($page=='mynotes')
	{
		$t=$_SESSION['id'];
		$qu="SELECT * FROM files where uid=$t";
		$fire=mysqli_query($con,$qu);
		echo '<div class="container-fluid">';
		foreach($fire as $row)
		{
			?>
				<div class="col-lg-4 well ">
					<h4><strong>File Id   :</strong><?php echo $row['id'];?></h4>
					<!--<h4><strong>File Name  :</strong><?php echo $row['name'];?></h4>-->
					<h4><strong>Uploaded on   :</strong><?php echo $row['date'];?></h4>
					<h4><strong>Type   :</strong><?php echo $row['type'];?></h4>
					<h4><strong>Category  :</strong><?php echo $row['category'];?></h4> 
					<h4><strong>Year  :</strong><?php echo $row['ys'];?></h4>
					<h4><strong>Branch  :</strong><?php echo $row['branch'];?></h4>  
				</div>
			<?php
		}
		echo '</div>';
	}
}
?>
</body>

<br><br><br><br><br>

<?php
	include 'footer.php';
?>

</html>
