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
   
<style type="text/css">
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</style>
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

                // Select data from database for the specific group
                $sql = "SELECT * FROM travel_groups WHERE ID = $group_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $groupname=$row['group_name'];
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
                    echo '<p><strong> Budget:</strong>Rs.  ' . $row['budget'] . '/-</p>';
                    echo '<p><strong>Special Requirements:</strong> ' . $row['special_requirements'] . '</p>'; ?>
                    <a href="group_chat.php?id=<?php echo $_GET['id']; ?>" class="btn btn-info btn-bg">
Group Chat</a><?php 
                    echo '</div>';
                } else {
                    echo "Group not found";
                }
            } else {
                echo "Group ID not provided";
            }

            $conn->close();
            ?>
       

<table class="table">
  <tr>
    <th>Group Name</th>
    <th>Request Sender Name</th>
    <th>Request Sender Message</th>
    <th>Status</th>
    <th>Date and Time</th>
     <th>Action</th>
  </tr>
  

        <?php
           include "Application/connectionmain.php";

            // Get group ID from URL
            if(isset($_GET['id'])){
                $group_id = $_GET['id'];

                // Select data from database for the specific group
                $sql = "SELECT * FROM joined_group_member WHERE group_id = $group_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
     
  while($row = $result->fetch_assoc()) {
    $count=$row["status"];
    if($count==0){ $stmsg="Not Approved Member!";}else{$stmsg="Approved Member!";}
    echo "<tr>";
    echo "<td>" . $groupname. "</td>";
    echo "<td>" . $row["username"]. "</td>";
    echo "<td>" . $row["msg"]. "</td>";
    echo "<td>" . $stmsg. "</td>";
 echo "<td>" . $row["dt"]. "</td>";
  echo "<td>";
if($count==0){ 

    echo "<form class='' method='post'>";
    echo "<input type='hidden' name='id' value='" . $row["ID"] . "'>";
   
    echo "<input type='submit' value='Accept'>";
    echo "</form>";
}else{
    echo "<span style='color:green;'><b>Approved Member!</b></span>";
}
    echo "</td>";
    echo "</tr>";
  }

}}



                    ?></table>
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
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
$idd = $_GET["id"];

 
  $sql_update = "UPDATE  joined_group_member SET status='1' WHERE id='$id'";
  if ($conn->query($sql_update) === TRUE) {
    echo "<script>alert('Record updated successfully');window.location.href='mygroup_details.php?id=$idd'</script>";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

?>