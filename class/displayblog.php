<?php
require_once('class/db_config.php');

class displayB extends dbConnect {


public function slideDisplay()
{
  $sql1='SELECT * from blog WHERE bstatus=1 ';
  $result1 = mysqli_query($this->db,$sql1);
  while($row=mysqli_fetch_array($result1))
  {
  		echo'<li>			
			<div class="wthree-banner-grids">
				<div class="col-md-6 agileits-banner-left">
					<h3>'.$row['btitle'].'</h3>
					<h4>.....</h4>
				</div>
				<div class="col-md-6 agileinfo-banner-right">
					<p>'.$row['bshort'].'</p>
					<div class="banner-border"> </div>
					<div class="w3-button">
						<a href="#" data-toggle="modal" data-target="#myModal'.$row['bid'].'">Read More</a>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</li>';			
			}
		}

public function titleDisplay()
{
  $sql1='SELECT * from blog WHERE bstatus=1 ';
  $result1 = mysqli_query($this->db,$sql1);
  while($row=mysqli_fetch_array($result1))
  {
  echo"<div class='col-md-4 agile-blog-grid' style='height:500px;overflow:hidden;margin:3px 0px 3px 0px;box-shadow:0px 1px 4px gray;padding-top:10px;'>
					<div class='agile-blog-grid-img'>
						<a href='#' data-toggle='modal' data-target='#myModal".$row['bid']."''>
						<img src='admin/".$row['bimage']."' alt='' / style='height:200px;'></a>
						<a href='#' data-toggle='modal' data-target='#myModal".$row['bid']."'>".$row['btitle']."</a>
						<p>Posted By <a href='#'>Admin</a> &nbsp;&nbsp; date:".$row['bdate']."; <a href='#'>Comments (07)</a></p>	
					</div>
					<div class='agile-blog-grid-info'>
						<p>".$row['bdescription']."</p>
					</div> 
				</div>";			
			}
		}
	
	public function fullblogdisplay()
	{
		$sql2='SELECT * from blog WHERE bstatus=1';
		$result2=mysqli_query($this->db,$sql2);
		while($row=mysqli_fetch_array($result2))
		{
			
	echo'<div class="modal about-modal fade" id="myModal'.$row['bid'].'" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Lets Hike</h4>
					</div> <div class="modal-body" >
					<div class="agileits-w3layouts-info">
						<img src="admin/'.$row['bimage'].'" alt="" />
						<p>'.$row['bfull'].'</p>
					</div>
				</div>
				</div>
		</div>
	</div>';
}
}

 public function topdisplay()
 {
 	$sql3='SELECT * from blog WHERE bstatus=1 ORDER BY mid ASC LIMIT 0, 2';
 	$result3=mysqli_query($this->db,$sql3);
 	while($row=mysqli_fetch_array($result3))
		{
   echo	'<ul class="rslides callbacks callbacks1" id="slider4">
								<li>	
									<div class="wthree-banner-grids">
										<div class="col-md-6 agileits-banner-left">
											<h3>'.$row['btitle'].'</h3>
										</div>
										<div class="col-md-6 agileinfo-banner-right">
											<p>'.$row['bshort'].'</p>
											<div class="banner-border"> </div>
											<div class="w3-button">
												<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
							</ul>';
 }
}


 public function servicedisplay()
 {
 	$sql4='SELECT * from services WHERE sstatus=1 ORDER BY sid ASC LIMIT 0, 6';
 	$result4=mysqli_query($this->db,$sql4);
 	while($row=mysqli_fetch_array($result4))
		{
   echo'   <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">#service pack'.$row['sid'].' </h4>
                            <p>
                             '.$row['sdescription'].'
                                </p>
                             
                             <span class="label label-danger">$'.$row['scost'].'</span>
                             <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal'.$row['sid'].'">read more</button>
                        </div>
                    </div> 
                            
                    </div>';
                }
            }
          

 public function mservicedisplay()
 {
 	$sql5='SELECT * from services WHERE sstatus=1 ORDER BY sid ASC LIMIT 0, 6';
 	$result5=mysqli_query($this->db,$sql5);
 	while($row=mysqli_fetch_array($result5))
		{
   echo' <!-- Modal -->
  <div class="modal fade" id="myModal'.$row['sid'].'" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">'.$row['sname'].'</h4>
        </div>
        <div class="modal-body">
        <img src="admin/'.$row['simage'].'" alt="" / style="height:400px;">
          <p>'.$row['sfulldescription'].'</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>';
		
		}
	}



public function teamdisplay()
 {
 	$sql6='SELECT * from team WHERE tstatus=1 ORDER BY tid DESC LIMIT 0, 4';
 	$result6=mysqli_query($this->db,$sql6);
 	while($row=mysqli_fetch_array($result6))
		{
   echo' 	<div class="col-md-3 wthree-team-grid">
					<img src="admin/'.$row['timage'].'" alt="" >
					<div class="wthree-team-grid-info">
						<h4>'.$row['tname'].'</h4>
						<p>'.$row['tdegisnation'].'</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="'.$row['facebooklink'].'"><i class="fa fa-facebook"></i></a></li>
								<li><a href="'.$row['twitterlink'].'"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>';
			}
		}
	}

