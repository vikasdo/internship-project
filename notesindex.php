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
			        <select name="select" id="exampleFormControlSelect1" class="form-control">
			          <option  value="0" >Select Category type</option>
			          <option value="studymaterial">studymaterial(ppts)</option>
			          <option value="notes">Notes</option>
			          <option value="assignment">Assignment</option>
			         </select>
			         <select name="select1" id="exampleFormControlSelect1" class="form-control">
			          <option >Select Branch</option>
			          <option value="cse">cse</option>
			          <option value="ece">ece</option>
			          <option value="it">it</option>
			         </select>
			         <select name="select2" id="" class="form-control">
			          <option value="0" >Select year and sem</option>
			          <option value="1-1">1-1</option>
			          <option value="1-2">1-2</option>
			          <option value="2-1">2-1</option>
			          <option value="2-2">2-2</option>
                      <option value="1-1">3-1</option>
			          <option value="1-2">3-2</option>
			          <option value="2-1">4-1</option>
			          <option value="2-2">4-2</option>
			         </select>
			                  <br><br>
			                  <div class="col-lg-6">
			                  <label>Upload Your File</label> 
					   <input type="file" name="filew" >
					</div>
				              <br><br><br>
				              <div class="col-lg-6 col-lg-offset-5">
				      					<input type="submit" class="btn btn-lg btn-primary" name="file" value="Upload">
				      					<br>
				      				</div>
				      				<hr>
				   </div>
				</div>
		 


				<div class="col-lg-12">
					<br>
					<hr>
						<h2 class="text-center"><strong>All Notes</strong></h2>
						<hr>
						 <div class="col-lg-12 ">
						 	<div class="col-lg-6"><a href="?view=1"  class="btn btn-primary">View notes</a></div>
                      <div class="col-lg-6">

					  
				      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
				      <input type="submit" name="sort" class="btn btn-outline-success my-2 my-sm-0" value="Search">
				    </form>
				</div>
    <br>
</div>

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
   
<br>
		<?php 
        if(isset($_GET['view'])||isset($_GET['pageno'])||isset($_POST['sort'])){
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
                  echo '<strong>Branch</strong>'.'  : '.$row['branch'].'<br />';
                   echo '<strong>Year,sem</strong>'.'  : '.$row['ys'].'<br />';

			  	 ?>
			  	<br>
			  	 <a href="<?php echo $row['name']; ?>" class="btn btn-danger btn-sm" download>
			  	 Download
			  	 </a>
			  	</div>
			  </div>
	<?php
	} }?>
	</div>
	
<br>
</body>
</html>