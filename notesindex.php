<html>
<head>
	<style>
.a{

	padding: 2px;
	margin: 3px;
}
	.mainn{
		margin-top: 0;color: white;
	}
    
    .b{
    	min-width: 100px;
    }

 

hr{
	height:2px;background: blue no-repeat scroll center;border:none;
	border-radius: 1px;
	
}

 .navbar{
 	background-color: blue;
 }
 .s{
 	min-width: 400px;
     border-radius: 5px;
     min-height: 37px;
 }
 .k{
 min-height: 37px;
}
	</style>			<!--upload notes-->
	
<div>
	<?php
include 'header.php';
?>
</div>
<div class="mainn">
		<form class="form-group" action="db.php" method="post" enctype="multipart/form-data">
             	
         	<div class="col-lg-12" style="background-image: url('images/blue.jpg');">
             	 <div class="col-lg-6 col-lg-offset-3 " >
             	  	<h2 class="text-center"><mark><img src="https://img.icons8.com/color/48/000000/overview-pages-1.png"><strong> Notes Section</strong></mark></h2>
             	  	<img src="https://img.icons8.com/bubbles/50/000000/bar-chart.png">
		           <label class=""><h4><strong>Category Of Notes:</strong></h4></label>
			        <select name="select" id="exampleFormControlSelect1" class="form-control a">
			          <option  value="0" >Select Category type</option>
			          <option value="studymaterial">studymaterial(ppts)</option>
			          <option value="notes">Notes</option>
			          <option value="assignment">Assignment</option>
			         </select>
			         <select name="select1" id="exampleFormControlSelect1" class="form-control a">
			          <option >Select Branch</option>
			          <option value="cse">cse</option>
			          <option value="ece">ece</option>
			          <option value="it">it</option>
			         </select>
			         <select name="select2" id="exampleFormControlSelect1" class="form-control a">
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
				      	</div>
				      	</div>					  
				     </div>
              <div class="container-fluid">  
				<div class="col-lg-12 ">   
					<hr>
					<h2 class="text-center">All Notes</h2>
					<div class="col-lg-6">
						
						<hr><a href="?view=1"  class="btn btn-primary btn-block " >View notes</a>
				         </div> 
				
					    <div class="col-lg-6 ">
					    	<hr>
					      <input type="text " name="search" placeholder="Search notes by branch,sem,name..." class="s">
					        <button class="btn btn-default k" name ="sort" type="submit" >
							<i class="glyphicon glyphicon-search"></i>
						    </button>
					    </div>
				</div>
			</form>

						<div class="col-lg-6 col-lg-offset-3 text-center">
<hr>
		  <ul class="pagination">
		        <li><a href="?pageno=1">First</a></li>
		        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
		            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "db.php?pageno=".($pageno - 1); } ?>">Prev</a>
		        </li>
		        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
		            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "db.php?pageno=".($pageno + 1); } ?>">Next</a>
		        </li>
		        <li><a href="db.php?pageno=<?php echo $total_pages; ?>">Last</a></li>
		    </ul>
</div>

   
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
			  
			  	 <a href="<?php echo $row['name']; ?>" class="btn btn-danger btn-sm" download>
			  	 Download
			  	 </a>
     	   </div>
			 
   </div>

<?php

	} }
     
	?>

   </div>

<?php
include 'footer.php';
?>
</body>
</html>