<!DOCTYPE html>

<html>
<head>
	<?php
include 'header.php';
?>
	<title>notes </title>
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background-color: rgba(123,2,3,0.4);

		}
		.container{
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}
		.container .box .imgbox {
        position: relative;
       
        background:#ff0;
        box-sizing: border-box;
        display: inline-block;
          margin: 5px;
         transition: transform 2s;
         overflow: hidden;
         background-size: contain;

		}

		.container .box .imgbox img{
        position: relative;
        width:400px;
        height: 400px;
      transition: transform 2s;
 

		}
		.container .box:hover .imgbox img{
			
        transform:scale(1.1);
		overflow: hidden;

		}
		.container .box .details{
			position: absolute;
			width:100%;
			top:10px;
			left:10px;
			color: white;
			
            transform:scaleY(0);
            transition: transform 2s;
		}
			.container .box .details a{
			display: block;
			color: white;
		
		}
		.container .box:hover .details{
             transform: scaleY(1);
		}
	</style>
</head>
<body>
	<ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
<br>
<div class="container">

	<div class="box">
			<a href="db.php?show=assignment">
         <div class="imgbox">
         <img src="images/cat.jpg">
             <div class="details">
				<a href="db.php?show=assignment"><h1>Assignments</h1></a>
				
			</div>
         </div>
	</div>
	<div class="box">
         <div class="imgbox">
         	<a href="db.php?show=studymaterial">
			<img src="images/cat1.jpg">
			<div class="details">
				<a href="db.php?show=studymaterial"><h1>Study materials</h1></a>

			</div>
         </div>
	</div>
	<div class="box">
         <div class="imgbox">
         	<a href="db.php?show=notes">
         <img src="images/cat3.jpg">
         <div class="details ">
				<a href="db.php?show=notes"><h1>notes</h1>
				
			</div>
         </div>
	</div>
</div>
</body>
</html>