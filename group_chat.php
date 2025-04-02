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
             <br>                                 
     
<form  method="post"  action="">
                
<textarea style="width:100%; font-size:14px; height:60px; font-weight:bold; resize:none;" name="msg" id="content" class="form-control" placeholder="Post a Message"></textarea><br />
<input type="submit" value="Post" name="submit" class="submit_button btn btn-primary"/>
<a href="mygroup_details.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary">Back to Group</a>
</form>    <br>

 <table class="table">
    <thead>
      <tr>
        <th>Message</th>
       
      </tr>
    </thead>
<?php 

 $email=$_SESSION['user_id'];
 $kk=$_GET['id'];


$sql1 = $obj->db->prepare("select * from   group_chat where group_id='$kk' ORDER BY ID DESC");
  $sql1->execute();
  while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)){ 
 
 ?>

    <tbody>
      <tr>
        <td>
        Message: <?php echo $row1['message'];  ?><br>
        <span style="font-size:10px;">Sent By: <?php echo $row1['username'];  ?>
        Time: <?php echo $row1['dt'];  ?></span>
        
        </td>
       
      </tr>
    
    
    </tbody>
 
 
 
 <?php  }
  
  
  ?>
     
      
      </table>
  
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

if(isset($_POST['msg']))
{
$group_id=$_GET['id'];
$sender_id=$_SESSION['user_id'];
$sender_name=$_SESSION['name'];
$msg=$_POST['msg'];
 
  
if($obj->insert_msg_group($sender_id,$sender_name,$msg,$group_id)==1)
{ 
 
 echo "<script>window.location='group_chat.php?id=$group_id';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}
}




?>


