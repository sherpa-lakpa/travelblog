<?php
require_once('db_config.php');
ob_start ();


  class team extends dbConnect{
    public function teamRegister($tname,$tdegisnation,$timage,$facebooklink,$twitterlink,$tstatus)
  {
      
        $sql1="INSERT INTO team SET tname= '$tname',tdegisnation ='$tdegisnation', timage='$timage',facebooklink='$facebooklink',twitterlink='$twitterlink',tstatus='1'";
        $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
        if($result)
        {
          echo "data inserted";
          header ('location: manageteam.php');
        }
    }

 
      public function getAllteam(){
                    
      $sql3="SELECT * from team ORDER BY tid DESC LIMIT 0, 4 ";
      $result = mysqli_query($this->db,$sql3);    
          while($row=mysqli_fetch_array($result)) {
             
              echo "<tr>
        <td>".$row['tid']."</td>
        <td>".$row['tname']."</td>
        <td>".$row['tdegisnation']."</td>
        <td><img src='".$row['timage']."' height=100px width=200px ></td>         
        <td>".$row['facebooklink']."</td>
        <td>".$row['twitterlink']."</td>
        <td>".$row['tstatus']."</td> 
     <td><a href='editdeleteteam.php?id=".$row['tid']."&ac=edit'>
          <span class='glyphicon glyphicon-edit'></span>
        </a>|<a href='editdeleteteam.php?id=".$row['tid']."&ac=delete'>
          <span class='glyphicon glyphicon-remove'></span>
        </a></td></tr>";

          } 
      }



  public function deleteteam($id)
  {
    $sql5="SELECT * FROM team WHERE tid=$id";
    $result5=mysqli_query($this->db,$sql5);
    while($row=mysqli_fetch_array($result5))
    {
      unlink($row['timage']);
    }
    $sql5="DELETE from team WHERE tid=$id";
    $result = mysqli_query($this->db,$sql5);
    if($result)
    {
      header('location: manageteam.php');
    }
    else
    {
      echo "Something wrong! Please Try Again!Delete Failed";
    }
  }




       public function editteam($id)
       {
        $sql6="SELECT * FROM team WHERE tid=$id";
        $result=mysqli_query($this->db,$sql6);
        while($row=mysqli_fetch_array($result))
        {
          $tid=$row['tid'];
          $tname=$row['tname'];
          $tdegisnation=$row['tdegisnation'];
          $timage=$row['timage'];
          $facebooklink=$row['facebooklink'];
          $twitterlink=$row['twitterlink'];
          $tstatus=$row['tstatus'];
         

echo"<div class='container'>
  <h2>TEAM Update</h2>
  <form class='form-horizontal' action='editdeleteteam.php?id=$tid&ac=edit' method='post'>
    <div class='form-group'><input type='hidden' name='tid' value=$tid />
      <label class='control-label col-sm-2' for='team name'>team name:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='btitle' placeholder='team name' name='tname' value=$tname>
      </div>
    </div>


      <div class='form-group'>
      <label class='control-label col-sm-2' for='tdegisnation'>team designantion:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='tdegisnation' placeholder='team degisnation' name='tdegisnation' value=$tdegisnation>
      </div>
    </div>

   <div class='form-group'>
      <label class='control-label col-sm-2' for='facebooklink'>facebooklink:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='facebooklink' placeholder='facebook link' name='facebooklink' value=$facebooklink>
      </div>
    </div>
    
    <div class='form-group'>
      <label class='control-label col-sm-2' for='twitterlink'>twitterlink:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='twitterlink' placeholder='twitter link' name='twitterlink' value=$twitterlink>
      </div>
    </div>

  <div class='form-group'>
      <label class='control-label col-sm-2' for='blog status'>team status:</label>
      <div class='col-sm-5'>          
        <input type='text' class='form-control' id='tstatus' placeholder='team status' name='tstatus' value=$tstatus>

      </div>
    </div>         
       
        <button type='submit' class='btn-primary' value='update'>update</button>
        <button type='reset' class='btn-danger' value='clear'>clear</button>
      </div>
    </div>  
  </form>
</div>";
          }
        }
        public function teamupdate($tid,$tname,$tdegisnation,$timage,$facebooklink,$twitterlink,$tstatus)
        {

        $sql7="UPDATE team SET tname= '$tname', tdegisnation='$tdegisnation',timage='uploads/$timage',facebooklink='$facebooklink',twitterlink='$twitterlink',tstatus='$tstatus' WHERE tid=$tid";

      $result = mysqli_query($this->db,$sql7);
      if($result)
      {
        header('location: manageteam.php');
      }
      else
      {
        echo "Editing wrong! Please Try Again";
      }

    }


  }
      
  ?>