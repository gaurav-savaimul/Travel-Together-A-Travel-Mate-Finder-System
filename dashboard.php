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
                    <div class="col-lg-8">
                        
                        






<?php 
$obj= new Connections();

 $email=$_SESSION['email'];
  $sql2 = $obj->db->prepare("select * from  friends_request where sender='$email' OR receiver='$email'");
  $sql2->execute();
    if($sql2->rowCount()!="0"){
  while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)){ 
   $namesArray[] = array( 
        'code' => $row2['ID']
        
    );
     
  }foreach(array_reverse($namesArray) as $index => $record){
     "ID: {$record['code']}";
}
 
 
 
 
 
 
 
 
 
    
 $sql4= $obj->db->prepare("select * from  wall GROUP BY sender_id");
  $sql4->execute();
  while($row4 = $sql4->fetch(PDO::FETCH_ASSOC)){
      $post_id=$row4['ID'];
 $sql2 = $obj->db->prepare("select * from  friends_request where sender='$email' OR receiver='$email'");
  $sql2->execute();
    $sql2->rowCount();
  while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)){ 
 if($row2['status']=="1"){
 if($row2['sender']=="$email"){
       $mailid=$row2['receiver'];
     }else{
            $mailid=$row2['sender'];
         }
         
  if($row4['sender_id']=="$mailid"){
 
   $row4['sender_id'];
   
    
  $sql1 = $obj->db->prepare("select * from  wall where sender_id='$mailid'");
  $sql1->execute();
  while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)){
      
      $namesArray[] = array( 
        'code' => $row1['ID']
       );
      
    
    
     
        
  }}}}}
  
arsort($namesArray);
 
 
 foreach($namesArray as $index => $record){
      $kk=$record['code'];

 
 
  $sql1 = $obj->db->prepare("select * from  wall where ID='$kk'");
  $sql1->execute();
  while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)){ ?>
     
          <?php                               
           $sender_id=$row1['sender_id'];
  $sql = $obj->db->prepare("select * from  profile where user_id='$sender_id' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){ ?>
  
      <?php }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
         <?php  $mainpic=$row['pic'];  ?> 

     <?php }} ?>
      <?php $sql3 = $obj->db->prepare("select * from  user where email='$sender_id' ");
  $sql3->execute();
  while($row3 = $sql3->fetch(PDO::FETCH_ASSOC)) {
       $first_name=$row3['first_name'];  $last_name=$row3['last_name'];}
 ?>
                       



                       <div class="block-box post-view">
                            <div class="post-header">
                                <div class="media">
                                    <div class="user-img">
                                      <img src="assets/images/pro_pic/<?php echo $mainpic;  ?>" style="    height: 46px;
    width: 44px;  border-radius:50%; border:2px solid red; padding: 3px;" alt="Aahat">
                                    </div>
                                    <div class="media-body">
                                        <div class="user-title"><?php echo $first_name; echo " ".$last_name; ?></div>
                                        <ul class="entry-meta">
                                            <li class="meta-privacy"><i class="icofont-world"></i>Friends Post</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="post-body">
                                <p> <?php echo $row1['message']; ?></p>
                                <div class="post-img">
                                  <?php if(!empty($row1['videolink'])){ ?>
               <?php echo $row1['videolink']; ?>

               <?php }else{ ?>
                  <img src="assets/images/post/<?php echo $row1['pic']; ?>"style="width:100%;" >
              <?php  } ?>
                                      </div>
                                <div class="post-meta-wrap">
                                    <div class="post-meta">
                                        <div class="post-reaction">
                                           
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="post-footer">
                               

           <?php $sql4 = $obj->db->prepare("select * from  comment where post_id='$kk' ORDEr BY ID DESC LIMIT 2");
  $sql4->execute();
  while($row4 = $sql4->fetch(PDO::FETCH_ASSOC)) {
           ?>
          
               
               
    <?php                               
           $sender_id=$row4['post_by_id'];
  $sql = $obj->db->prepare("select * from  profile where user_id='$sender_id' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){ ?>
     
     <img src="assets/images/images (1).png"  style="height: 46px;
    width: 44px;  border-radius:50%; border:2px solid red;"  data-src="assets/images/images (1).png" src="data/profile/avatar-3.png" alt="" height="40" width="40">
      <?php }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
         <img src="assets/images/pro_pic/<?php echo $row['pic'];  ?>" data-src="assets/images/pro_pic/<?php echo $row['pic'];  ?>" src="data/profile/avatar-3.png" style="height:46px;width: 44px; border-radius:50%; border:2px solid red;"  alt="">  <?php }} ?>            
               
               
               
         
                        Posted By: <?php echo $row4['posted_by']; ?> 
                 <br>
                      <?php echo $row4['comment']; ?><br>
                  <?php echo $row4['time']; ?>  <?php echo $row4['date']; ?>
                      <br><br>
           
           <?php } ?>
           
           
           
      

        
                  <form  method="post" name="form" action="">
                  <input type="hidden" name="idd" value="<?php echo $kk; ?>">
<textarea style="width:100%; font-size:14px; height:60px; font-weight:bold; resize:none;" name="content" id="content" class="form-control" placeholder="Post a comment"></textarea><br />
<input type="submit" value="Post" name="submit" class="submit_button btn btn-primary btn-block"/>
</form>    
                    

                            </div>
                        </div>








                                 
<?php  }}} ?>


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
$file=$_FILES['file']['name'];
$email=$_SESSION['email'];
 $first_name=$_SESSION['name'];
 $date=date("d")."-".date("m")."-".date("Y");
  date_default_timezone_set("Asia/Kolkata"); 
    $time=date('h:i a ', strtotime($date)); 
  
if($obj->insert_post($email,$first_name,$file,$post,$time,$date)==1)
{ 
 
 echo "<script>window.location='dashboard.php';</script>";
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
 
 echo "<script>alert('Your Comment Posted!!');window.location='dashboard.php';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}
}
?>


