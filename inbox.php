<?php include 'header.php' ?>
<div class="col-lg-12">
	<?php
	if(isset($_GET['inbox']))
	{
	echo '<h1 class="text-center" style="color:#8a2be2"><strong>Inbox</strong></h1>';
	}
	
	?>
	<br><br>
	</div>

	<div class="col-lg-6 ">
	<div class="col-lg-6 col-lg-offset-1">
	<a href="?compose=1" class="btn btn-block btn-lg btn-primary x" >Compose</a>
	<br><br>
	</div>
	<div class="col-lg-6 col-lg-offset-1">
	<a href="?inbox=1" class="btn btn-block btn-lg btn-success x" >Inbox</a>	
	<br><br>
	</div>

	<div class="col-lg-6 col-lg-offset-1">
	<a href="?sent=1" class="btn btn-block btn-lg btn-warning x" >Sent</a>
	<br>
	</div>


	</div>
<?php

?>
	<div class="col-lg-4  well">
		<?php
		if(isset($_GET['chat']))
		{
	echo	'<img src="images/chatimg.jpg" class="img-responsive img-rounded " style=
		"height:400px;">';
        }

        ?>
        <form method="POST" class="form-group" action="db.php">
         <label>From :</label>
		 <input type="text" class="form-control x">       	
		<br>
		 <label>To :</label>
		 <input type="text" class="form-control x">       	
		<br>
		<label>Subject :</label>
		 <textarea class="form-control x" rows="4" name="ta"></textarea>
		 <br>
		 <a href="#" class="btn btn-lg btn-info x">Send</a>

        </form>
	</div>
		



	</div>
</div>