<div class="fixed-sidebar">
            <div class="fixed-sidebar-left small-sidebar">
                <div class="sidebar-toggle">
                    <button class="toggle-btn toggler-open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="sidebar-menu-wrap">
                    <div class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">
                        <ul class="side-menu">
                           
                            <li><a href="travel_group.php" class="menu-link" data-toggle="tooltip" data-placement="right" title="Travel Group"><i class="icofont-users-alt-2"></i></a></li>

                             <li><a href="public_post.php" class="menu-link" data-toggle="tooltip" data-placement="right" title="Public Post"><i class="icofont-newspaper"></i></a></li>


                           
                            <li><a href="dashboard.php" class="menu-link" data-toggle="tooltip" data-placement="right" title="Friends Post"><i class="icofont-users-alt-4"></i></a></li>
                             <li><a href="my-group.php" class="menu-link" data-toggle="tooltip" data-placement="right" title="Group Chat"><i class="icofont-users-alt-2"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="fixed-sidebar-left large-sidebar">
                <div class="sidebar-toggle">
                    <div class="sidebar-logo">
                        <a href="dashboard.php"><img src="new/media/logo2.png" alt="Logo"></a>
                    </div>
                    <button class="toggle-btn toggler-close">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="sidebar-menu-wrap">
                    <div class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">
                        <ul class="side-menu">
                            <li><a href="travel_group.php" class="menu-link"><i class="icofont-newspaper"></i><span class="menu-title">Travel Group</span></a></li>
                            <li><a href="public_post.php" class="menu-link"><i class="icofont-list"></i><span class="menu-title">Public Post</span></a></li>
                            <li><a href="dashboard.php" class="menu-link"><i class="icofont-users-alt-2"></i><span class="menu-title">Friends Post</span></a></li>
                            <li><a href="my-group.php" class="menu-link"><i class="icofont-users-alt-4"></i><span class="menu-title">Group Chat</span></a></li>
                        
                        </ul>
                        <ul class="top-menu-mobile">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>


          <!-- Sidebar Right -->
        
        <!-- Page Content -->
        <div class="page-content">

            <!--=====================================-->
            <!--=        Newsfeed  Area Start       =-->
            <!--=====================================-->
            <div class="container">
                <!-- Banner Area Start -->
               

                                 



                <div class="banner-user">
                    <div class="banner-content">
                        <div class="media">
                            <div class="item-img">
                                <?php       $obj= new Connections();
  $email=$_SESSION['email'];
  $sql = $obj->db->prepare("select * from  profile where user_id='$email' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){ 
    $livesin=$row['lives_in']; ?>

   <img src="assets/images/images (1).png" class="img-responsive" style="height:100px; width:100px;">
    <?php }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
     <img src="assets/images/pro_pic/<?php echo $row['pic']; ?>" class="img-responsive" style="height:100px; width:100px;"><?php 
    }}
    
    ?>
                            </div>
                            <div class="media-body">
                                <h3 class="item-title"> <?php 
  $obj= new Connections();
  $email=$_SESSION['email'];
  $sql = $obj->db->prepare("select * from  user where email='$email'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name']; echo " "; echo $row['last_name']; }
  ?> </h3>
                                <div class="item-subtitle"><?php if(!empty($livesin)){echo $livesin;} ?></div>
                                <ul class="item-social">
                               
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>



                <div class="block-box user-top-header">
                    <ul class="menu-list">
                         <li class=""><a href="dashboard.php">Dashboard</a></li>
                        <li class=""><a href="view-profile.php">My Profile</a></li>
                      
                       
                        <li><a href="mypost.php">My Post</a></li>
                        <li><a href="my-friends.php">My Friends</a></li>
                        <li><a href="search.php">Search Friends</a></li>
                        <li><a href="view-request.php">Accept Friends</a></li>
                        <li><a href="message.php">Messages</a></li>

                        
                         <li><a href="create-group.php">Plan a Tour</a></li>
                         <li><a href="my-group.php">My Plan</a></li>
                        <li><a href="Update_Profile.php"> Update Profile</a></li>
                       
                    </ul>
                </div>