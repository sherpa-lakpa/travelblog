<?php
	include_once('db_config.php');

	class Gallery extends dbConnect {





    	public function getAllPictures(){


			$sql3="SELECT * from gallery WHERE  gstatus=1 ORDER BY gid	 DESC LIMIT 0,8 ";
				$result = mysqli_query($this->db,$sql3);

				$c=1;
						while($row=mysqli_fetch_array($result)) {

							 echo '<div class="col-md-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="admin/'.$row['gimage'].'">
										  <figure class="imghvr-shutter-in-out-diag-2">
										  <img src="admin/'.$row['gimage'].'" alt=" " class="img-responsive" style="height:300px;width:400px;"/>
										</figure>
										</a>
									</div>
								</div>';
						}
				}
	


public function Hdisplay(){


			$sql4="SELECT * from gallery WHERE  gtype='hiking' ORDER BY gid	 DESC LIMIT 0, 40 ";
				$result = mysqli_query($this->db,$sql4);

				$c=1;
						while($row=mysqli_fetch_array($result)) {

							 echo '<div class="col-md-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="admin/'.$row['gimage'].'">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="admin/'.$row['gimage'].'" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
								</div>';

						}
				}


public function Tdisplay(){


			$sql5="SELECT * from gallery WHERE  gtype='trekking' ORDER BY gid	 DESC LIMIT 0, 40 ";
				$result = mysqli_query($this->db,$sql5);

				$c=1;
						while($row=mysqli_fetch_array($result)) {

							 echo '<div class="col-md-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="admin/'.$row['gimage'].'">
											<figure class="imghvr-shutter-in-out-diag-2">
											<img src="admin/'.$row['gimage'].'" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
								</div>';

						}
				}

public function Rdisplay(){


			$sql6="SELECT * from gallery WHERE  gtype='Rafting' ORDER BY gid	 DESC LIMIT 0, 40 ";
				$result = mysqli_query($this->db,$sql6);

				$c=1;
						while($row=mysqli_fetch_array($result)) {

							 echo '<div class="col-md-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="admin/'.$row['gimage'].'">
											<figure class="imghvr-shutter-in-out-diag-2">
											<img src="admin/'.$row['gimage'].'" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
								</div>';

						}
				}


			public function Bdisplay(){


			$sql6="SELECT * from gallery WHERE  gtype='Bungee' ORDER BY gid	 DESC LIMIT 0, 40 ";
				$result = mysqli_query($this->db,$sql6);

				$c=1;
						while($row=mysqli_fetch_array($result)) {

							 echo '<div class="col-md-3 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="admin/'.$row['gimage'].'">
											<figure class="imghvr-shutter-in-out-diag-2">
											<img src="admin/'.$row['gimage'].'" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
								</div>';

						}
				}


	}
?>
