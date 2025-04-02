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
<style type="text/css">
  body{ 
    font-family:Tahoma, Geneva, sans-serif;
    font-size:18px;
  }
  .content{
    width:900px;
    margin:0 auto;
  }
  #searchid
  {
    width:500px;
    border:solid 1px #000;
    padding:10px;
    font-size:14px;
  }
  #result
  {
    position:absolute;
    width:500px;
    padding:10px;
    display:none;
    margin-top:-1px;
    border-top:0px;
    overflow:hidden;
    border:1px #CCC solid;
    background-color: white;
  }
  .show
  {
    padding:10px; 
    border-bottom:1px #999 dashed;
    font-size:15px; 
    height:50px;
  }
  .show:hover
  {
    background:#4c66a4;
    color:#FFF;
    cursor:pointer;
  }
</style>
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
                                              
                 





       <div class="form-group">
           <div class="controls">
           <form method="POST" action="" enctype="multipart/form-data">
           <script type="text/javascript" src="assets/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
  $.ajax({
  type: "POST",
  url: "searchs.php",
  data: dataString,
  cache: false,
  success: function(html)
  {
  $("#result").html(html).show();
  }
  });
}return false;    
});

jQuery("#result").live("click",function(e){ 
  var $clicked = $(e.target);
  var $name = $clicked.find('.name').html();
  var decoded = $("<div/>").html($name).text();
  $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
  var $clicked = $(e.target);
  if (! $clicked.hasClass("search")){
  jQuery("#result").fadeOut(); 
  }
});
$('#searchid').click(function(){
  jQuery("#result").fadeIn();
});
});
</script>
               <div class="content">
<input type="text" autocomplete="off"  id="searchid" placeholder="Search for people" style="float:left" name="search"/></div>
<input type="submit" value="Search" style="float:left; height:45px; border:1px black solid;">
<br><br><div id="result" style="background-image:url(assets/images/connect-world.jpg); position:relative;">
</div>
</div></form>
           </div>
       </div>
       <div class="enter_post_btns col-md-12 col-sm-12 col-xs-12">
         <?php if(isset($_POST['search'])){  $obj= new Connections();
  $search=$_POST['search'];
    $Sessionemail=$_SESSION['email'];
$sql = $obj->db->prepare("select * from  user where email !='$Sessionemail' AND first_name like '%$search%' OR last_name like '%$search%'");
  $sql->execute();
  if($sql->rowCount()=='0'){ echo "<h3>No Result Found!!</h3>";}
    ?>
         
    <table class="table" >
    <thead>
      <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
     
     ?>
      <tr>
        <td><?php $email=$row['email']; $mainid=$row['ID']; 
         $sql1 = $obj->db->prepare("select * from  profile where user_id='$email' ORDER BY ID DESC LIMIT 1");
  $sql1->execute();
 if($sql1->rowCount()=='0'){ ?>
   <img src="assets/images/images (1).png" class="img-responsive" style="height:100px; width:100px;">
    <?php }else{while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) { ?>
     <img src="assets/images/pro_pic/<?php echo $row1['pic']; ?>" class="img-responsive" style="height:100px; width:100px;">  <?php 
    }}
  ?>           </td>
        <td><?php echo $row['first_name']; echo " "; echo $row['last_name']; ?></td>
        <td>
        <form action="" method="POST">
        <input type="hidden" name="sender" value="<?php echo $sender=$_SESSION['email']; ?>">
         <input type="hidden" name="receiver" value="<?php echo $receiver=$email; ?>"> 
          
         <?php 
         $sql2 = $obj->db->prepare("select * from  friends_request where sender='$sender' AND receiver='$receiver'");
  $sql2->execute();
  $sql5 = $obj->db->prepare("select * from  friends_request where sender='$receiver' AND receiver='$sender'");
  $sql5->execute();
 if($sql2->rowCount()=='0' && $sql5->rowCount()=='0'){ ?>
        <input type="submit" class="btn btn-primary" value="Add Friend">
        <?php }else{ ?>
         <input type="submit" disabled class="btn btn-primary" value="Request Sent">
        <?php } ?>
        </form>  <br><a href="friend_profile.php?id=<?php echo $mainid; ?>" target="_blank" class="btn btn-info">View Profile</a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
    <?php } ?>    
</div>
               

                  
                </div>
            </div>
            <!--=====================================-->
            <!--=        Footer Area Start        =-->
            <!--=====================================-->
          

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
$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
if($obj->add_request($sender,$receiver)==1)
{ 
 
 echo "<script>alert('Request Sent!!');</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}
}

?>


