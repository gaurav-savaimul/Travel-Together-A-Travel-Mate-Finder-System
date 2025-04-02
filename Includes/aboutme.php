 <div class="widget widget-user-about">
                            <div class="widget-heading">
                                <h3 class="widget-title">About Me</h3>
                                <div class="dropdown">
                                    
                                </div>
                            </div>
                            <div class="user-info">
                                <p>      <?php  
  
  $sql = $obj->db->prepare("select * from  profile where user_id='$email' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){
   echo "<strong>Profile Not Updated<br> <center><a href='Update_Profile.php'>Update Profile</a></center></strong>";
   }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
  ?>                              
   <ul class="list-unstyled">
       <li>Current City:  <?php echo $row['from']; ?></li>
       <li>From:  <?php echo $row['lives_in']; ?></li>
       <li>Working as: <?php echo $row['currently_working']; ?> </li>
       
        <li>School:  <?php echo $row['school']; ?> - <?php echo $row['passout']; ?> </li>
          <li>HighSchool:  <?php echo $row['highschool']; ?> -  <?php echo $row['highschool_passout']; ?> </li>
          
        
         <li>Hobby: <?php echo $row['hobby']; ?> </li>
   </ul>
   <?php }} ?></p>
                                
                            </div>
                        </div>
                        