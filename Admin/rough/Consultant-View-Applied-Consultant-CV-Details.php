<?php
include "Includes/session.php";
if(!isset($_GET['id'])){
   echo "<script>window.location='Consultant-View-Applied-Consultant-CV.php';</script>";
}
	
 include 'Application/DB_Functions.php';
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from  consultant where ID='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	if($row['approve']=='1')
	{
	echo "<script>window.location='Consultant-View-Applied-Consultant-CV.php';</script>";
	}
	  
	  
  }
?>
<!DOCTYPE html>
<html class=" ">
<head>
        
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Master Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
          <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <?php include 'Includes/nav-sidebar.php'; ?>
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Consultant Profile</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>
 

                    <div class="col-lg-12">
                        <section class="box nobox">
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-3 col-sm-4 col-xs-12">
 <div class="uprofile-image">
     <img src="assets/images/images (1).png" class="img-responsive">
 </div>
 <?php	
  
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from  consultant where ID='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {			
?>
 <div class="uprofile-name">
     <h3>
         <a href="#"><?php  echo htmlspecialchars($row['first_name']);	?> <?php echo htmlspecialchars($row['last_name']);	?></a>
         <!-- Available statuses: online, idle, busy, away and offline -->
         <span class="uprofile-status online"></span>
     </h3>
     <p class="uprofile-title"> <?php echo htmlspecialchars($row['state']);	?></p>
 </div>
 <div class="uprofile-info">
     <ul class="list-unstyled">
         <li><i class='fa fa-home'></i> <?php echo htmlspecialchars($row['address']); ?> <br>
         &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?php echo htmlspecialchars($row['state']); ?><br>
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?php echo htmlspecialchars($row['city_town']); ?><br>
         &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?php echo htmlspecialchars($row['pincode']); ?>
         </li>
         <li><i class='fa fa-user'></i> <?php echo htmlspecialchars($row['mobile']); ?> </li>
        <!-- <li><i class='fa fa-suitcase'></i> Tech Lead, YIAM</li>-->
     </ul>
 </div>
 
<?php } ?>
                                    </div>
                                    <div class="col-md-9 col-sm-8 col-xs-12">

 <div class="uprofile-content">
     <div class="enter_post col-md-12 col-sm-12 col-xs-12">
     
