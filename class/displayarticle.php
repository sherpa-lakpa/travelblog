<?php
require_once('db_config.php');

class display extends dbConnect{


	public function Aboutdisplay()
	{
		$sql1="SELECT *from menu WHERE mparent=0 AND mname='about'";
		$result1=mysqli_query($this->db,$sql1);
		while($row=mysqli_fetch_array($result1))
	{
echo $row['mdescription'];
  	}
}























}