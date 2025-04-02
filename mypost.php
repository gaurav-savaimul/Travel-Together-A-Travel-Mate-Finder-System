<?php 
include "includes/session.php"; 
 ?><!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Together | Social Community HTML Template</title>
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
                        
                        <br><br>

  <div class="enter_post col-md-12 col-sm-12 col-xs-12">

       <div class="form-group">
           <div class="controls">
           <form method="POST" action="" enctype="multipart/form-data">
               <textarea class="form-control autogrow" id="field-7"  placeholder="What's on your mind? Share any Travel Story with us!" name="post"></textarea> <br>
                <textarea class="form-control autogrow" id="field-7"  placeholder="What's on your mind? Share Youtube Video Link" name="vidpost"></textarea> <br>

<input type="radio" name="types" value="Private" style="height: 60px; width:50px;">Private Post (Only your friends can see)
<input type="radio" name="types" value="Public" style="height: 60px;width:50px;">Public Post (All Members can see)
               <br><br>
               <input type="file" name="file">
               
           </div>
       </div>
       <div class="enter_post_btns col-md-12 col-sm-12 col-xs-12">
           <input type="submit" class="btn btn-md pull-right btn-primary btn-block" value="POST">
           </div>
   </div></form>


<br><br>

<?php 
 $email=$_SESSION['email'];

 
  $sql1 = $obj->db->prepare("select * from  wall where sender_id='$email' ORDER BY ID DESC");
  $sql1->execute();
  while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)){
      $kk=$email; $post_id=$row1['ID']; ?>
     
   <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
       <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
          <?php                               
           $sender_id=$row1['sender_id'];
  $sql = $obj->db->prepare("select * from  profile where user_id='$sender_id' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){ ?>
     <img src="assets/images/images (1).png" class="img-responsive">
      <?php }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
         <img src="assets/images/pro_pic/<?php echo $row['pic'];  ?>" class="img-responsive">  <?php }} ?>
       </div>
       <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">                 
           <div class="username">
               <span class="bold"> <?php $sql3 = $obj->db->prepare("select * from  user where email='$sender_id' ");
  $sql3->execute();
  while($row3 = $sql3->fetch(PDO::FETCH_ASSOC)) {
      echo $row3['first_name']; echo $row3['last_name'];}
 ?></span>  
           </div>
           <div class="info text-muted">
             <strong> <?php echo $row1['message']; ?></strong>
              <br>  <br>

               <?php if(!empty($row1['videolink'])){ ?>
               <?php echo $row1['videolink']; ?>

               <?php }else{ ?>
                  <img src="assets/images/post/<?php echo $row1['pic']; ?>" height="400" width="400">
              <?php  } ?>


           </div>   
           <div class="info-details">
               <ul class="list-unstyled list-inline">
                   <li><a href="#" class="text-muted"> <?php echo $row1['uploaded_time']; ?>   <?php echo $row1['uploaded_date']; ?></a></li>
                 
                   
                  
               </ul>

           </div>
           <div class="clearfix"></div>
           
           
           
           
           <?php $sql4 = $obj->db->prepare("select * from  comment where post_id='$post_id' ORDER BY ID DESC LIMIT 2");
  $sql4->execute();
  while($row4 = $sql4->fetch(PDO::FETCH_ASSOC)) {
      
           ?>
           <div class="comment">
               <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
               
               
               
    <?php                               
           $sender_id=$row4['post_by_id'];
  $sql = $obj->db->prepare("select * from  profile where user_id='$sender_id' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){ ?>
     <img src="assets/images/images (1).png" data-src="assets/images/images (1).png" src="data/profile/avatar-3.png" alt="">
      <?php }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
         <img src="assets/images/pro_pic/<?php echo $row['pic'];  ?>" data-src="assets/images/pro_pic/<?php echo $row['pic'];  ?>" src="data/profile/avatar-3.png" alt="">  <?php }} ?>            
               
               
               
               </div>
               <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">                 
                   <div class="username">
                       <span class="bold">
                        <?php echo $row4['posted_by']; ?></span> 
                   </div>
                   <div class="info text-muted">
                      <?php echo $row4['comment']; ?>
                   </div>   
                   <div class="info-details">
                       <ul class="list-unstyled list-inline">
                          
                            <li>
   <a href="#" class="text-muted"> <?php echo $row4['time']; ?>  <?php echo $row4['date']; ?></a></li>
                       </ul>
                   </div>

               </div>   
               <div class="clearfix"></div>                     
           </div>
           
           <?php } ?>
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
          

           <div class="comment comment-input">                          

               <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                   <img data-src-retina="data/profile/profile.png" data-src="data/profile/profile.png" src="data/profile/profile.png" alt="">
               </div>
               <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">                 
                   <div class="input-group primary  col-md-6">
                   
                  <form  method="post" name="form" action="">
                  <input type="hidden" name="idd" value="<?php echo $post_id; ?>">
<textarea style="width:500px; font-size:14px; height:60px; border:2px solid gray; font-weight:bold; resize:none;" name="content" id="content" class="form-control" placeholder="Post a comment"></textarea><br />
<input type="submit" value="Post" name="submit" class="submit_button btn btn-primary btn-block"/>
</form>    

                   </div>
               </div>
           </div>

       </div>   
       <div class="clearfix"></div>                     
   </div>

<?php  } ?>


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


<?php
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['post']))
{
$post = $_POST['post'];
$vidpost = $_POST['vidpost'];

$types= $_POST['types'];

$file=$_FILES['file']['name'];
$email=$_SESSION['email'];
 $first_name=$_SESSION['name'];
 $date=date("d")."-".date("m")."-".date("Y");
  date_default_timezone_set("Asia/Kolkata"); 
    $time=date('h:i a '); 
    
if($obj->insert_post($email,$first_name,$file,$post,$time,$date,$types,$vidpost)==1)
{   
 
 echo "<script>window.location='mypost.php';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}
}





$obj= new Connections(); 

if(isset($_POST['idd']))
{
$idd = $_POST['idd'];
$content=$_POST['content'];
$email=$_SESSION['email'];
 $first_name=$_SESSION['name'];
 $date=date("d")."-".date("m")."-".date("Y");
  date_default_timezone_set("Asia/Kolkata"); 
    $time=date('h:i a '); 

if($obj->insert_coment($idd,$content,$email,$first_name,$time,$date)==1)
{   
 
 echo "<script>alert('Your Comment Posted!!');window.location='mypost.php';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}
}
?>


