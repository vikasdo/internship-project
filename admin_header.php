<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #F8F8F8;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  display: block;
  color: #8a2be2;
}
.active
{
  color: #8a2be2;
}
.sidenav .closebtn {
  position: absolute; 
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
.z{
  color: white;
  border:2px; 
}
#sa
{
  color:#8a2be2;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <br>
  <a href="#" id="sa" ><h2><strong>ADMIN</strong></h2></a>
  <hr class="z">
  <li class="<?php $t=isset($_GET['dash'])?'active':''; echo $t ?>"><a href="db.php?dash=1"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
  <br>
  <li class="<?php $t=isset($_GET['vs'])?'active':''; echo $t ?>"><a href="db.php?vs=1"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Verified Students</a></li>
  <br>
  <li class="<?php $t=isset($_GET['nvs'])?'active':''; echo $t ?>"> <a href="db.php?nvs=1"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Non Verified Students</a></li>
  <br>
  <li class="<?php $t=isset($_GET['vt'])?'active':''; echo $t ?>"><a href="db.php?vt=1"><i class="fa fa-user-o" aria-hidden="true"></i>Verified Teachers</a></li>
  <br>
  <li class="<?php $t=isset($_GET['nvt'])?'active':''; echo $t ?>"><a href="db.php?nvt=1"><i class="fa fa-user-o" aria-hidden="true"></i>Non Verified Teachers</a></li>
  <br>
  <li class="<?php $t=isset($_GET['chat'])?'active':''; echo $t ?>"><a href="db.php?chat=1"><i class="fa fa-comments" aria-hidden="true"></i>Chat</a></li>
  <br>
  <li class="<?php $t=isset($_GET['acc'])?'active':''; echo $t ?>"><a href="db.php?acc=1"><i class="fa fa-id-card-o" aria-hidden="true"></i>My Account</a></li>
  <br>
  <li class="<?php $t=isset($_GET['log'])?'active':''; echo $t ?>"><a href="db.php?log=1"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
  
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
document.body.style.backgroundColor = "white";

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 
