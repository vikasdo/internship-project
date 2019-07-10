<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style >
    	.p-2{
    		background-color: #9ec429;
    	}
    	
    </style>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Navbar</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav mr-auto">
							      <li class="nav-item active">
							        <a class="nav-link" href="quickstart.php">Home <span class="sr-only">(current)</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#">download</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#">Pricing</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link disabled" href="#">Disabled</a>
							      </li>
				    </ul>

				    <form class="form-inline ml-5 my-lg-0" method="post" action="db.php">
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <input type="submit" name="sort" class="btn btn-outline-success my-2 my-sm-0" value="Search">
    </form>
</div>
				 
</nav>



<div class="d-flex bg-light  col-lg-12 flex-wrap       ">
	<?php while($row=mysqli_fetch_array($res)){

	?>
		  <div class="p-2 m-3 col-lg-3">
		  	<?php echo $row['name']; 
		  	$v=$row['name'];
		  	echo '<br>';
		  echo "<a href='$v' target='_blank' style='color:green'>View </a>";
		  	 echo $row['date'];?>
		  	 <a href="<?php echo $row['name']; ?>" download>Download</a>
		  	</div>
<?php }?>
</div>

</body>
</html>