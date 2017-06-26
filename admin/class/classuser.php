<?php
@session_start();
include('db_config.php');
ob_start();



  class User extends dbConnect
  {
    public function userRegister($uname,$upassword,$uemail,$flink,$tlink,$target,$usertype,$aboutme)
    {
      $sql0="SELECT * from userinfo WHERE uname='$uname' OR uemail='$uemail'";
      $result0=mysqli_query($this->db,$sql0);
      $user_data0=mysqli_fetch_array($result0);
      $count_row0=$result0->num_rows;
      if($count_row0==0)
      {
          echo "<script>alert($target);</script>";
        $sql1="INSERT INTO userinfo SET uname= '$uname',upassword ='$upassword', uemail='$uemail', utype='2',ustatus='0',flink='$flink',tlink='$tlink',uimage='$target',usertype='$usertype',aboutme='$aboutme'";
        $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
        if($result)
        {
          header('location:manageuser.php');

        }
    }
    else
    {
      echo"data already exist";
    }
  }




		public function userLogin($uname,$upassword)
		{
			$sql2="SELECT * from userinfo WHERE  uname='$uname' and upassword='$upassword'";
			//checking if the username is available in the table
		$result=mysqli_query($this->db,$sql2);
		$user_data=mysqli_fetch_array($result);
		$count_row=$result->num_rows;

		if($count_row==1)
		{ echo"yyyyy";
			//this login var will use for the session thing
			$_SESSION['login']=true;
			$_SESSION['uid']=$user_data['uid'];
			$_SESSION['uname']=$uname;
			header('location: index.php');
		}
		else
		{
			echo"password or username wrong";
		}
	}


  
public function getAllUsers()
{
	$sql3="SELECT * from userinfo ORDER BY uid DESC LIMIT 0,30";
	$result=mysqli_query($this->db,$sql3);
	while($row=mysqli_fetch_array($result))
	{
		       echo "<tr>
        <td>".$row['uid']."</td>
        <td>".$row['uname']."</td>
        <td>".$row['uemail']."</td>
        <td>".$row['utype']."</td>
        <td>".$row['ustatus']."</td>
        <td>".$row['flink']."</td>
        <td>".$row['tlink']."</td>
       <td><img src='".$row['uimage']."' height=100px width=200px ></td> 
        <td>".$row['usertype']."</td>
        <td>".$row['aboutme']."</td>
       <td><a href='editdeleteuser.php?id=".$row['uid']."&ac=edit'>
          <span class='glyphicon glyphicon-edit'></span>
        </a>|<a href='editdeleteuser.php?id=".$row['uid']."&ac=delete'>
          <span class='glyphicon glyphicon-remove'></span>
        </a></td></tr>";
	}
}



  public function deleteUser($id)
  {
    $sql5="SELECT * FROM userinfo WHERE uid=$id";
    $result5=mysqli_query($this->db,$sql5);
    while($row=mysqli_fetch_array($result5))
    {
      unlink($row['uimage']);
    }
    $sql5="DELETE from userinfo WHERE uid=$id";
    $result = mysqli_query($this->db,$sql5);
    if($result)
    {
      header('location: manageuser.php');
    }
    else
    {
      echo "Something wrong! Please Try Again!Delete Failed";
    }
  }

      public function edituser($id)
       {
        $sql6="SELECT * FROM userinfo WHERE uid=$id";
        $result=mysqli_query($this->db,$sql6);
        while($row=mysqli_fetch_array($result))
        {
          $uid=$row['uid'];
          $uname=$row['uname'];
          $upassword=$row['upassword'];
          $uemail=$row['uemail'];
          $utype=$row['utype'];
          $ustatus=$row['ustatus'];
          $flink=$row['flink'];
          $tlink=$row['tlink'];
          $usertype=$row['usertype'];
           $aboutme=$row['aboutme'];




               echo "<form method='post' name='frmedit' action='editdeleteuser.php' >
      <fieldset>
        <legend>User Update</legend>
        <table>
          <tr>
            <td>User Name</td>
            <td>

            <input type='hidden' name='uid' value=$uid />
            <input type='text' name='uname' value=$uname />
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input type='text' name='upassword' value=$upassword />
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td>
              <input type='email' name='uemail' value=$uemail />
            </td>
          </tr>

          <tr>
            <td> Type</td>
            <td>
              <input type='text' name='utype' value=$utype />
            </td>
          </tr>

          <tr>
            <td>User Status</td>
            <td>
              <input type='text' name='ustatus' value=$ustatus />
            </td>
          </tr>

               <tr>
            <td>facebook link</td>
            <td>
              <input type='text' name='flink' value=$flink />
            </td>
          </tr>

         <tr>
            <td>twitter link</td>
            <td>
              <input type='text' name='tlink' value=$tlink />
            </td>
          </tr>
               <tr>
            <td>user Type</td>
            <td>
              <input type='text' name='usertype' value=$usertype />
            </td>
          </tr>

                    <tr>
            <td>about me</td>
            <td>
              <textarea name='aboutme' value=$aboutme /></textarea>
            </td>
          </tr>


          

          <tr>
            <td></td>
            <td>
              <input type='submit' name='submit' value='Update' />
              <input type='reset' name='reset' value='Clear' />
            </td>
          </tr>
        </table>
      </fieldset>
    </form>";

            
        }

       }
       public function userupdate($uid, $uname, $upassword, $uemail, $utype, $ustatus,$flink,$tlink,$usertype,$aboutme)
      {

        $sql7="UPDATE userinfo SET uname= '$uname', upassword='$upassword', uemail='$uemail', utype=$utype, ustatus=$ustatus,flink='$flink',tlink='$tlink',usertype='$usertype',aboutme='$aboutme' WHERE uid=$uid";
      $result = mysqli_query($this->db,$sql7);
      if($result)
      {
        header('location: manageuser.php');
      }
      else
      {
        echo "Editing wrong! Please Try Again";
      }

  
  }
}
 ?>
