
<?php
require_once('db_config.php');
ob_start ();

  class customerinfo extends dbConnect
  {
    public function infoRegister($cname,$cemail,$phone,$cmessage,$cdate)
   {
      $sql0="SELECT * from customerinfo WHERE cname='$cname'OR cemail='$cemail'";
      $result0=mysqli_query($this->db,$sql0);
      $user_data0=mysqli_fetch_array($result0);
      $count_row0=$result0->num_rows;
      if($count_row0==0)
      {
        $sql1="INSERT INTO customerinfo SET cname= '$cname',cemail ='$cemail', phone='$phone', cmessage='$cmessage',cdate='$cdate'";
        $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
         }
  
  }




}