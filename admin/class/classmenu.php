<?php
require_once('db_config.php');
ob_start ();


  class menu extends dbConnect{
    public function menuRegister($mname,$mdescription,$morder,$mparent)
  {
      
        $sql1="INSERT INTO menu SET mname= '$mname',mdescription ='$mdescription', morder='$morder',mparent='$mparent',mstatus='1'";
        $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
        if($result)
        {
          echo "data inserted";
          header ('location: managemenu.php');
        }
    }

 
      public function getAllmenu(){
                    
      $sql3="SELECT * from menu ORDER BY mid DESC LIMIT 0, 30 ";
      $result = mysqli_query($this->db,$sql3);    
          while($row=mysqli_fetch_array($result)) {
             
              echo "<tr>
        <td>".$row['mid']."</td>
        <td>".$row['mname']."</td>
        <td>".$row['mdescription']."</td>
        <td>".$row['morder']."</td>
        <td>".$row['mparent']."</td>
        <td>".$row['mstatus']."</td>
     <td><a href='editdeletemenu.php?id=".$row['mid']."&ac=edit'>
          <span class='glyphicon glyphicon-edit'></span>
        </a>|<a href='editdeletemenu.php?id=".$row['mid']."&ac=delete'>
          <span class='glyphicon glyphicon-remove'></span>
        </a></td></tr>";
 
          } 
      }

      public function menuCount(){
          
          $sql4="SELECT * from menu WHERE mparent=0";
      $result = mysqli_query($this->db,$sql4);
          $user_data = mysqli_fetch_array($result);
          $count_row = $result->num_rows;
          echo "<span class='badge'>".$count_row."</span>";          
      }



      public function deletemenu($id)
      {
        $sql5="DELETE from menu WHERE mid=$id";
      $result = mysqli_query($this->db,$sql5);
      if($result)
      {
        echo "Successfully deleted";
        header ('location: managemenu.php') ;
        }
      else
      {
        echo "Something wrong!";
        }
    }



       public function editmenu($id)
       {
        $sql6="SELECT * FROM menu WHERE mid=$id";
        $result=mysqli_query($this->db,$sql6);
        while($row=mysqli_fetch_array($result))
        {
          $mid=$row['mid'];
          $mname=$row['mname'];
          $mdescription=$row['mdescription'];
          $morder=$row['morder'];
          $mparent=$row['mparent'];
          $mstatus=$row['mstatus'];
          


  

echo"<div class='container'>
  <h2>Menu Update</h2>
  <form class='form-horizontal' action='editdeletemenu.php?id=$mid&ac=edit' method='post'>
    <div class='form-group'><input type='hidden' name='mid' value=$mid>
      <label class='control-label col-sm-2' for='menu name'>menu name:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='mname' placeholder=menu name' name='mname' value=$mname>
      </div>
    </div>

        <div class='form-group'>
      <label class='control-label col-sm-2' for='menu description'>menu description:</label>
      <div class='col-sm-5'>          
        <textarea class='form-control' id='mdescription' placeholder='menu description' name='mdescription' >".$row['mdescription']."</textarea>
      </div>
    </div>

  <div class='form-group'>
      <label class='control-label col-sm-2' for='menu menu order'>menuorder:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='morder' placeholder='menu order' name='morder' value=$morder>
      </div>
    </div>

  <div class='form-group'>
      <label class='control-label col-sm-2' for='menu menu order'>menu parent:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='mparent' placeholder='menu parent' name='mparent' value=$mparent>
      </div>
    </div>
  <div class='form-group'>
      <label class='control-label col-sm-2' for='menu menu status'>menu status:</label>
      <div class=col-sm-5'>          
        <input type='text class='form-control' id='mstatus' placeholder='menu status' name='mstatus' value=$mstatus>
      </div>
    </div>
    <div class='form-group'>        
      <div class='col-sm-offset-2 col-sm-10'>
        <button type='submit' class='btn-primary' value='update'>update</button>
      </div>
    </div>
  </form>
</div>";

          }
            }
               public function menuupdate($mid, $mname, $mdescription, $mstatus)
      {

        $sql7="UPDATE menu SET mname= '$mname', mdescription='$mdescription',mstatus='$mstatus' WHERE mid=$mid";
      $result = mysqli_query($this->db,$sql7);
      if($result)
      {
        header('location: managemenu.php');
      }
      else
      {
        echo "Editing wrong! Please Try Again";
      }

    }


            public function parentOptions()
            {
              $sql8="SELECT * from menu WHERE mparent=0";
              $result=mysqli_query($this->db,$sql8);
              while($row=mysqli_fetch_array($result))
              {
                $mid=$row['mid'];
                $mname=$row['mname'];
                echo"<option value=".$mid.">".$mname."</option>";
              }
            }
    }
  
      
  ?>
