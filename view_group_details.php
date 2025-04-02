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

         

   <h2>Travel Group Details</h2>
        <div class="row">
           
    <?php
           include "Application/connectionmain.php";

            // Get group ID from URL
            if(isset($_GET['id'])){
                $group_id = $_GET['id'];
  $userid= $_SESSION['user_id']; 
                // Select data from database for the specific group
                $sql = "SELECT * FROM travel_groups WHERE ID = $group_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $groupID=$row['ID'];
                    echo '<div class="col-md-3">';
                  echo '<img src="assets/images/group/' . $row['files'] . '" style="width:100%; height:180px;">';
                    echo '</div>';
                    echo '<div class="col-md-9">';
                    echo '<h4>Group Name: ' . $row['group_name'] . '</h4>';
                    echo '<p><strong>Destination:</strong> ' . $row['destination'] . '</p>';
                    echo '<p><strong>Start Date:</strong> ' . $row['start_date'] . '</p>';
                    echo '<p><strong>End Date:</strong> ' . $row['end_date'] . '</p>';
                    echo '<h4>Description:</h4>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '<p><strong>Budget:</strong> ' . $row['budget'] . '</p>';
                    echo '<p><strong>Special Requirements:</strong> ' . $row['special_requirements'] . '</p>';



$useridd=$row['userid'];
  $sql1 = "SELECT * FROM user WHERE ID = $useridd";
                $result1 = $conn->query($sql1);

                if ($result1->num_rows > 0) {
                    $row1 = $result1->fetch_assoc();
echo '<p><strong>Uploaded By:</strong> ' . $row1['first_name']." ". $row1['last_name'] . '</p>';
}


                    echo '</div>';
                } else {
                    echo "Group not found";
                }
            } else {
                echo "Group ID not provided";
            }

            $conn->close();
            ?>
</div>
       <?php 
  include "Application/connectionmain.php";
$query1 ="SELECT * FROM joined_group_member WHERE user_id='$userid' AND group_id='$groupID' ";  
 $result1 = $conn->query($query1);


   if ($result1->num_rows==0) {
?>     
          <form action="" method="POST">
   <input type="hidden" value="<?php echo $userid; ?>" name="userid">
   <input type="hidden" value="<?php echo $groupID; ?>" name="groupID">

                        <textarea class="form-control" name="msg" style="height:100px; width: 100%;" placeholder="You can Write some message to ride uploader!" required=""></textarea>

<br>
<input type="submit" class="btn btn-success btn-block" value="Submit Joining Request">

<?php }else{  ?><br>
  <?php 
 $query2="SELECT * FROM joined_group_member WHERE user_id='$userid' AND group_id='$groupID' AND status='0'";  
 $result2 = $conn->query($query2);
 if ($result2->num_rows==1) {  echo "Wait for Admin Approval!";}else{

   ?>
                    <a href="group_chat.php?id=<?php echo $_GET['id']; ?>" class="btn btn-info btn-bg">
Group Chat</a><?php 
                  
 }

    ?>








<?php 
} ?>
                    </form>

        
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

if(isset($_POST['userid'])){
  $userid=$_POST['userid'];
 $groupID=$_POST['groupID'];
$msg=$_POST['msg'];

$username=$_SESSION['name'];
 $id=$_GET['id'];
$sql2="INSERT INTO `joined_group_member`(`group_id`, `user_id`,`username`, `msg`, `status`) VALUES('$groupID', '$userid', '$username', '$msg','0');";

$result2 = $conn->query($sql2);



if($result2 > 0){
  echo "<script>alert('Request Send  Successfully!!');window.location.href='view_group_details.php?id=$id'</script>";  
  }else{
echo mysql_error();
  }
  
}
?>
