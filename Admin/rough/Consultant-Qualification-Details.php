<?php
if(!isset($_GET['id'])){
echo "<script type='text/javascript'>
window.location.href='Consultant-Registration.php';
</script>";
}
include "Includes/session.php";
?>
<html class=" ">
<head>
      
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>inwriting masteradmin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
		<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->
		<!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
<style type="text/css">
    .none {
    display:none;
}
  </style>

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" ">
        <!-- START TOPBAR -->
          <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
              <?php include 'Includes/nav-sidebar.php'; ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Register Consultant</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                   <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Consultant Qualification Details</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                   
<form action="" method="POST" enctype="multipart/form-data"> 

    
    
    <input type="text" required style="width:20%; float:left; margin-right:3%;" placeholder="Graduation *" name="Graduation" value="" class="form-control">
   
     <input type="text" required placeholder="Specialization *" style="width:20%; float:left; margin-right:3%;" name="Specialization" value="" class="form-control">
    

  <input type="text" required placeholder="University *" style="width:20%; float:left; margin-right:3%" name="University" value="" class="form-control">
 <input type="text" required placeholder="Year *" style="width:20%; float:left; margin-right:3%" name="Year" value="" class="form-control">
 
 <br><br>
 
  <input type="text" required style="width:20%; float:left; margin-right:3%;" placeholder="Post Graduation " name="Post_Graduation" value="" class="form-control">
   
     <input type="text" required placeholder="Specialization " style="width:20%; float:left; margin-right:3%;" name="pg_Specialization" value="" class="form-control">
    

  <input type="text" required placeholder="University " style="width:20%; float:left; margin-right:3%" name="pg_University" value="" class="form-control">
 <input type="text" required placeholder="Year " style="width:20%; float:left; margin-right:3%" name="pg_Year" value="" class="form-control">
 
 <br><br>
 
 
  <input type="text" required style="width:20%; float:left; margin-right:3%;" placeholder="PHD / Doctorate  " name="phd" value="" class="form-control">
   
     <input type="text" required placeholder="Specialization " style="width:20%; float:left; margin-right:3%;" name="phd_Specialization" value="" class="form-control">
    

  <input type="text" required placeholder="University " style="width:20%; float:left; margin-right:3%" name="phd_University" value="" class="form-control">
 <input type="text" required placeholder="Year " style="width:20%; float:left; margin-right:3%" name="phd_year" value="" class="form-control">
 
 <br><br>
 
 
 
 
 
 <input type="text" required name="civil_service_exam" placeholder="Civil Service Exam" required style="width:30%; float:left; margin-right:3%;" class="form-control">
 <input type="text" required style=" float:left;margin-right:1%; width:30%;" placeholder="Year" name="service_year" class="form-control"> 
 <br><br><label>Certificate Attachment  </label>
 <input type="file" name="file">
 <br>
 <select name="lang_1" class="form-control" style="width:30%; float:left; margin-right:3%;">
 <option value="">Language Known</option>
 <option value="English">English</option>
 <option value="Hindi">Hindi</option>
 <option value="Marathi">Marathi</option>
 <option value="Assamese">Assamese</option>
 <option value="Bengali">Bengali</option>
 <option value="Bodo">Bodo</option>
 <option value="Dogri">Dogri</option>
 <option value="Gujarati">Gujarati</option>
 <option value="Kannada">Kannada</option>
 <option value="Kashmiri">Kashmiri</option>
 <option value="Konkani">Konkani</option>
 <option value="Maithili">Maithili</option>
 <option value="Malayalam">Malayalam</option>
 <option value="Manipuri">Manipuri</option>
 <option value="Nepali">Nepali</option>
 <option value="Odia">Odia</option>
 <option value="Punjabi">Punjabi</option>
 <option value="Sanskrit">Sanskrit</option>
 <option value="Santali">Santali</option>
 <option value="Sindhi">Sindhi</option>
 <option value="Tamil">Tamil</option>
 <option value="Telugu">Telugu</option>
 <option value="Urdu">Urdu</option>
  
 </select> 
  <input type="checkbox" name="lang_1_1" value="1"> Read
  <input type="checkbox" name="lang_1_2" value="1"> Write
  <input type="checkbox" name="lang_1_3" value="1"> Speak
  
  <br><br>
  <select name="lang_2" class="form-control" style="width:30%; float:left; margin-right:3%;">
 <option value="">Language Known</option>
 <option value="English">English</option>
 <option value="Hindi">Hindi</option>
 <option value="Marathi">Marathi</option>
 <option value="Assamese">Assamese</option>
 <option value="Bengali">Bengali</option>
 <option value="Bodo">Bodo</option>
 <option value="Dogri">Dogri</option>
 <option value="Gujarati">Gujarati</option>
 <option value="Kannada">Kannada</option>
 <option value="Kashmiri">Kashmiri</option>
 <option value="Konkani">Konkani</option>
 <option value="Maithili">Maithili</option>
 <option value="Malayalam">Malayalam</option>
 <option value="Manipuri">Manipuri</option>
 <option value="Nepali">Nepali</option>
 <option value="Odia">Odia</option>
 <option value="Punjabi">Punjabi</option>
 <option value="Sanskrit">Sanskrit</option>
 <option value="Santali">Santali</option>
 <option value="Sindhi">Sindhi</option>
 <option value="Tamil">Tamil</option>
 <option value="Telugu">Telugu</option>
 <option value="Urdu">Urdu</option>
  
 </select>  
  <input type="checkbox" name="lang_2_1" value="1"> Read
  <input type="checkbox" name="lang_2_2" value="1"> Write
  <input type="checkbox" name="lang_2_3" value="1"> Speak
  
  <br><br>
 <select name="lang_3" class="form-control" style="width:30%; float:left; margin-right:3%;">
 <option value="">Language Known</option>
 <option value="English">English</option>
 <option value="Hindi">Hindi</option>
 <option value="Marathi">Marathi</option>
 <option value="Assamese">Assamese</option>
 <option value="Bengali">Bengali</option>
 <option value="Bodo">Bodo</option>
 <option value="Dogri">Dogri</option>
 <option value="Gujarati">Gujarati</option>
 <option value="Kannada">Kannada</option>
 <option value="Kashmiri">Kashmiri</option>
 <option value="Konkani">Konkani</option>
 <option value="Maithili">Maithili</option>
 <option value="Malayalam">Malayalam</option>
 <option value="Manipuri">Manipuri</option>
 <option value="Nepali">Nepali</option>
 <option value="Odia">Odia</option>
 <option value="Punjabi">Punjabi</option>
 <option value="Sanskrit">Sanskrit</option>
 <option value="Santali">Santali</option>
 <option value="Sindhi">Sindhi</option>
 <option value="Tamil">Tamil</option>
 <option value="Telugu">Telugu</option>
 <option value="Urdu">Urdu</option>
  
 </select>   
  <input type="checkbox" name="lang_3_1" value="1"> Read
  <input type="checkbox" name="lang_3_2" value="1"> Write
  <input type="checkbox" name="lang_3_3" value="1"> Speak

  
 <br><br>
 <select name="cat" required class="form-control" style="width:30%; float:left; margin-right:3%;">
 <option value="">Select Category</option>
 <option value="Open">Open</option>
 <option value="OBC">OBC</option>
 <option value="SC / ST">SC / ST</option>
 <option value="NT / VJ /Others">NT / VJ /Others</option>
 
  
 </select>   
 <br><br>
 <div class="control-group">
