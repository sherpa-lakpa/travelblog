<?php
require_once('db_config.php');



class displaydash extends dbConnect {


 public function blogCount(){
          
          $sql4="SELECT * from blog WHERE bid";
      $result = mysqli_query($this->db,$sql4);
          $user_data = mysqli_fetch_array($result);
          $count_row = $result->num_rows;
          echo $count_row;          
      }



 public function userCount(){
          
          $sql2="SELECT * from userinfo WHERE uid";
      $result = mysqli_query($this->db,$sql2);
          $user_data = mysqli_fetch_array($result);
          $count_row = $result->num_rows;
          echo $count_row;          
      }

 public function menuCount(){
          
          $sql3="SELECT * from menu WHERE mid";
      $result = mysqli_query($this->db,$sql3);
          $user_data = mysqli_fetch_array($result);
          $count_row = $result->num_rows;
          echo $count_row;          
      }

       public function teamCount(){
          
          $sql5="SELECT * from team WHERE tid";
      $result = mysqli_query($this->db,$sql5);
          $user_data = mysqli_fetch_array($result);
          $count_row = $result->num_rows;
          echo $count_row;          
      }

 public function serviceCount(){
          
          $sql6="SELECT * from services WHERE sid";
      $result = mysqli_query($this->db,$sql6);
          $user_data = mysqli_fetch_array($result);
          $count_row = $result->num_rows;
          echo $count_row;          
      }

       public function contactCount(){
          
          $sql6="SELECT * from customerinfo WHERE cid";
      $result = mysqli_query($this->db,$sql6);
          $user_data = mysqli_fetch_array($result);
          $count_row = $result->num_rows;
          echo $count_row;          
      }

       public function imageCount(){
          
          $sql7="SELECT * from gallery WHERE gid";
      $result = mysqli_query($this->db,$sql7);
          $user_data = mysqli_fetch_array($result);
          $count_row = $result->num_rows;
          echo $count_row;          
      }




  public function customerinfodisplay()
  {
    $sql2='SELECT * from customerinfo  ORDER BY cid DESC LIMIT 0, 10';
    $result2=mysqli_query($this->db,$sql2);
    while($row=mysqli_fetch_array($result2))
    {
      
  echo' <tr>                                   <th>'.$row['cid'].'</th>                                          <th>'.$row['cname'].'</th>
                                                <th>'.$row['cemail'].'</th>
                                                <th>'.$row['phone'].'</th>
                                                <th>'.$row['cmessage'].'</th>
                                                <th>'.$row['cdate'].'</th>
                                            <th></a>REMOVE<a href="deleteinfo.php?id='.$row['cid'].'&ac=delete">
                                           <span class="glyphicon glyphicon-remove"></span>
                                           </a></th></tr>';
                                          }
                                     }

     


     public function deleteinfo($id)
      {
        $sql5="DELETE from customerinfo WHERE cid=$id";
      $result = mysqli_query($this->db,$sql5);
      if($result)
      { 
        header("location: index.php");
      }
      else
      {
        echo "Something wrong!";
        }
    }


    public function admindetail()
    {
      $a=$_SESSION['uid'];
      $sql6="SELECT *FROM userinfo WHERE uid='$a'";
      $result6=mysqli_query($this->db,$sql6);
      while($row=mysqli_fetch_array($result6))
      {
          echo'
                 <div class="page" >
  <div class="demo">
    <div class="main-container">
      <article class="profile" style="padding:0px;padding-top:30px;">
        <header class="profile__header" style="height:170px;">
          <img src="'.$row['uimage'].'" class="profile__avatar" alt="avatar of Stas Melnikov">
          <h3 class="profile__name">'.$row['uname'].'</h3>

                   
          <span class="profile__post"></span>
        </header>
        <div class="profile__body">
          <div class="profile__row">
            <div class="profile__group">
              <span class="profile__value">'.$row['usertype'].'</span>
              <span class="profile__param">random value</span>
            </div>
            <div class="profile__group">
              <span class="profile__value">random</span>
              <span class="profile__param">'.$row['aboutme'].'</span>
            </div>                              
         
        </div>
        <footer class="profile__footer profile__socials" style="margin-top:-20px;">
          <a href='.$row['tlink'].'  class="cssui-social profile__social">
            <i class="cssui-icon profile__twitter"></i>
            <span class="cssui-social__name">Twitter</span>
          </a>
          <a href='.$row['flink'].' class="cssui-social profile__social">
            <i class=" fa fa-facebook fa-2x "></i>
            <span class="cssui-social__name">facebook</span>
          </a>                        
        </footer>

      </article>
    </div>
  </div>
  </div>';


        }
      }
}
 
?> 