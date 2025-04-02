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

         

<div class="row">
            <?php
            include "Application/connectionmain.php";
            // Select data from database
            $userid=$_SESSION['user_id'];
            $sql = "SELECT * FROM travel_groups where userid='$userid' ORDER BY ID DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4" style="max-height:600px; overflow: hidden;">';
                    echo '<img src="assets/images/group/' . $row['files'] . '" style="width:100%; height:180px;">';
                    echo '<h4>Group Name: ' . $row['group_name'] . '</h4>';
                    echo '<p><strong>Destination:</strong> ' . $row['destination'] . '</p>';
                    echo '<p><strong>Start Date:</strong> ' . $row['start_date'] . '</p>';
                    echo '<p><strong>End Date:</strong> ' . $row['end_date'] . '</p>';
                   ?>
                    <a href="mygroup_details.php?id=<?php echo $row['ID']; ?>" class="btn btn-primary btn-block">View Details</a><br><br>
                   <?php
                    echo '</div>';
                }
            } else {
                echo "No results found";
            }

            $conn->close();
            ?>
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
    $time=date('h:i a '); 
    
if($obj->insert_post($email,$first_name,$file,$post,$time,$date)==1)
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