<?php
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['update']))
{
$ids = $_GET['id'];
if($obj->Approve_Consultant($ids)==1)
{	
echo "<script type='text/javascript'>alert('Consultant Approved Successfully!!  You can check this consultant at Onboard Consultant Section!!');window.location.href='Consultant-View-Applied-Consultant-CV.php';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}
}

?>

<form action="" method="POST">

<button type="submit" name="update" style="float:right;" class="btn btn-primary">Approve this Consultant</button>
</form>
     </div>

     <div class="clearfix"></div>






     <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
        <table class="table">
    <thead>
      <tr>
        <th colspan="2">Consultant Personal Details</th>
       
      </tr>
    </thead>
    <tbody>
      
      <?php	
 
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from  consultant where ID='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {			
?>	<tr>
        <td>Full Name</td>
        <td><?php echo htmlspecialchars($row['first_name']);	?> <?php echo htmlspecialchars($row['middle_name']);	?> <?php echo htmlspecialchars($row['last_name']);	?></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php echo htmlspecialchars($row['gender']);	?> </td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><?php echo htmlspecialchars($row['dob']);	?> </td>
      </tr>
      
      <tr>
        <td>Address</td>
        <td><?php echo htmlspecialchars($row['address']);	?> </td>
      </tr>
      <tr>
        <td>City / Town</td>
        <td><?php echo htmlspecialchars($row['city_town']);	?> </td>
      </tr>
      
      <tr>
        <td>State</td>
        <td><?php echo htmlspecialchars($row['state']);	?> </td>
      </tr>
      
      <tr>
        <td>Country</td>
        <td><?php echo htmlspecialchars($row['country']);	?> </td>
      </tr>
      
        <tr>
        <td>Pincode</td>
        <td><?php echo htmlspecialchars($row['pincode']);	?> </td>
      </tr>
      
      <tr>
        <td>Mobile</td>
        <td><?php echo htmlspecialchars($row['mobile']);	?> </td>
      </tr>
      
       <tr>
        <td>Land Line no</td>
        <td><?php echo htmlspecialchars($row['landline']);	?> </td>
      </tr>
      
       <tr>
        <td>Email</td>
        <td><?php echo htmlspecialchars($row['email']);	?> </td>
      </tr>
      
       <tr>
        <td>Consultant Description</td>
        <td><?php echo htmlspecialchars($row['describe_yourself']);	?> </td>
      </tr>
      
      <?php } ?> 
     
    </tbody>
   
      
  </table>
  
  
         <div class="clearfix"></div>						
     </div>
     
     
     
     
     
     <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
        <table class="table">
    <thead>
      <tr>
        <th colspan="2">Consultant Work Experience</th>
       
      </tr>
    </thead>
    <tbody>
      
      <?php	
 
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from  consultant_work_profile where consultant_id='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {			
?>	<tr>
        <td>Total Experience</td>
        <td><?php echo htmlspecialchars($row['exp_year']);?> Years <?php echo htmlspecialchars($row['exp_month']); ?> Month</td>
      </tr>
      
      <?php } ?>
       <?php	
 
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from  consultant_work_profile where consultant_id='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {			
?>
      
      <tr>
        <td>Department Worked</td>
        <td><?php echo htmlspecialchars($row['department_worked']);	?> </td>
      </tr>
      <tr>
        <td>Designation</td>
        <td><?php echo htmlspecialchars($row['designation']);	?> </td>
      </tr>
      
      <tr>
        <td>Job Profile</td>
        <td><?php echo htmlspecialchars($row['job_profile']);	?> </td>
      </tr>
      <tr>
        <td>Location</td>
        <td><?php echo htmlspecialchars($row['location']);	?> </td>
      </tr>
      
      <tr>
        <td>District</td>
        <td><?php echo htmlspecialchars($row['district']);	?> </td>
      </tr>
      
      <tr>
        <td>State</td>
        <td><?php echo htmlspecialchars($row['state']);	?> </td>
      </tr>
      
        
      <tr><td><td></tr>
      
     
      
      <?php } ?> 
     
    </tbody>
   
      
  </table>
  
  
         <div class="clearfix"></div>						
     </div>
     
     
     
     
     
     
      
     <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
        <table class="table">
    <thead>
      <tr>
        <th colspan="2">Consultant Project Profile</th>
       
      </tr>
    </thead>
    <tbody>
      
    
       <?php	
 
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from   consultant_project_profile where consultant_id='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {			
?>
      
              <tr>
        <td>Project Title</td>
        <td><?php echo htmlspecialchars($row['project_title']);	?> </td>
      </tr>
      <tr>
      <td>Project Duration</td>
        <td><?php echo htmlspecialchars($row['duration_mm']);	?> Months
         <?php echo htmlspecialchars($row['duration_yy']);	?> Years </td>
      </tr>
      
      <tr>
        <td>Project Location</td>
        <td><?php echo htmlspecialchars($row['project_location']);	?> </td>
      </tr>
      <tr>
        <td>Project Details</td>
        <td><?php echo htmlspecialchars($row['project_details']);	?> </td>
      </tr>
      
      <tr>
        <td>Role</td>
        <td><?php echo htmlspecialchars($row['role']);	?> </td>
      </tr>
      
      <tr>
        <td>Role Description</td>
        <td><?php echo htmlspecialchars($row['role_desc']);	?> </td>
      </tr>
      
       <tr>
        <td>Skill Used</td>
        <td><?php echo htmlspecialchars($row['skills_used']);	?> </td>
      </tr>
      
       
      <tr><td><td></tr>
      
     
      
      <?php } ?> 
     
    </tbody>
   
      
  </table>
  
  
         <div class="clearfix"></div>						
     </div>
     
     
     
     
     
     
      
      
     <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
        <table class="table">
    <thead>
      <tr>
        <th colspan="2">Consultant Qualification Details</th>
       
      </tr>
    </thead>
    <tbody>
      
    
       <?php	
 
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from   consultant_qualification where consultant_id='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {			
?>
      
        <tr>
        <td>Graduation</td>
        <td><?php echo htmlspecialchars($row['graduation']);	?> </td>
      </tr>
      <tr>
      
      <tr>
        <td> Graduation Specialization</td>
        <td><?php echo htmlspecialchars($row['graduation_specialization']);	?> </td>
      </tr>
      <tr>
      
       <tr>
        <td> Graduation University</td>
        <td><?php echo htmlspecialchars($row['graduation_university']);	?> </td>
      </tr>
      <tr>
      
      <tr>
        <td> Graduation Year</td>
        <td><?php echo htmlspecialchars($row['graduation_year']);	?> </td>
      </tr>
      <tr>
      
      
       <tr>
        <td> Post Graduation</td>
        <td><?php echo htmlspecialchars($row['post_graduation']);	?> </td>
      </tr>
      <tr>
      
       <tr>
        <td> Post Graduation Specialization</td>
        <td><?php echo htmlspecialchars($row['post_graduation_specialization']);	?> </td>
      </tr>
      <tr>
      
      <tr>
        <td> Post Graduation University</td>
        <td><?php echo htmlspecialchars($row['post_graduation_university']);	?> </td>
      </tr>
      <tr>
      
       <tr>
        <td> Post Graduation University</td>
        <td><?php echo htmlspecialchars($row['post_graduation_university']);	?> </td>
      </tr>
      <tr>
      
       <tr>
        <td> Post Graduation Year</td>
        <td><?php echo htmlspecialchars($row['post_graduation_year']);	?> </td>
      </tr>
      <tr>
      
      
      <tr>
        <td>PHD / Doctorate</td>
        <td><?php echo htmlspecialchars($row['phd']);	?> </td>
      </tr>
      <tr>
      
      <tr>
        <td>PHD Specialization</td>
        <td><?php echo htmlspecialchars($row['phd_specialization']);	?> </td>
      </tr>
      <tr>
      
      <tr>
        <td>PHD University</td>
        <td><?php echo htmlspecialchars($row['phd_university']);	?> </td>
      </tr>
      <tr>
      
       <tr>
        <td>PHD Year</td>
        <td><?php echo htmlspecialchars($row['phd_year']);	?> </td>
      </tr>
      <tr>
      
      <tr>
        <td>Civil Service Exam</td>
        <td><?php echo htmlspecialchars($row['civil_service_exam']);	?> </td>
      </tr>
      <tr>
      
      
       <tr>
        <td></td>
        <td><?php echo htmlspecialchars($row['civil_service_exam']);	?> </td>
      </tr>
      <tr>
      
      <tr>
        <td>Civil Service Exam Year</td>
        <td><?php echo htmlspecialchars($row['civil_service_exam_year']);	?> </td>
      </tr>
      <tr>
      
      <tr>
        <td>Certificate Attachment</td>
        <td><a href="assets/Consultant_data/certificate/<?php echo $row['certificate_attachment']; ?>" download>Download Attachment</a> </td>
      </tr>
      <tr>


