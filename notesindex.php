<?php
include 'header.php';
?>
	<style>


	body{
		background-color: white;
		margin: 0px;
		background-color: #f8f8f9;
	}
	.form-control{
		margin: 5px;
		padding: 6px;
	}

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    
    border-radius: 30px;
    padding: 10px;
    }
    .b{
    	min-width: 100px;
    }

    .search_input{
    color: black;
    border: 0;
    outline: 0;
     width: 450px;
    cursor:default;
   border-radius: 2px;
    width: 200px;
    line-height: 40px;
    transition: width 0.4s linear;
    }

hr{
	height:6px;background: black no-repeat scroll center;border:none;
	border-radius: 2px;
	box-shadow: 5px  10px cyan;
}
    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
   border-radius: 10px;
    transition: width 0.2s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    }
	</style>			<!--upload notes-->
	
<div class="container-fluid a">
		<form class="form-group" action="db.php" method="post" enctype="multipart/form-data">
             	  <div class="form-group ">
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
				      						   </div>
				</div>
		 


	
					<div class="col-lg-12 ">   
					<hr>
						<h2 class="text-center">All Notes</h2>
						<hr>
						
						 	<div class="col-lg-6 " ><a href="?view=1"  class="btn btn-primary btn-block " style="height: 50px; width: 100px;">View notes</a>
						    </div>
 <div class=" justify-content-center col-lg-6">
        <div class="searchbar">
          <input class="search_input" type="text" name="search" placeholder="Search...">
        <input type="submit" name ="sort" class="search_icon" value="S">
        </div>
      </div>
				      
    <br>
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
</form>
<?php
include 'footer.php';
?>
</body>
	

</html>