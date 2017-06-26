 <?php
 session_start();
 	 $uid = $_SESSION['uid'];
         if ($uid=='')
         {
      		 header("location:userLogin.php");
      		}
  ?> 