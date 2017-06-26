<?php
include_once('class/db_config.php');
class menu extends dbconnect{

  public function menuDisplay(){

		$sql5='SELECT * from menu WHERE mstatus=1 ORDER BY mid ASC LIMIT 0, 10';
 	$result5=mysqli_query($this->db,$sql5);
 	while($row=mysqli_fetch_array($result5))
		{
	        	echo'
	        	      <li style="margin:0px 20px 0px 30px;">
									<a href="#'.$row['mname'].'" class="scroll" ><span><button type="button" class="btn btn-primary" style="text-transform:capitalize;">'.$row['mname'].'</button></span></a>
								</li>';



	       }
    	}
    }

?>