<?php
session_start();
$con=mysqli_connect('localhost','root','','uploadf');
if(isset($_POST['file'])){

$des='images/'.basename($_FILES['filew']['name']);
$imgtype = strtolower(pathinfo($des,PATHINFO_EXTENSION));
echo $imgtype;
if (file_exists($des)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
elseif ($_FILES["filew"]["size"] > 5000000000) {

    $uploadOk = 0;
}
else{
move_uploaded_file($_FILES['filew']['tmp_name'], $des);
$sql="insert into files(name,type,uid) values('$des','$imgtype',1)";
$res=mysqli_query($con,$sql);
header("Location:quickstart.php?msg=.$imgtype");
}



}
if(isset($_GET['page'])){
   if($_GET['page']=='download')
$sql="select * from files";
$res=mysqli_query($con,$sql);

    require 'download.php';



}
elseif (isset($_POST['sort'])) {
	$text=$_POST['search'];
	$sql="select * from files where name like '%$text%'";
	$res=mysqli_query($con,$sql);
	
	if($res)
		require 'download.php';
}
?>