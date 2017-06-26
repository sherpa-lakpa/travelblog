
<?php
  include_once('class/classteam.php');
    $team=new team();

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    extract($_POST);
    include_once('class/classteam.php');
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
    $check = $team->teamRegister($tname,$tdegisnation,$target,$facebooklink,$twitterlink,$tstatus);
    if($check == 1){
      $success = 'success!';
    }
    else
      {
        $error = 'Failed to add team photo';
      }

  }
?>



<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

<body style="background:#E5EFF1;">
<div class="container">
<div class="row"><div class="col-md-2"></div>
<div class="col-md-7"><center>

<h3>Add new team member</h3>

<div>
  <form  method='post' action="" style="border:1px  solid #ccc;padding:50px;background:white;" enctype="multipart/form-data">
    <label for="tname">team member name</label>
    <input type="text" id="tname" name="tname" placeholder="team member name..">
<br>

  <label for="tdegisnation">title degisnation</label>
    <input type="text" id="tdegisnation" name="tdegisnation" placeholder="team degisnation">


     <label for="timage">title image</label>
    <input type="file" name="file" id="file" /><br>

    <label for="facebooklink">facebook link</label><br>
    <textarea  id="facebooklink" name="facebooklink" placeholder="facebook link" rows="5" cols="65">
    </textarea><br>

    
    <label for="twitterlink">twitter link</label><br>
    <textarea  id="twitterlink" name="twitterlink" placeholder="twitter link" rows="5" cols="65">
    </textarea><br>

     <label for="tstatus">team status</label>
    <input type="text" id="tstatus" name="tstatus" placeholder="team status">



  
    <input type="submit" value="add">
  </form>
  </div>
   </div></center><div class="col-md-2"></div>
</div>

</body>
</html>