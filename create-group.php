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
                    <div class="col-lg-8" style="background-color: white; border-radius: 10px;">
                        
                        

<br><h3>Plan a Tour</h3><hr><br>
<form action="" method="post" enctype="multipart/form-data">
        <label for="groupName">Tour Name:</label><br>
        <input type="text" id="groupName" class="form-control" maxlength="40" name="groupName" required><br>
        

        <label for="destination">Departure:</label><br>
        <input type="text" id="destination" name="Departure" maxlength="50"class="form-control" required><br>


        <label for="destination">Arrival:</label><br>
        <input type="text" id="destination" name="destination" maxlength="50"class="form-control" required><br>


        <label for="destination">Round Trip:</label><br>
        <input type="text" id="destination" name="Round" maxlength="50"class="form-control" required><br>


        <label for="destination">Vehicle :</label><br>
        <input type="text" id="destination" name="Vehicle" maxlength="50"class="form-control" required><br>

          <label for="destination">Explain about stay :</label><br>
        <input type="text" id="destination" name="stay" maxlength="50"class="form-control" required><br>
        
        <label for="startDate">Start Date:</label><br>
        <input type="date" id="startDate" name="startDate" class="form-control" required><br>
        
        <label for="endDate">End Date:</label><br>
        <input type="date" id="endDate" name="endDate" class="form-control" required><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" class="form-control" required></textarea><br>
        
        <label for="budget">Budget:</label><br>
        <input type="number" id="budget" name="budget" class="form-control" required><br>

          <label for="budget">Tour Plan Photo:</label><br>
        <input type="file" id="budget" name="file" class="form-control" required><br>
        
        <label for="requirements">Special Requirements:</label><br>
        <textarea id="requirements" name="requirements" class="form-control" rows="4" cols="50"></textarea><br>
        
        <input type="submit" value="Create Group" class="btn btn-info btn-block">
    </form>


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
include "Application/connectionmain.php";

if(isset($_POST['groupName'])){
// Form data
$groupName = $_POST['groupName'];
$destination = $_POST['destination'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$description = $_POST['description'];
$budget = $_POST['budget'];
$requirements = $_POST['requirements'];
$userid=$_SESSION['user_id'];


$Departure = $_POST['Departure'];
$Round = $_POST['Round'];
$Vehicle = $_POST['Vehicle'];
$stay = $_POST['stay'];
$requirements = $_POST['requirements'];

$pic =$_FILES['file']['name'];

$tmp_name=$_FILES['file']['tmp_name'];
$location='assets/images/group/';
move_uploaded_file($tmp_name,$location.$pic);


// Insert data into database
$sql = "INSERT INTO travel_groups (group_name, destination, start_date, end_date, description, budget, special_requirements, userid,Departure, round_trip, Vehichle, stay, files)
        VALUES ('$groupName', '$destination', '$startDate', '$endDate', '$description', '$budget', '$requirements'
        ,'$userid','$Departure','$Round','$Vehicle','$stay','$pic')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New Group created successfully');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
