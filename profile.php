<?php 

include 'header.php';

$uid=$_SESSION['id'];
$data="SELECT * FROM user WHERE uid='$uid'";
$res=mysqli_query($con,$data);
$row=mysqli_fetch_array($res);

?>

<title>Profile</title>

<body>

<div class="container-fluid profile_cover">

 <br><br>
	<hr>
	<div class="media">
		<div class="media-left">
			<img src="images/user.png" class="profile_image">
		</div>
		<div class="media-body">
			<h2><?php echo $row['name'];?></h2>
			<h4><?php echo $row['role'];?></h4>
			<div class="row container" style="margin-left:20px">
				<div class="col-lg-2">
					<a href="db.php?name=questions"><h3>QUESTIONS</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=community"><h3>COMMUNITY</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=mynotes"><h3>MY NOTES</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=followers"><h3>FOLLOWERS</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=trends"><h3>TRENDS</h3></a>
				</div>
				<div class="col-lg-2">
					<a href="db.php?name=aboutus"><h3>ABOUT US</h3></a>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<!--<button class="profile_button btn btn-info">Change</button>-->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</div>

<?php

if(isset($_SESSION['name']))
{
	$page=$_SESSION['name'];
if($page=='questions')
{
echo '<br>';
echo '<div class="container-fluid">';

echo '<div class="well container-fluid col-lg-2" style="float:right">';



$sql="SELECT * FROM questions WHERE questionedby='hello'";
$res=mysqli_query($con,$sql);

echo '<h2 style="text-align:center">My Questions</h2>';
while($row=mysqli_fetch_array($res))
{
	echo '<div class="well ques col-lg-12 col-md-3">';
		echo '<b style="text-transform:capitalize">'.$row['question'].'</b>'.'<br>';
		echo 'Category: '.'<div style="text-transform:capitalize">'.$row['qcat'].'</div>'.'<br>';
		echo '<a href="#"><i class="fa fa-eye"> 683 </i></a>'.'<i class="fa fa-thumbs-up"> 987 </i>'.'<i class="fa fa-thumbs-down"> 10 </i>';
	echo '</div>';
	echo '<br>';
}


echo '</div>'.'</div>';
}

elseif($page=='community')
{
	echo '<h1 style="text-align:center">COMMUNITY</h1>';
}

elseif($page=='mynotes')
{
	echo '<h1 style="text-align:center">MY NOTES</h1>';
}

elseif($page=='followers')
{
	echo '<h1 style="text-align:center">FOLLOWERS</h1>';
}

elseif($page=='trends')
{
	echo '<h1 style="text-align:center">TRENDS</h1>';
}

elseif($page=='aboutus')
{
	echo '<h1 style="text-align:center">ABOUT US</h1>';
}




}

?>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

<?php

include 'footer.php';

?>

</html>
