<!DOCTYPE html>
<html>

<head>
    <title></title>
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
				    <ul class="navbar-nav">
							      <li class="nav-item active">
							        <a class="nav-link" href="quickstart.php">Home <span class="sr-only">(current)</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="db.php?page=download">download</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#">Pricing</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link disabled" href="#">Disabled</a>
							      </li>
				    </ul>
				  </div>
</nav>
	<div class="container mt-3 well 	bg-info	">
		
<form class="form-group" action="db.php" method="post" enctype="multipart/form-data">
	<div class="row form-control">
			<div class="col-lg-12  mt-5 l-4">
<input type="file" name="filew">

</div>
	<div >		
			<div class="col-lg-6	  mt-5 l-4">
				<input type="submit" class="btn btn-primary" name="file">
</div>
</div>
</form>

</div>
</body>
</html>