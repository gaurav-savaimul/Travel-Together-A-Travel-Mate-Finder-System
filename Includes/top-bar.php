<?php include 'Application/DB_Functions.php';   $obj= new Connections();
 ?>
 <header class="fixed-header">
            <div class="header-menu">
                <div class="navbar">
                    <div class="nav-item d-none d-sm-block">
                        <div class="header-logo">
                            <a href="dashboard.php"><img src="new/media/logo.png" alt="Cirkle"></a>
                        </div>
                    </div>
                    <div class="nav-item nav-top-menu">
                        <nav id="dropdown" class="template-main-menu">
                            <ul class="menu-content">
                                <li class="header-nav-item">
                                    <a href="dashboard.php" class="menu-link active">Home</a>
                                </li>
                              
                                   
                        </nav>
                    </div>
                    <div class="nav-item header-control">
                        <div class="inline-item d-none d-md-block">
                           
                        </div>
                        
                        <div class="inline-item">
                            <div class="dropdown dropdown-admin">
                                

                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <span class="media">
                                        <span class="item-img">
                                          

                                     
                                <?php       $obj= new Connections();
  $email=$_SESSION['email'];
  $sql = $obj->db->prepare("select * from  profile where user_id='$email' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){ ?>
   <img src="assets/images/images (1).png" class="img-responsive" style="height:40px; width:40px;">
    <?php }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
     <img src="assets/images/pro_pic/<?php echo $row['pic']; ?>" class="img-responsive" style="height:40px; width:40px;"><?php 
    }}
    
    ?>


     
                                            <span class="acc-verified"><i class="icofont-check"></i></span>
                                        </span>
                                        <span class="media-body">
                                            <span class="item-title">
                                            <?php 
  $obj= new Connections();
  $email=$_SESSION['email'];
  $sql = $obj->db->prepare("select * from  user where email='$email'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name']; }
  ?> 


</span>
                                        </span>
                                    </span>
                                </button>




                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="admin-options">
                                        <li><a href="view-profile.php">My Profile</a></li>
                                        <li><a href="user-groups.html">Change Password</a></li>
                                     
                                        <li><a href="logout.php">Log Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>