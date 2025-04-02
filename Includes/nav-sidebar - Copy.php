  <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">


                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

 <!-- USER INFO - START -->
 <div class="profile-info row">

    
     <div class="profile-details col-md-8 col-sm-8 col-xs-8">

       
     </div>

 </div>
 <!-- USER INFO - END -->

<div class="uprofile-info">
     <center>                                   
     <?php       $obj= new Connections();
  $email=$_SESSION['email'];
  $sql = $obj->db->prepare("select * from  profile where user_id='$email' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){ ?>
	 <img src="assets/images/images (1).png" class="img-responsive" style="height:100px; width:100px;">
	  <?php }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
		 <img src="assets/images/pro_pic/<?php echo $row['pic']; ?>" class="img-responsive" style="height:100px; width:100px;"><?php 
	  }}
	  
	  ?>
	                               
 <h3>   <?php	
  $obj= new Connections();
  $email=$_SESSION['email'];
  $sql = $obj->db->prepare("select * from  user where email='$email'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	  echo $row['first_name']; echo " "; echo $row['last_name']; }
	?> 
        </h3>                                  
                                        
                                        
           <?php	
  
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
   <?php }} ?></center>  
                                        </div>

 <ul class='wraplist'>	


     <li> 
         <a href="dashboard.php">>>
             <span class="title">Home</span>
         </a>
     </li>
          
     <li> 
         <a href="Search_friend.php">>>
             <span class="title">Search Friends</span>
         </a>
     </li>
     
     <li> 
         <a href="View-request.php">>>
             <span class="title">Accept Friends</span>
         </a>
     </li>
     
       <li> 
         <a href="my-friends.php">>>
             <span class="title">My Friends </span>
         </a>
     </li>
     
     <li> 
         <a href="my-post.php">>>
             <span class="title">My Post </span>
         </a>
     </li>
     
     
       <li> 
         <a href="message.php">>>
             <span class="title">Message</span>
         </a>
     </li>
     
     
     
      <li> 
         <a href="Update_Profile.php">>>
             <span class="title">Update Profile</span>
         </a>
     </li>
     
      <li> 
         <a href="Change_password.php">>>
             <span class="title">Change Password</span>
         </a>
     </li>
    <!--   <li> 
         <a href="recommend.php">>>
             <span class="title">Upload Ad</span>
         </a>
     </li>-->
    
    
 </ul>

                </div>
                <!-- MAIN MENU - END -->
            


            </div>

            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
         <style>* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}</style>