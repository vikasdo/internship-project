<?php
	include 'header.php';
?>
<?php
	$qid=$_SESSION['qid'];
	$sql="SELECT * FROM questions WHERE qid=$qid";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($res);
	$question=$row['question'];
	$user=$row['uid'];
	$qcat=$row['qcat'];
	$userdata="SELECT * FROM user WHERE uid=$user";
	$res5=mysqli_query($con,$userdata);
	$username=mysqli_fetch_array($res5);
?>
<title><?php echo $qcat.' | '.$question;?></title>
	<body style="background-color:#f8f8f9">
		<div class="container-fluid"  style="background-color:white">
			<h1 class="text-center question"><?php echo $question;?></h1>
			<h4 class="text-right"><a href="#" style="text-decoration:none; color:#8a2be2"><i class="fa fa-user-circle-o" style="color:grey"></i> <?php echo $username['name'];?></a>
			<a href="#" style="text-decoration:none; color:#8a2be2"><i class="fa fa-list-alt" style="color:grey"></i> <?php echo $qcat;?></a></h4>
		</div>
		<br>
		<?php
			$sql="SELECT * FROM faq_comments WHERE qid='$qid'";
			$res=mysqli_query($con,$sql);
			$rows=mysqli_num_rows($res);
			$qid=$row['qid'];
			$data="SELECT * FROM user INNER JOIN faq_comments ON user.uid=faq_comments.uid and faq_comments.qid='$qid'";
			$res1=mysqli_query($con,$data);
			if($rows==0)
			{
					echo '<div style="float:center" class="col-lg-9">';
					echo '<br>'.'<br>'.'<br>'.'<br>';
					echo '<img class="answer_list_empty" src="images/ale.png">';
					echo '<h2 style="font-family:Bahnschrift Light; opacity:0.6" class="text-center">There are no replies to this question,be the first to answer.</h2>';
					echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>';
					echo '<form class="form-vertical col-lg-8" action="db.php?answer_submit='.$row['qid'].'" method="post">';
						echo '<h2 style="font-family:Bahnschrift Light; color:#8a2be2">Have an answer?</h2>';
						echo '<textarea name="answer" class="col-lg-8 form-control" style="resize:none; height:300px" required></textarea>';
						echo '<button name="answer_submit" class="btn btn_web form-control" style="margin-top:15px">Post My Answer</button>';
					echo '</form>';
				echo '</div>';
			}
			else
			{
				echo '<div style="float:left; margin-left:20px">';
					echo '<div class="answer">';
					while($rowd=mysqli_fetch_array($res1))
					{
						echo '<br>';
						echo '<div class="container media">';
								echo '<div class="media-left">';
									echo '<img style="margin-right:3px" class="answer_img img-circle" src="'.$rowd['profile_image'].'">';
								echo '</div>';
								echo '<div class="media-body">';
									echo '<h3 class="mt-0">'.$rowd['name'].'</h3>';
									echo '<i class="fa fa-calendar">'.'&nbsp&nbsp&nbsp'.$rowd['date'].'</i>';
									echo '<p class="answer_p">'.$rowd['answer'].'</p>';
									echo '<form class="form-vertical col-lg-10 col-md-2" action="db.php?replyto='.$rowd['uid'].'" method="post" style="float:right; margin-right:10px">';
										echo '<textarea class="form-control reply_box" name="reply" required></textarea>';
										echo '<br>';
										if(isset($_SESSION['id']))
										{
											echo '<input type="text" class="hidden" name="replyby" value="'.$_SESSION['id'].'">';
										}
										echo '<input type="text" class="hidden" name="qid" value="'.$row['qid'].'">';
										echo '<button name="replyto" class="btn btn_web col-lg-1" style="float:right">Reply</button>'; 
									echo '</form>';
								echo '</div>';
						echo '</div>';
						echo '<hr>';
					}
					echo '</div>';
					echo '<form class="form-vertical col-lg-8" action="db.php?answer_submit='.$row['qid'].'" method="post">';
						echo '<h2 style="font-family:Bahnschrift Light; color:#8a2be2">Have an answer?</h2>';
						echo '<textarea name="answer" class="col-lg-8 form-control" style="resize:none; height:300px" required></textarea>';
						echo '<button name="answer_submit" class="btn btn_web form-control" style="margin-top:15px">Post My Answer</button>';
					echo '</form>';
				echo '</div>';
			}
		?>
		<div style="float:left; margin-left:30px">
			<?php
				$sql="SELECT * FROM questions WHERE qcat='$qcat' and qid!='$qid'";
				$res=mysqli_query($con,$sql);
				echo '<h2>'.'More from '.$qcat.'</h2>';
				echo '<hr>';
				while($row_faq=mysqli_fetch_array($res))
				{
					echo '<a href="http://localhost/internship-project/db.php?question='.$row_faq['qid'].'"'.'style="color:#8a2be2">'.'<h4>'.'<i class="fa fa-circle-o"></i> '.$row_faq['question'].'</h4>'.'</a>';
				}
			?>
		</div>
	</body>
	<br><br><br><br>
<?php
echo '<div style="float:left; margin-top:30px">';
include 'footer.php';
echo '</div>';
?>
</html>
