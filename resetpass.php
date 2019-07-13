<?php
include 'header.php';
$con=mysqli_connect('localhost','root','','uploadf');

$tokenfromlink=$_GET['token'];
$email=$_GET['email'];
$sql="select * from user where email='$email' and token='$tokenfromlink'";
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0){

  

?>
<style>
  .controls{
    box-shadow: 2px  1px cyan;
    border-radius: 3px;
  }
</style>
<body id="page-top " >
<div class="container">
  <form action="db.php?email=<?php echo $email;?>" method="post">
   <div class="form-group ">
    <div class=" col-lg-6 col-sm-offset-2">
        <h1> Change Password:</h1>
        <div class="control-group">
        <label for="new_password" class="control-label">New Password</label>
            <div class="controls">
                <input type="password" class="form-control" name="newpassword">
            </div>
        </div>
        <div class="control-group">
            <label for="confirm_password" class="control-label">Confirm Password</label>
            <div class="controls">
                <input type="password" class="form-control" name="confirmpassword">
            </div>
        </div>      
    
          <div class="modal-footer">
             
              <input type="submit"  class="btn btn-primary" name=" paschng"value="Save changes">
          </div>
  </div>
</div>

   </form>
</div>



</body>
</html>
<?php

}else{  

echo '<img src="images/secure.png">';
}
?>
