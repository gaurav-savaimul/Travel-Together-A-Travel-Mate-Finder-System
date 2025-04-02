<?php 
include "includes/session.php"; 
 ?><!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Buddy | Social Community HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="new/new/media/favicon.png">
    <link rel="stylesheet" href="new/dependencies/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="new/dependencies/icofont/icofont.min.css">
    <link rel="stylesheet" href="new/dependencies/slick-carousel/css/slick.css">
    <link rel="stylesheet" href="new/dependencies/slick-carousel/css/slick-theme.css">
    <link rel="stylesheet" href="new/dependencies/magnific-popup/css/magnific-popup.css">
    <link rel="stylesheet" href="new/dependencies/sal.js/sal.css" type="text/css">
    <link rel="stylesheet" href="new/dependencies/select2/css/select2.min.css" type="text/css">
   

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="new/assets/css/app.css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">

</head>

<body class="bg-link-water">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="icofont-bubble-up"></i>
    </a>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Top Header -->
        
        <!-- Sidebar Left -->
       
        <?php  include "includes/top-bar.php"; ?>
         <?php  include "includes/nav-sidebar.php"; ?>
      
                <div class="row">
                    <div class="col-lg-8" style="background-color: white; border-radius: 10px;">
                                              
        <!-- FORM START FROM HERE FOR INSERTING --->  
     <?php  $obj= new Connections();
   $id=$_GET['id'];
 $sql3 = $obj->db->prepare("select * from  user where ID='$id'");
  $sql3->execute();
     $sql3->rowCount();
  while($row3 = $sql3->fetch(PDO::FETCH_ASSOC)){ $Usersid=$row3['ID'];
  
  $mailid=$row3['email'];
    ?>
        <tbody>
       <td>
       
       <?php
       $sql4 = $obj->db->prepare("select * from  profile where user_id='$mailid' ORDER BY ID DESC LIMIT 1");
  $sql4->execute();
     if($sql4->rowCount()=="0"){
    ?>No Details Available<?php 
   }else{
  while($row4 = $sql4->fetch(PDO::FETCH_ASSOC)){
 
  
?>   <?php
   
    ?><img src="assets/images/pro_pic/<?php echo $row4['pic'] ?>"  style="height:400px; width:300px;"><?php
    
       
       ?>  
        
  
       
       
     
    <?php  ?>        
          <div class="col-md-7 col-sm-7 col-xs-7" style="float:right;">

  

  <div class="form-group">
      <label class="form-label" for="field-2">Name</label>
    
      <div class="controls">
     <?php echo $row3['first_name']; ?>  <?php echo $row3['last_name']; ?>
 
      </div>
  </div>
  
  
  
   <label class="form-label" for="field-2">Email</label>
    
      <div class="controls">
    <?php echo $row3['email']; ?> 
      </div>
  
  
  
  
  
  
  
  <div class="form-group">
      <label class="form-label" for="field-2">Contact </label>
    
      <div class="controls">
         <?php echo $row3['contact']; ?> 
      </div>
  </div>
  <div class="form-group">
      <label class="form-label" required for="field-2">Date of Birth</label>
    
      <div class="controls">
           <?php echo $row3['dob']; ?> 
      </div>
  </div>
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2">School</label>
    
      <div class="controls">
           <?php echo $row4['school']; ?>   Passout: <?php echo $row4['passout']; ?> 
      </div>
  </div>
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2">Highschool</label>
    
      <div class="controls">
           <?php echo $row4['highschool']; ?>   Passout: <?php echo $row4['highschool_passout']; ?> 
      </div>
  </div>
  
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2">Highschool</label>
    
      <div class="controls">
           <?php echo $row4['highschool']; ?>   Passout: <?php echo $row4['highschool_passout']; ?> 
      </div>
  </div>
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2">Currently Working</label>
    
      <div class="controls">
           <?php echo $row4['currently_working']; ?>   
      </div>
  </div>
  
  
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2">Lives in</label>
    
      <div class="controls">
           <?php echo $row4['lives_in']; ?>   
      </div>
  </div>
 
 
 
 
  
  <div class="form-group">
      <label class="form-label" required for="field-2">From</label>
    
      <div class="controls">
           <?php echo $row4['from']; ?>   
      </div>
  </div>
  
  
  
 
  
  <div class="form-group">
      <label class="form-label" required for="field-2">Hobby</label>
    
      <div class="controls">
           <?php echo $row4['hobby']; ?>   
      </div>
  </div>
        
           <!-- FORM END FROM HERE FOR INSERTING --->  
      </div>







  <?php  }
       
  }} ?>


                     
</div>
               

                    <div class="col-lg-4 widget-block widget-break-lg">
                       <?php include "Includes/aboutme.php"; ?>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            <!--=====================================-->
            <!--=        Footer Area Start        =-->
            <!--=====================================-->
            <footer class="footer-wrap footer-dashboard">
               <?php include "Includes/insidefooter.php"; ?>
            </footer>



        </div>
        <!-- Chat Modal Here -->
        
    </div>
 <script src="new/dependencies/jquery/js/jquery.min.js"></script>
    <script src="new/dependencies/popper.js/js/popper.min.js"></script>
    <script src="new/dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="new/dependencies/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
    <script src="new/dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
    <script src="new/dependencies/slick-carousel/js/slick.min.js"></script>
    <script src="new/dependencies/sal.js/sal.js"></script>
    <script src="new/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="new/dependencies/bootstrap-validator/js/validator.min.js"></script>
    <script src="new/dependencies/select2/js/select2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>

    <!-- Site Scripts -->
    <script src="new/assets/js/app.js"></script>
</body>

</html>
