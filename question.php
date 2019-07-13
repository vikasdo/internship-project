<?php
	include 'header.php';
?>
<?php
	$qid=$_SESSION['qid'];
	$sql="SELECT * FROM questions WHERE qid=$qid";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($res);
	$question=$row['question'];
	$user=$row['questionedby'];
	$qcat=$row['qcat'];
?>
<title><?php echo $qcat.' | '.$question;?></title>
	<body style="background-color:#f8f8f9">
		<div class="container-fluid"  style="background-color:white">
			<h1 class="text-center question"><?php echo $question;?></h1>
			<h4 class="text-right"><a href="#" style="text-decoration:none; color:#8a2be2"><i class="fa fa-user" style="color:grey"></i> <?php echo $user;?></a>
			<a href="#" style="text-decoration:none; color:#8a2be2"><i class="fa fa-tag" style="color:grey"></i> <?php echo $qcat;?></a></h4>
		</div>
		<br>
		<?php
			$sql="SELECT * FROM faq_comments";
			$res=mysqli_query($con,$sql);
			$rows=mysqli_num_rows($res);
			if($rows==0)
			{
				echo '<img src="images/ale.png">';
			}
			else
			{
				echo '<div class="well container">';
				echo '<form class="form-vertical col-lg-8" action="db.php?answer='.$row['qid'].'">';
				echo '<h2 style="font-family:Bahnschrift Light; color:#8a2be2">Have an answer?</h2>';
				echo '<textarea class="col-lg-8 form-control" style="resize:none; height:300px"></textarea>';
				echo '<a href="db.php?answer='.$row['qid'].'" class="btn btn_web form-control" style="margin-top:15px">Post My Answer</a>';
				echo '</form>';
				echo '</div>';
			}
		?>
	</body>
<?php
include 'footer.php';
?>
</html>
