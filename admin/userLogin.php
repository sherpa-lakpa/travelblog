<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
extract($_POST);
include_once('class/classuser.php');
$user=new user();
$user->userLogin($uname,$upassword);
}
?>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}


span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<body style="background:#E5EFF1;">
<div class="container-fluid" style="padding:50px;position:relative;top:-80px;  ">
<div class="row">
<div class="col-md-3"></div>

<div class="col-md-6">
<center><h2>Login Form</h2>
<form action="userLogin.php" method="POST" style="padding:50px;background:white;">
  <div class="imgcontainer">
    <img src="../images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <center>  <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="upassword" required><br>
    <input type="checkbox" checked="checked"> Remember me<br>
    
    <div class="clearfix">
    <button type="submit" class="btn-primary">Login</button> 
    <button type="button" class="btn-danger">Cancel</button></form></div>
    <span class="psw">Forgot <a href="#">password?</a></span>
     </div>
  </div>
</form>

</body>
</html>
