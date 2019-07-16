<?php 

include 'header.php';

?>

<title>Profile</title>

<body>

<div class="container-fluid faq_image">

<img src="images/user.png" class="profile_image">


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</div>

<br>
<div class="well container">

<?php
$sql="SELECT * FROM questions WHERE questionedby='hello'";
$res=mysqli_query($con,$sql);

echo '<h1 style="text-align:center">My Questions</h1>';
while($row=mysqli_fetch_array($res))
{
	echo '<div class="well ques bg-info">';
	echo $row['question'].'  ';
	echo $row['qcat'];
	echo '<br>';
	echo '</div>';
}
?>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

<?php

include 'footer.php';

?>

</html>
