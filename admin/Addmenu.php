<?php

  include_once('class/classmenu.php');
    $menu=new menu();


  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    extract($_POST);
    include_once('class/classmenu.php');
    $menu=new menu();
    $menu->menuRegister($mname,$mdescription,$morder,$mparent);
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

<h3>Add new menu</h3>

<div>
  <form  method='post' action="" style="border:1px  solid #ccc;padding:50px;background:white;">
    <label for="mname">menu name</label>
    <input type="text" id="mname" name="mname" placeholder="menu name..">
<br>
    <label for="mdescriptiuon">menu description</label><br>
    <textarea  id="mdescription" name="mdescription" placeholder="menudescription" rows="5" cols="65">
    </textarea><br>

     <label for="morder">menu order</label>
    <input type="text" id="morder" name="morder" placeholder="morder">

 <label for="mparent">menu prent</label>
    <select size=1 name="mparent">
    <option value="0">-ROOT-</option>
    <?php      
    $menu->parentOptions();
      ?>
      </select>
  
    <input type="submit" value="add">
  </form>
  </div>
   </div></center><div class="col-md-2"></div>
</div>

</body>
</html>
