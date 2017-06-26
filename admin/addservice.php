<?php
  include_once('class/classservice.php');
    $service=new service();

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    extract($_POST);
    include_once('class/classservice.php');
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
    $check = $service->serviceRegister($sname,$sdescription,$sfulldescription,$sstatus,$scost,$target);
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

<h3>Add new services</h3>

<div>
  <form  method='post' action="addservice.php" style="border:1px  solid #ccc;padding:50px;background:white;" enctype="multipart/form-data">    
  <label for="sname">service name</label>
    <input type="text" id="sname" name="sname" placeholder="service name..">
<br>
    <label for="sdescriptiuon">service description</label><br>
    <textarea maxlength="5000" id="sdescription" name="sdescription" placeholder="servicedescription" rows="5" cols="65">
    </textarea><br>

    <label for="sfulldescriptiuon">service full description</label><br>
    <textarea maxlength="10000" id="sdescription" name="sfulldescription" placeholder="service full description" rows="5" cols="65">
    </textarea><br>

     <label for="sstatus">service status</label>
    <input type="text" id="sstatus" name="sstatus" placeholder="sstatus">

     <label for="sstatus">service cost</label>
    <input type="text" id="scost" name="scost" placeholder=" service cost">

  <label for="simage">service image</label>
    <input type="file" name="file" id="file" /><br>
  
    <input type="submit" value="add">
  </form>
  </div>
   </div></center><div class="col-md-2"></div>
</div>

</body>
</html>