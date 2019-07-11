<?php
include 'header.php';
?>
<div class=" mt-3 col-lg-12 well ">

		<?php while($row=mysqli_fetch_array($res)){
		?>
			  <div class=" col-lg-4 mt-3">
			  	<img src="https://img.icons8.com/dusk/64/000000/categorize.png">
			  	<ul>
			  	<?php echo $row['name']; 
			  	$v1=$row['name'];
			  	$v=substr($v1,0,5);
			  	echo '<br>';
			
			  	 echo $row['date'];?>
			  	</ul>
			  	 <a href="<?php echo $row['name']; ?>" download>Download</a>
			  	</div>
	<?php }?>
	</div>
</body>

</html>