<tr>
        <td>Languages Known</td>
        <td><?php echo $row['languages_known_one'];	?> 
        &nbsp;  &nbsp;  &nbsp;
        Read
        <?php if($row['languages_known_one_read']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
        
         Write
         <?php if($row['languages_known_one_write']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
                
                
          Speak
          <?php if($row['languages_known_one_speak']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
           <br><br>
           
           <?php echo $row['languages_known_two'];	?> 
        &nbsp;  &nbsp;  &nbsp;
        Read
         <?php if($row['languages_known_two_read']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
         Write
        <?php if($row['languages_known_two_write']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
          Speak
          <?php if($row['languages_known_two_speak']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
           
            <br><br>
           <?php echo $row['languages_known_three'];	?> 
        &nbsp;  &nbsp;  &nbsp;
        Read
         <?php if($row['languages_known_three_read']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
         Write
           <?php if($row['languages_known_three_write']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
          Speak
           <?php if($row['languages_known_three_speak']='1'){ ?>
			 <img src="assets/images/images.png">
			<?php }else{ ?>
				 <img src="assets/images/wrong-01-512.png">
				<?php } ?>
         
         </td>
      </tr>
      <tr>      
      
      
      
      
      <td>Category</td>
        <td><?php echo $row['category'];	?> 
     </td>
      </tr>
      
      <tr>
        <td>Physically Challenged</td>
        <td><?php echo $row['physically_challenged'];	?> 
        
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
        <?php if(!empty($row['physically_challenged_explain'])){
			echo $row['physically_challenged_explain'];
			} ?>
        </td>
      </tr>
     
      
       
      <tr><td><td></tr>
      
     
      
      <?php } ?> 
     
    </tbody>
   
      
  </table>
  
  
         <div class="clearfix"></div>						
     </div>
     
     
     
     
     
       
     <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
        <table class="table">
    <thead>
      <tr>
        <th colspan="2">Consultant Attachments</th>
       
      </tr>
    </thead>
    <tbody>
      
    
       <?php	
 
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from consultant_attachments where consultant_id='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {			
?>
      
              <tr>
        <td>Consultant CV</td>
        <td><a href="assets/Consultant_data/cv/<?php echo $row['cv']; ?>">CV Attachment Download</a> </td>
      </tr>
      <tr>
      <td>Consultant Details</td>
        <td>
        <a href="assets/Consultant_data/details/<?php echo $row['files']; ?>">Consultant Details Attachment</a>
         </td>
      </tr>
      
      
       
      <tr><td><td></tr>
      
     
      
      <?php } ?> 
     
    </tbody>
   
      
  </table>
  
  
         <div class="clearfix"></div>						
     </div>
     
     
     
     
     
     <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
        <table class="table">
    <thead>
      <tr>
        <th colspan="2">Consultant State and Department</th>
       
      </tr>
    </thead>
    <tbody>
      
    
       <?php	
 
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from consultant_state_department where consultant_id='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {			
?>
      
              <tr>
        <td>Consultant State</td>
        <td><?php echo $row['state']; ?> </td>
      </tr>
      <tr>
      <td>Consultant Department</td>
        <td>
       <?php echo $row['department']; ?>
         </td>
      </tr>
      
      
       
      <tr><td><td></tr>
      
     
      
      <?php } ?> 
     
    </tbody>
   
      
  </table>
  
  
         <div class="clearfix"></div>						
     </div>
     
     
     
     
     
     
     
     
     
     
     
 


 </div>
</div>
                                </div>
                            </div>
                        </section></div>


                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 


        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
        
        
        <div class="modal fade" id="ultraModal-4" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Confirmation Box!!</h4>
              </div>
              <div class="modal-body">

                 <h3> Admin Registered Successfully!! </h3>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
        
        
    </body>

<!-- Mirrored from jaybabani.com/ultra-admin/ui-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 10:35:31 GMT -->
</html>



