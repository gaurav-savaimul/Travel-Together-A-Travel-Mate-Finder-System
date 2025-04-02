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
                    <div class="col-lg-12" style="background-color: white; border-radius: 10px;">
                             



     
    <div class="enter_post_btns col-md-12 col-sm-12 col-xs-12"><table class="table" >
    <thead>
      <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
         <?php  $obj= new Connections();
  
    $Sessionemail=$_SESSION['email'];
$sql2 = $obj->db->prepare("select * from  friends_request where sender='$Sessionemail' OR receiver='$Sessionemail'");
  $sql2->execute();
     $sql2->rowCount();
  while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)){ 
 if($row2['status']=="0"){
  
 if($row2['sender']=="$email"){
     $mailid=$row2['receiver'];
   }else{
        $mailid=$row2['sender'];
     
      $row2['status'];
    ?>
         
    
   
      <tr>
        <td><?php $email=$row['receiver']; 
     $mailid;
         $sql1 = $obj->db->prepare("select * from  profile where user_id='$mailid' AND user_id!='$Sessionemail' ORDER BY ID DESC LIMIT 1");
  $sql1->execute();
 if($sql1->rowCount()=='0'){ ?>
   <img src="assets/images/images (1).png" class="img-responsive" style="height:100px; width:100px;">
    <?php }else{while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) { ?>
     <img src="assets/images/pro_pic/<?php echo $row1['pic']; ?>" class="img-responsive" style="height:100px; width:100px;">  <?php 
    }}
  ?>           </td>
        <td>
<?php $email=$row['receiver']; 
         $sql1 = $obj->db->prepare("select * from  user where email='$mailid'  AND email!='$Sessionemail' ORDER BY ID DESC LIMIT 1");
  $sql1->execute();
while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) { ?>
    <?php
     echo $row1['first_name'];   echo $row1['last_name'];
      $senderss=$row1['email'];
    }
  ?>           </td>
        <td>
        <form action="" method="POST">
        <input type="hidden" name="sender" value="<?php echo $sender=$_SESSION['email']; ?>">
         <input type="hidden" name="receiver" value="<?php echo $senderss; ?>"> 
          
        
        <input type="submit" class="btn btn-primary" value="Accept Request">
        
        </form>
        </td>
      </tr>
    <?php }} ?>
   
    <?php } ?>       
 </tbody>
  </table>
</form>
           </div>
       </div>
      
                     
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

?>

<?php
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['sender']))
{
echo $sender = $_POST['sender'];
echo $receiver = $_POST['receiver'];
if($obj->accept_request($sender,$receiver)==1)
{ 
 echo "<script>window.location='View-request.php';</script>";
}
else{
echo "<script type='text/javascript'>

</script>";
}
}



if(isset($_POST['sender']))
{
echo $sender = $_POST['sender'];
echo $receiver = $_POST['receiver'];
if($obj->accept_request($receiver,$sender)==1)
{ 
 
 
 echo "<script>window.location='View-request.php';</script>";
}
else{
echo "<script type='text/javascript'>

</script>";
}
}

?>


