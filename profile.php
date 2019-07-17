<?php 

include 'header.php';

?>

<title>Profile</title>

<body>

<div class="container-fluid faq_image ">

<img src="images/user.png" class="profile_image">


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
