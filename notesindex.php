<?php
include 'header.php';
?>
				<!--upload notes-->
	<hr>

		<form class="form-group" action="db.php" method="post" enctype="multipart/form-data">
             	  <div class="form-group ml-3 ">
             	  	<div class="col-lg-6 col-lg-offset-3 ">
             	  	<h2 class="text-center"><mark><img src="https://img.icons8.com/color/48/000000/overview-pages-1.png"><strong> Notes Section</strong></mark></h2>
             	  	<img src="https://img.icons8.com/bubbles/50/000000/bar-chart.png">
		           <label class=""><h4><strong>Category Of Notes:</strong></h4></label>
			        <select name="select             	  	" id="exampleFormControlSelect1" class="form-control">
			          <option >Select Category</option>
			          <option value="studymaterial">studymaterial(ppts)</option>
			          <option value="notes">Notes</option>
			          <option value="assignment">Assignment</option>
			         </select>
			                  <br><br>
			                  <div class="col-lg-6">
			                  <label>Upload Your File</label> 
					   <input type="file" name="filew">
					</div>
				              <br><br><br>
				              <div class="col-lg-6 col-lg-offset-5">
				      					<input type="submit" class="btn btn-lg btn-primary" name="file" value="Upload">
				      					<br>
				      				</div>
				      				<hr>
				   </div>
				</div>
		 </form>


				<div class="col-lg-12">
					<br>
					<hr>
						<h2 class="text-center"><strong>All Notes</strong></h2>
						<hr>
						<div class="col-lg-6 col-lg-offset-3 text-center">
  <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "db.php?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "db.php?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="db.php?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul></div>
		<?php 

		while($row=mysqli_fetch_array($res1)){
		?>
					  <div class="col-lg-6 well x">
					  	<div class="col-lg-6 col-lg-offset-4 ">
			  	<img src="https://img.icons8.com/dusk/64/000000/categorize.png" class="img-responsive thumbnail">
			  </div>
			  	<div class="col-lg-12">
			  	<?php  
			  	$v1=$row['name'];
			  	$f=explode('/',$v1);
			  	echo  '<strong>File Name</strong>'.'  :  '.$f[1].'<br /><br>';
	
			  	 echo '<strong>Uploaded on</strong>'.'  : '.$row['date'].'<br />';
                 echo '<strong>Category</strong>'.'  : '.$row['category'].'<br />';

			  	 ?>
			  	<br>
			  	 <a href="<?php echo $row['name']; ?>" class="btn btn-danger btn-sm" download>
			  	 Download
			  	 </a>
			  	</div>
			  </div>
	<?php }?>
	</div>
	
<br>
</body>
</html>