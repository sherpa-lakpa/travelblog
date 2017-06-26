
<?php
  include_once('class/classgallery.php');
    $gallery=new gallery();

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    extract($_POST);
    include_once('class/classgallery.php');
    $gdate=date('Y-m-d');

    $nam = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $location = 'uploads/';
    $target = $location.$nam;
    if(move_uploaded_file($tmp_name,$target)){
      $target = 'uploads/'.$nam;
      }else{
      $target = "";
      echo '<script>alert(0);</script>';
    }
    $check = $gallery->galleryRegister($gtype,$gtitle,$gdescription,$target,$gstatus,$gdate);
    if($check == 1){
      $success = 'success!';
    }
    else
      {
        $error = 'Failed to add ebooks';
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

<h3>Add phtos</h3>

<div>
  <form  method='post' action="" style="border:1px  solid #ccc;padding:50px;background:white;" enctype="multipart/form-data">
    <select name="gtype">
    <option value="hiking">Hiking</option>
    <option value="trekking">Trekking</option>
    <option value="rafting">Rafting</option>
    <option value="bungee">Bungee</option>
    </select>

<br>

  <label for="gtitle">image title</label>
    <input type="text" id="gtitle" name="gtitle" placeholder=" image title">

    <label for="gdescription">image description</label><br>
    <textarea maxlength="50" id="gdescription" name="gdescription" placeholder="image description" rows="5" cols="65">
    </textarea><br>

        <label for="gimage"> image</label>
    <input type="file" name="file" />

     <label for="bstatus">gallery status</label>
    <input type="text" id="gstatus" name="gstatus" placeholder="gallery status">

    <input type="submit" value="add">
  </form>
  </div>
   </div></center><div class="col-md-2"></div>
</div>

</body>
</html>
