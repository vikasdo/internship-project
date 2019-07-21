<?php include 'header.php';?>
<br>
	<div class="col-lg-6 col-lg-offset-3 well">
<div class="col-lg-12">
<h1 class="text-center" style="color:#8a2be2">Post an Article</h1>
	<h4 class="text-center">---  <?php $y=isset($_GET['msg'])?$_GET['msg']:''; echo $y; ?>  ---</h4>
	</div>

<form class="form-group" method="POST" action="db.php?v=1" enctype="multipart/form-data">
<label>Heading   :</label>
<input type="text" name="sub" class="form-control x">
<br>

<label>Category  :</label>
<br>
<select class="form-control x" name="cate"> 
		<option value="Computer Science">Computer Science</option>
		<option value="Networking">Networking</option>
		<option value="Artificial Intelligence">Artificial Intelligence</option>
		<option value="Internet Of Things">Internet Of Things</option>
</select>
<br>
<label>Content  :</label>
<br>
<textarea class="form-control x" rows="4" name="tarea"></textarea>
<br>
<label>Image Upload</label>
<input type="file" name="fp">
<br>

<input type="submit" name="sart" class="btn btn-lg btn-success x" value="Post Article">

</form>
</div>