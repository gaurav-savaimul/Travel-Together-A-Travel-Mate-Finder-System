<?php session_start(); ?>

<?php
include 'Application/DB_Functions.php';

$obj= new Connections(); // Now we create the object of AdminConnection class and through that object we are going to call connection
if(isset($_POST['username']) && isset($_POST['password']))
            {
        $name=strip_tags($_POST['username']);
        $password=md5($_POST['password']); 

        if ($obj->CheckLogin($name,$password)==TRUE) // Here we call the CheckLogin function for admin login through the object        
        {
            $_SESSION['email']=$name;
        
    
    $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
    $sql = $obj->db->prepare("select * from user where email='$name'");
    $sql->execute();
    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
         $_SESSION['name']=$row['first_name'];
         $_SESSION['user_id']=$row['ID'];
    }
    echo "<script>window.location='dashboard.php';</script>";
    }
        else
        {
        echo "<script>alert('Incorrect Username and Password');</script>";
        }

}


?>

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Buddy | Social Community  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="new/media/favicon.png">
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
<body class="sticky-header">
   
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="icofont-bubble-up"></i>
    </a>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper overflow-hidden">

        <!--=====================================-->
        <!--=          Header Menu Start       	=-->
        <!--=====================================-->
        <div class="login-page-wrap">
            <div class="content-wrap">
                <div class="login-content">
                   
                    <div class="login-form-wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#login-tab" role="tab" aria-selected="true"><i class="icofont-users-alt-4"></i> Sign In </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#registration-tab" role="tab" aria-selected="false"><i class="icofont-download"></i> Registration</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link"  href="index.php" role="tab" aria-selected="false"><i class="icofont-download"></i> Home</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane login-tab fade show active" id="login-tab" role="tabpanel">
                                <h3 class="item-title">Sign Into <span>Your Account</span></h3>
                               
                                <form action="" method="POST" >
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Your E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  id="myInput" class="form-control" name="password" placeholder="Password">
                                    </div>
                                 
                                    <div class="form-group mb-4">
                                     <input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login-btn" class="submit-btn" value="Login"><br><br><br><br>
                                    </div><br><br><br>
                                </form>
                                <!-- <div class="account-create">
                    		Don't have an account yet? <a href="#registration-tab">Sign Up Now</a>
                    	</div> -->
                            </div>
                            <div class="tab-pane registration-tab fade" id="registration-tab" role="tabpanel"
                             enctype="multipart/form-data">
                                <h3 class="item-title">Sign Up Your Account</h3>
                                <form name="loginform" action="" method="post" enctype="multipart/form-data">
                 <div class="form-style-agile">

                            <input type="text" name="f_name" id="user_login" class="form-control" value="" size="20" style="width:100%;" placeholder="First Name" />
                    <br>
                  </div>  
                    <div class="form-style-agile">
                        
                            <input type="text" required name="l_name" id="user_login" class="form-control" value="" size="20" style="width:100%;" placeholder="Last Name" />
                     <br><div class="form-style-agile">
                     <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="Please Enter Valid Email Address!!"  id="typepass"  name="email" class="form-control" value="" placeholder="Email" size="20" style="width:100%;"/>
                     <br>
                     </div>
                  </div>   
                     
                     
                  <script>
function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
 <input type="password" id="myInput1" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" title="Password must contain at least one number, one uppercase letter, one lowercase letter, one special character, and be at least 8 characters long." class="form-control"  required><br>
  <small>Password must contain at least one number, one uppercase letter, <br>one lowercase letter, one special character, and be at least 8 characters long.</small><br>
 


                        
                     <input type="checkbox" onclick="myFunction1()">Show Password
                     <div class="form-style-agile">
                     

                   </div>
                   <div class="form-style-agile">
                      
                            <input type="number" required name="contact" id="user_pass1" class="form-control" value="" placeholder="Contact" size="20" style="width:100%;" pattern="[0-9]{10,10}"/> 
                   </div>
                   
                   <div class="form-style-agile">
                        <label for="user_pass"><b>Gender</b><br />
             Male <input type="radio" required name="gender"  value="Male" size="20" />
              Female   <input type="radio" required name="gender" value="Female" size="20" />
             </label>
               
                </div>
                
                <div class="form-style-agile">
                   
                        <label for="user_pass">Date of Birth<br /></label>
                            <input type="date" required name="dob" id="user_pass1" class="form-control" value="" size="20" style="width:100%;"/></div>
                    <br>
                   

                    <div class="form-style-agile">
                   
                        <label for="user_pass">Aadhar card / Identity Proof<br /></label>
                            <input type="file" required name="file" id="user_pass1" class="form-control" value="" size="20" style="width:100%;"/></div>
                    <br>
                   
            <!-- checkbox -->
            <div class="wthree-text">
                <ul>
                    <li>
                        <!-- switch -->
                        <div class="checkout-w3l">
                            <div class="demo5">
                                <div class="switch demo3">
                                
                                </div>
                            </div>
                        
                        </div>
                        <!-- //checkout -->
                    </li>
                    
                </ul>
            </div>
            <!-- //switch -->
            <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg">
        </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-line">
                   
                </div>
            </div>
        </div>

        <!--=====================================-->
        <!--=      Header Search Start          =-->
        <!--=====================================-->
        <div id="header-search" class="header-search">
            <button type="button" class="close">×</button>
            <form class="header-search-form">
                <input type="search" value="" placeholder="Search here..." />
                <button type="submit" class="search-btn">
                    <i class="flaticon-search"></i>
                </button>
            </form>
        </div>
    </div>
     <!-- Jquery Js -->
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



</html><?php
//  include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['f_name']))
{
$first_name = $_POST['f_name'];
$last_name = $_POST['l_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$contact=$_POST['contact'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

$image_1=$_FILES['file']['name'];
$tmp_name1=$_FILES['file']['tmp_name'];
$location1='images/';
move_uploaded_file($tmp_name1,$location1.$image_1);


if($obj->insert_user($first_name,$last_name,$email,$password,$contact,$gender,$dob,$image_1)==1)
{   
 $_SESSION['email']=$email;
 $_SESSION['name']=$first_name;
 echo "<script>alert('Registration Completed! Please Login');window.location='login.php';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}
}

?>
