<footer>
	<div class="container-fluid cont">
		<div class="row">
			<div class="col-lg-3">
				<br>
				<h3 class="text-center text"><strong>About Us</strong></h3>
				<br>
				<p class="text-justify text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam"</p>
			</div>
			<div class="col-lg-3">
				<br>
				<h3 style="font-family:Bahnschrift Light; text-align:center"><strong>Contact</strong></h3>
				<hr>
				<div style="font-size:18px">
					<div class="container-fluid">
						<div class="col-lg-2">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="col-lg-10">
							<i style="font-family:Bahnschrift Light">Hyderabad India</i>
						</div>
					</div>
				<br>
					<div class="container-fluid">
						<div class="col-lg-2">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="col-lg-10">
							<i style="font-family:Bahnschrift Light">teamweb@gmail.com</i>
						</div>
					</div>
				<br>
					<div class="container-fluid">
						<div class="col-lg-2">
							<i class="fa fa-phone"></i>
						</div>
						<div class="col-lg-10">
							<i style="font-family:Bahnschrift Light">+91 1234567890</i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<br>
				<h3 style="font-family:Bahnschrift Light; text-align:center"><strong>TeamWeb</strong></h3>
				<hr>
				<h4 class="footer_list"><a href="#">TeamWeb Crew</a></h4>
				<h4 class="footer_list"><a href="#">Have a project?</a></h4>
				<h4 class="footer_list"><a href="#">TED X Event</a></h4>
				<h4 class="footer_list"><a href="#">Trending News</a></h4>
				<h4 class="footer_list"><a href="#">Guest Lecture</a></h4>
			</div>
			<div class="col-lg-3 subscribe">
				<div class="col-lg-12">
					<h2 id="news"><strong>Subscribe To Our Monthly News Letter</strong></h2>
					<br>
					<?php
					if(isset($_SESSION['subscribe'])){
?>
<script >
	function r() {
	
                 document.getElementById("subscribe").disabled = true;
             }
</script>
					<!--<div class="alert" style="color:blue">
						<p>You are subscibed Now</p>
					</div>-->
				<?php }?>
					<form class="form-vertical" action="db.php" method="post">
						<input type="email" name="emails" class="form-control" placeholder="Enter Your Email" required>
						<br>
						<input type="submit" class="btn btn_web form-control" value="subscribe" name="subscribe" onclick="r()">
					</form>
					<div class="text-center col-lg-12">
						<h3 style="color:black">Follow Us On</h3>
						<a href="https://www.facebook.com" target="_blank" style="color:#8a2be2"><i class="fa fa-facebook icon"></i></a>
						<a href="https://www.youtube.com/ElectronixGamer" target="_blank" style="color:#8a2be2"><i class="fa fa-youtube icon"></i></a>
						<a href="#" style="color:#8a2be2"><i class="fa fa-twitter icon"></i></a>
						<a href="#" style="color:#8a2be2"><i class="fa fa-instagram icon"></i></a>
						<a href="#" style="color:#8a2be2"><i class="fa fa-linkedin icon"></i></a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<h4 align="center" style="color:black">Designed and Developed by TeamWeb. © Copyright 2019.</h4>
	</div>
</footer>
