<?php
@session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
extract($_POST);
include_once('class/classuser.php');
$user=new user();

 $nam = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $location = 'uploads/';
    $target = $location.$nam;
 if(move_uploaded_file($tmp_name,$target))
    {
      $target = 'uploads/'.$nam;
      }else {
      $target = "";
      echo '<script>alert(0);</script>';
    }
    $check =$user->userRegister($uname,$upassword,$uemail,$flink,$tlink,$target,$usertype,$aboutme);

    if($check == 1){
      $success = 'success!';
    }
    else
      {
        $error = 'Failed to add service photo';
      }

  }
?>
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
.container
{
    position:relative;
   
    top:90px;
}
input[type=text], input[type=password] {
    
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;

}



/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<body style="background:#E5EFF1;">
<div class="container">
<div class="row"><div class="col-md-2"></div>
<div class="col-md-7"><center>
<h2>Signup Form</h2>

 <form  method='post' action="" style="border:1px  solid #ccc;padding:50px;background:white;" enctype="multipart/form-data">
 <center>
    <label><b>user name</b></label>
    <input type="text" placeholder="enter your name" name="uname" required><br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="upassword" required><br>

    <label><b>user email</b></label>
    <input type="text" placeholder="Enter email" name="uemail" required><br>

    <label><b>facebook link</b></label>
    <input type="text" placeholder="facebook link" name="flink"><br>

    <label><b>twitter link</b></label>
    <input type="text" placeholder="twitter link" name="tlink"><br>

    <label><b>user image</b></label>
    <input type="file" placeholder="image " name="file" required><br>

     <label><b>user type</b></label>
    <input type="text" placeholder="usertype" name="usertype"><br>

     <label><b>about me</b></label>
    <input type="text" placeholder="about me" name="aboutme"><br>

    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="btn-danger">Cancel</button>
      <button type="submit" class="btn-primary">Sign Up</button></form>
    </div></center><div class="col-md-2"></div>
  </div></div>
</form>
</div>
</body>
</html>
