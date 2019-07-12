<?php
$con=mysqli_connect('localhost','root','','uploadf');

include 'header.php';
?>


<title>FAQ</title>
<body style="background-color:#f8f8f9">
<div class="container-fluid" style="background-color:white">
<h1 class="text-center text_faq">Learn from the community!</h1>
<br>
<br>
<form class="form-vertical col-lg-6" action="" method="get">
<input type="text" class="form-control keyword col-lg-offset-6" name="keyword" style="height:50px; font-size:25px" placeholder="Search by keyword" required align="center">
</form>
<br>
<br>
<br>
<br>
<h4 style="color:#8a2be2; opacity:0.8" class="text-center">You can also browse the topics below to find what you are looking for.</h4>
<br>
<br>
</div>
<br>
<div class="container" style="background-color:white">
<h2 style="font-family:Calibri Light; font-size:35px; opacity:0.7">Frequently Asked Questions</h2>

<?php
$sql="SELECT distinct qcat FROM questions";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
	?>
		<div class="col-lg-4">
			<ul class="list">
				<h3 class="faq"><?php echo $row['qcat'];?></h3>
					<?php
					$qcat=$row['qcat'];
					$data="SELECT * FROM questions WHERE qcat='$qcat'";
					$res1=mysqli_query($con,$data);
					while($rowq=mysqli_fetch_array($res1))
					{
						?>
						<li><a class="faq_list" style="text-decoration:none" href="db.php?question=<?php echo $rowq['qid'];?>"><?php echo $rowq['question'];?></a></li>
						<?php
					}
					?>
			</ul>
		</div>
	<?php
}
?>

</div>
<hr>
<?php
if(isset($_GET['keyword']))
{
	$text=$_GET['keyword'];
	$results="SELECT * FROM questions WHERE question LIKE '%$text%'";
	$res=mysqli_query($con,$results);
	while($row=mysqli_fetch_array($res))
	{
		echo $row['question'];
	}
}
?>
</body>
</html>