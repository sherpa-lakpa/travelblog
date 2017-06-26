
<?php
  include_once('class/classblog.php');
    $blog=new blog();

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    extract($_POST);
    include_once('class/classblog.php');
    $bdate=date('Y-m-d H:i:s');

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
    $check = $blog->blogRegister($btitle,$bkeyword,$bdescription,$bshort,$bfull,$bdate,$bstatus,$target);
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

<h3>Add new blog</h3>

<div>
  <form  method='post' action="" style="border:1px  solid #ccc;padding:50px;background:white;" enctype="multipart/form-data">
    <label for="btitle">blog title</label>
    <input type="text" id="btitle" name="btitle" placeholder="blog title..">
<br>

  <label for="keuword">blog keyword</label>
    <input type="text" id="bkeyword" name="bkeyword" placeholder="blog keyword">

    <label for="bdescription">blog description</label><br>
    <textarea  id="bdescription" name="bdescription" placeholder="blog description" rows="5" cols="65">
    </textarea><br>

       <label for="bdescription">blog  short description</label><br>
    <textarea  id="bshort" name="bshort" placeholder="short blog description" rows="5" cols="65">
    </textarea><br>

       <label for="bdescription">blog full description</label><br>
    <textarea  id="bfull" name="bfull" placeholder="full blog description" rows="5" cols="65">
    </textarea><br>

     <label for="bstatus">blog status</label>
    <input type="text" id="bstatus" name="bstatus" placeholder=" blog status">


     <label for="bimage">blog image</label>
    <input type="file" name="file" />

  
    <input type="submit" value="add">
  </form>
  </div>
   </div></center><div class="col-md-2"></div>
</div>

</body>
</html>