<label class="control-label" for="email">Physical Challenged</label>
<div class="controls">
	Yes  <input type="radio" required class="span1" value="YES" onClick="$('#target').show();"  name="challenged" >
   No <input type="radio" data-id="school" required  value="NO"  onclick="$('#target').hide();"  name="challenged">
 <br><br>
 <div class="none" id="target">
 <textarea class="form-control" rows="4" cols="6" style="width:50%" name="challenged_desc" placeholder="Physical Challenged "></textarea>
 </div><br>
   <input type="submit" class="btn btn-primary" value="Save & Continue" id="txtPhone">
                  
  </div>


</form>
                                    </div>
                                </div>
                            </div>
                        </section></div>
            <!-- END CONTENT -->
            


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 










<div class="modal fade" id="ultraModal-4" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Confirmation Box!!</h4>
              </div>
              <div class="modal-body">

                 <h3> Admin Registered Successfully!! </h3>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
    </body>

<!-- Mirrored from jaybabani.com/ultra-admin/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 10:37:13 GMT -->
</html>


<?php
 include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function
if(isset($_POST['Graduation']))
{

$Graduation = $_POST['Graduation'];
$Specialization = $_POST['Specialization'];
$University = $_POST['University'];
$Year = $_POST['Year'];

$Post_Graduation = $_POST['Post_Graduation'];
$pg_Specialization = $_POST['pg_Specialization'];
$pg_University = $_POST['pg_University'];
$pg_Year = $_POST['pg_Year'];


$phd = $_POST['phd'];
$phd_Specialization = $_POST['phd_Specialization'];
$phd_University = $_POST['phd_University'];
$phd_year = $_POST['phd_year'];

$civil_service_exam = $_POST['civil_service_exam'];
$service_year=$_POST['service_year'];


$lang_1 = $_POST['lang_1'];

if(isset($_POST['lang_1_1'])){
$lang_1_1 = $_POST['lang_1_1'];
}

if(isset($_POST['lang_1_2'])){
$lang_1_2 = $_POST['lang_1_2'];
}

if(isset($_POST['lang_1_3'])){
$lang_1_3 = $_POST['lang_1_3'];
}
$pg_Year = $_POST['pg_Year'];


$lang_2 = $_POST['lang_2'];

if(isset($_POST['lang_2_1'])){
$lang_2_1 = $_POST['lang_2_1'];
}
if(isset($_POST['lang_2_2'])){
$lang_2_2 = $_POST['lang_2_2'];
}
if(isset($_POST['lang_2_3'])){
$lang_2_3 = $_POST['lang_2_3'];
}
$lang_3 = $_POST['lang_3'];

if(isset($_POST['lang_3_1'])){
$lang_3_1 = $_POST['lang_3_1'];
}
if(isset($_POST['lang_3_2'])){
$lang_3_2 = $_POST['lang_3_2'];
}
if(isset($_POST['lang_3_3'])){
$lang_3_3 = $_POST['lang_3_3'];
}

if(empty($_POST['lang_1_1']))
{
$lang_1_1="0";
}
if(empty($_POST['lang_1_2']))
{
$lang_1_2="0";
}
if(empty($_POST['lang_1_3']))
{
$lang_1_3="0";
}


if(empty($_POST['lang_2_1']))
{
$lang_2_1="0";
}
if(empty($_POST['lang_2_2']))
{
$lang_2_2="0";
}
if(empty($_POST['lang_2_3']))
{
$lang_2_3="0";
}



if(empty($_POST['lang_3_1']))
{
$lang_3_1="0";
}
if(empty($_POST['lang_3_2']))
{
$lang_3_2="0";
}
if(empty($_POST['lang_3_3']))
{
$lang_3_3="0";
}



 $cat = $_POST['cat'];
 $challenged = $_POST['challenged'];
$challenged_desc = $_POST['challenged_desc'];
$c_id=$_GET['id'];

$certificate=$_FILES['file']['name'];


if($obj->Register_Consultant_qualification($c_id,$Graduation,$Specialization,$University,$Year,$Post_Graduation,$pg_Specialization,$pg_University,$pg_Year,$phd,$phd_Specialization,$phd_University,$phd_year,$civil_service_exam
,$service_year,$lang_1,$lang_1_1,$lang_1_2,$lang_1_3,$lang_2,$lang_2_1,$lang_2_2,$lang_2_3,$lang_3,$lang_3_1,$lang_3_2,$lang_3_3,$cat,$challenged,$challenged_desc,$certificate)==1)
{	
$id=$GET['id'];
echo "<script type='text/javascript'>
alert('Consultant Personal Data Submitted Successfully...');
window.location.href='Consultant-Add-Files.php?id=$id';
</script>";
}
else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}
}

?>
