<?php
require_once('db_config.php');
ob_start ();



  class service extends dbConnect{
    public function serviceRegister($sname,$sdescription,$sfulldescription,$sstatus,$scost,$target)
  {
      
        $sql1="INSERT INTO services SET sname= '$sname',sdescription ='$sdescription',sfulldescription='$sfulldescription',sstatus='1',scost='$scost',simage='$target'";
        $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
        if($result)
        {
          echo "data inserted";
          header ('location: manageservice.php');
        }
    }

 
      public function getAllservice(){
                    
      $sql3="SELECT * from services ORDER BY sid DESC LIMIT 0, 30 ";
      $result = mysqli_query($this->db,$sql3);    
          while($row=mysqli_fetch_array($result)) {
             
              echo "<tr>
        <td>".$row['sid']."</td>
        <td>".$row['sname']."</td>
        <td>".$row['sdescription']."</td>
        <td>".$row['sfulldescription']."</td>
        <td>".$row['sstatus']."</td>
        <td>".$row['scost']."</td>
         <td><img src='".$row['simage']."' height=100px width=200px ></td> 

    <td><a href='editdeleteservice.php?id=".$row['sid']."&ac=edit'>
          <span class='glyphicon glyphicon-edit'></span>
        </a>|<a href='editdeleteservice.php?id=".$row['sid']."&ac=delete'>
          <span class='glyphicon glyphicon-remove'></span>
        </a></td></tr>";
 
          } 
      }


  public function deleteservice($id)
  {
    $sql5="SELECT * FROM services WHERE sid=$id";
    $result5=mysqli_query($this->db,$sql5);
    while($row=mysqli_fetch_array($result5))
    {
      unlink($row['simage']);
    }
    $sql5="DELETE from services WHERE sid=$id";
    $result = mysqli_query($this->db,$sql5);
    if($result)
    {
      header('location: manageservice.php');
    }
    else
    {
      echo "Something wrong! Please Try Again!Delete Failed";
    }
  }




       public function editservice($id)
       {
        $sql6="SELECT * FROM services WHERE sid=$id";
        $result=mysqli_query($this->db,$sql6);
        while($row=mysqli_fetch_array($result))
        {
          $sid=$row['sid'];
          $sname=$row['sname'];
          $sdescription=$row['sdescription'];
          $sfulldescription=$row['sfulldescription'];
          $sstatus=$row['sstatus'];
          $scost=$row['scost'];
          


  

echo"<div class='container'>
  <h2>services Update</h2>
  <form class='form-horizontal' action='editdeleteservice.php?id=$sid&ac=edit' method='post'>

    <div class='form-group'><input type='hidden' name='sid' value=$sid>
      <label class='control-label col-sm-2' for='service name'>service name:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='sname' placeholder='service  name' name='sname' value=$sname>
      </div>
    </div>

        <div class='form-group'>
      <label class='control-label col-sm-2' for='service description'>service description:</label>
      <div class='col-sm-5'>          
        <textarea class='form-control' id='sdescription' placeholder='service description' name='sdescription' >".$row['sdescription']."</textarea>
      </div>
    </div>

         <div class='form-group'>
      <label class='control-label col-sm-2' for='service full description'>service full description:</label>
      <div class='col-sm-5'>          
        <textarea class='form-control' id='sfulldescription' placeholder='service full description' name='sfulldescription' >".$row['sfulldescription']."</textarea>
      </div>
    </div>

  <div class='form-group'>
      <label class='control-label col-sm-2' for='service status'>service status:</label>
      <div class=col-sm-5'>          
        <input type='text class='form-control' id='sstatus' placeholder='service status' name='sstatus' value=$sstatus>
      </div>
    </div>
    <div class='form-group'>
      <label class='control-label col-sm-2' for='service cost'>service cost:</label>
      <div class=col-sm-5'>          
        <input type='text class='form-control' id='scost' placeholder='servive cost' name='scost' value=$scost>
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


               public function serviceupdate($sname, $sdescription,$sfulldescription,$sstatus,$scost)
      {

        $sql7="UPDATE services SET sname= '$sname', sdescription='$sdescription',sfulldescription='$sfulldescription',sstatus='$sstatus',scost='$scost' WHERE sid=$sid";
      $result = mysqli_query($this->db,$sql7);
      
      if($result)
      {
        header('location: manageservice.php');
      }
      else
      {
        echo "Editing wrong! Please Try Again";
      }

    }
  }