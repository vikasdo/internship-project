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
			<h4 class="text-right"><?php echo 'Questioned by'.' '.'<a href="#" style="text-decoration:none; color:#8a2be2">'.$user.'</a>'.' | '.'Category:'.' '.'<a href="#" style="text-decoration:none; color:#8a2be2">'.$qcat.'</a>';?></h4>
		</div>
	</body>
</html>
