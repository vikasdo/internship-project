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
  <a href="#" id="sa"><strong> ADMIN</strong></a>
  <hr class="z">
  <br>
  <br>
  <a href="#">Dashboard</a>
  <br>
  <a href="vs.php">Verified Students</a>
  <br>
  <a href="nvs.php">Non Verified Students</a>
  <br>
  <a href="vt.php">Verified Teachers</a>
  <br>
  <a href="nvt.php">Non Verified Teachers</a>
  <br>
  <a href="chat.php">Chat</a>
  <br>
  <a href="#">My Account</a>
  <br>
  <a href="#">Log out</a>
  
    

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 
