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
			<div class="media-right row container">
				<div class="col-lg-2">
					<h2>Questions</h2>
				</div>
				<div class="col-lg-2">
					<h2>Community</h2>
				</div>
				<div class="col-lg-2">
					<h2>My Notes</h2>
				</div>
				<div class="col-lg-2">
					<h2>Followers</h2>
				</div>
				<div class="col-lg-2">
					<h2>News</h2>
				</div>
				<div class="col-lg-2">
					<h2>About Us</h2>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<!--<button class="profile_button btn btn-info">Change</button>-->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</div>

<br>

<div class="container-fluid">

<div class="well container-fluid col-lg-2" style="float:right">

<?php

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


?>

</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

<?php

include 'footer.php';

?>

</html>
