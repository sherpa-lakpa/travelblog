<?php
require_once('db_config.php');
ob_start ();


  class blog extends dbConnect{
    public function blogRegister($btitle,$bkeyword,$bdescription,$bshort,$bfull,$bdate,$bstatus,$bimage)
  {
      
        $sql1="INSERT INTO blog SET btitle= '$btitle',bkeyword ='$bkeyword', bdescription='$bdescription',bshort='$bshort',bfull='$bfull',bdate='$bdate',bstatus='1',bimage='$bimage'";
        $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
        if($result)
        {
          echo "data inserted";
          header ('location: manageblog.php');
        }
    }

 
      public function getAllblog(){
                    
      $sql3="SELECT * from blog ORDER BY bid DESC LIMIT 0, 30 ";
      $result = mysqli_query($this->db,$sql3);    
          while($row=mysqli_fetch_array($result)) {
             
              echo "<tr>
        <td>".$row['bid']."</td>
        <td>".$row['btitle']."</td>
        <td>".$row['bkeyword']."</td>
        <td>".$row['bdescription']."</td>
        <td>".$row['bshort']."</td>
        <td>".$row['bfull']."</td>
        <td>".$row['bdate']."</td>
        <td>".$row['bstatus']."</td> 
        <td><img src='".$row['bimage']."' height=100px width=200px ></td>               
        <td><a href='editdeleteblog.php?id=".$row['bid']."&ac=edit'>
          <span class='glyphicon glyphicon-edit'></span>
        </a>|<a href='editdeleteblog.php?id=".$row['bid']."&ac=delete'>
          <span class='glyphicon glyphicon-remove'></span>
        </a></td></tr>";
 
          } 
      }


  public function deleteblog($id)
  {
    $sql5="SELECT * FROM blog WHERE bid=$id";
    $result5=mysqli_query($this->db,$sql5);
    while($row=mysqli_fetch_array($result5))
    {
      unlink($row['bimage']);
    }
    $sql5="DELETE from blog WHERE bid=$id";
    $result = mysqli_query($this->db,$sql5);
    if($result)
    {
      header('location: manageblog.php');
    }
    else
    {
      echo "Something wrong! Please Try Again!Delete Failed";
    }
  }




       public function editblog($id)
       {
        $sql6="SELECT * FROM blog WHERE bid=$id";
        $result=mysqli_query($this->db,$sql6);
        while($row=mysqli_fetch_array($result))
        {
          $bid=$row['bid'];
          $btitle=$row['btitle'];
          $bkeyword=$row['bkeyword'];
          $bdescription=$row['bdescription'];
          $bshort=$row['bshort'];
          $bfull=$row['bfull'];
           $bdate=$row['bdate'];
          $bstatus=$row['bstatus'];

echo"<div class='container'>
  <h2>BLOG Update</h2>
  <form class='form-horizontal' action='editdeleteblog.php?id=$bid&ac=edit' method='post'>
    <div class='form-group'><input type='hidden' name='bid' value=$bid />
      <label class='control-label col-sm-2' for='blog title'>blog title:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='btitle' placeholder='blog title' name='btitle' value=$btitle>
      </div>
    </div>


     <div class='form-group'>
      <label class='control-label col-sm-2' for='bdescription'>blog keyword:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='bdescription' placeholder='blog keyword' name='bkeyword' value=$bkeyword>
      </div>
    </div>

        <div class='form-group'>
      <label class='control-label col-sm-2' for='blog description'>blog description:</label>
      <div class='col-sm-5'>          
        <textarea class='form-control' id='bdescription' placeholder='blog description' name='bdescription'>".$row['bdescription']." </textarea>
      </div>
    </div>
 

  <div class='form-group'>
      <label class='control-label col-sm-2' for='blog short'>blog short:</label>
      <div class='col-sm-5'>          
        <textarea class='form-control' id='bshort' placeholder='short description' name='bshort' >".$row['bshort']."</textarea>
      </div>
    </div>


  <div class='form-group'>
      <label class='control-label col-sm-2' for='blog full'>full blog:</label>
      <div class='col-sm-5'>          
        <textarea class='form-control' id='bfull' placeholder='full description' name='bfull' >".$row['bfull']."</textarea>
      </div>
    </div>




  <div class='form-group'>
      <label class='control-label col-sm-2' for='blog date'>date of blog:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='bdate' placeholder='date' name='bdate' value=$bdate> 
      </div>
    </div>
    
  <div class='form-group'>
      <label class='control-label col-sm-2' for='blog status'>blog status:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='bstatus' placeholder='blog status' name='bstatus' value=$bstatus>

      </div>
    </div>

<div class='form-group'>
      <label class='control-label col-sm-2' for=''></label>
      <div class='col-sm-5'>          
       
        <button type='submit' class='btn-primary' value='update'>update</button>
        <button type='reset' class='btn-danger' value='clear'>clear</button>
      </div>
    </div>  
  </form>
</div>";
          }
        }
        public function blogupdate($bid,$btitle,$bkeyword,$bdescription,$bshort,$bfull,$bdate,$bstatus)
        {

        $sql7="UPDATE blog SET btitle= '$btitle', bkeyword='$bkeyword',bdescription='$bdescription',bshort='$bshort',bfull='$bfull',bdate='$bdate',bstatus='$bstatus'WHERE bid=$bid";

      $result = mysqli_query($this->db,$sql7);
      if($result)
      {
        header('location: manageblog.php');
      }
      else
      {
        echo "Editing wrong! Please Try Again";
      }

    }


            public function parentOptions()
            {
              $sql8="SELECT * from blog WHERE bparent=0";
              $result=mysqli_query($this->db,$sql8);
              while($row=mysqli_fetch_array($result))
              {
                $bid=$row['bid'];
                $btitle=$row['btitle'];
                echo"<option value=".$bid.">".$btitle."</option>";
              }
            }
    }
  
      
  ?>
