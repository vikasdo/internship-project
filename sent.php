<?php include 'header.php' ?>
<div class="col-lg-12">
	<?php
	if(isset($_GET['sent']))
	{
	echo '<h1 class="text-center" style="color:#8a2be2"><strong>SENT</strong></h1>';
	}
	
	?>
	<br><br>
	</div>

	<div class="col-lg-4 ">
	<div class="col-lg-12 ">
	<a href="?compose=1" class="btn btn-block btn-lg btn-primary x" >Compose</a>
	<br><br>
	</div>
	<div class="col-lg-12 ">
	<a href="?inbox=1" class="btn btn-block btn-lg btn-success x" >Inbox</a>	
	<br><br>
	</div>

	<div class="col-lg-12">
	<a href="?sent=1" class="btn btn-block btn-lg btn-warning x" >Sent</a>
	<br>
	</div>


	</div>
<?php

?>
	<div class="col-lg-7  ">
		<?php
		if(isset($_GET['chat']))
		{
	echo	'<img src="images/chatimg.jpg" class="img-responsive img-rounded " style=
		"height:400px;">';
        }
        $user=$_SESSION['email'];
        $qu="SELECT * FROM mail where from_email='$user'";
$fire=mysqli_query($con,$qu);
        ?>
        <table class="table table-hovers x">
        	<thead>
        		<tr>
        			<th>mid</th>
        			<th>From</th>
        			<th>To</th>
        			<th>Date and Time</th>
        		</tr>
        	</thead>
        	<?php 
        	$text_color=array('text-primary','text-danger','text-success','text-warning','z');
        	$i=0;
        	foreach ($fire as $row) 
        	{
        		$i++;
        		if($i==4)
        		{
        			$i=1;
        		}

        		?>

        		<tr class="<?php echo $text_color[$i-1];?>">
        			<td><?php echo $row['mid'];?></td>
        			<td><?php echo $row['from_email'];?></td>
        			<td><?php echo $row['to_email'];?></td>
        			<td><?php echo $row['time'];?></td><td><input class="btn btn-sm btn-success" name="view" value="View"></td>
        		
        		<tr>


        	<?php

        	}
        	?>
        	<tbody>

        	</tbody>
        </table>




	</div>
		



	</div>
</div>