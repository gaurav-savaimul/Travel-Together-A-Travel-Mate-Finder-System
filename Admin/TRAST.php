<!DOCTYPE html>
<html class=" ">
<head>
       
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Admin Panel</title>
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
  <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
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
                                <h1 class="title">TRAST Based Recommendation</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">TRAST</h2>
                                <div class="actions panel_actions pull-right">
                                   
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
  <div style="width:50%;">
<form method="post" action="">
					    	<div>
<span><label>Area</label></span><br>
<span><?php 
include 'Application/DB_Functions.php';  
$obj= new Connections(); 
$sql = $obj->db->prepare("SELECT * FROM  tour_package GROUP BY `tour_title`");
$sql->execute();
?> 
<select class="form-control" name="area" class="span6" required>
<option value="">Select Project</option>
 <?php while($row = $sql->fetch(PDO::FETCH_ASSOC)) { 

 ?>
 <option value="<?php echo $row['tour_title']; ?>"><?php echo $row['tour_title']; ?></option>

 <?php } ?>
 </select> 

</span>
						    </div>
						    <div>
    <span><label>Season</label></span><br>
    <span>  <Select class="form-control" name="season" style="float:left; width:40%;" required>
              <option value="">Select Tour Season</option> 
               <option value="Mansoon Season">Mansoon Season</option>  
               <option value="Winter Season">Winter Season</option> 
                <option value="Summer Season">Summer Season</option> 
               
               </Select></span>
						    </div><br><br>
						    <div>
						     	<span><label>Tour Type</label></span><br>
<span> <Select class="form-control" required name="tour_type" style="float:left; width:40%;" required>
          <option value="">Select Tour Type</option> 
           <option value="Long Holiday">Long Holiday Tour</option>  
           <option value="Weekend Tour">Weekend Tour</option> 
            <option value="Budget Tour">Budget Tour</option> 
             <option value="Premium Tour">Premium Tour</option> 
              <option value="Foreign Tour">Foreign Tour</option> 
              <option value="Foreign Tour">Escorted Tour</option> 
              <option value="Foreign Tour">Hosted Tour</option> 
              
           </Select>
        </span>
						    </div>
                            
                            
         <br><br>                   
  <div>
<span><label>Maximum Affortable Price </label></span><br>
<span><input name="price" class="form-control" required type="text" class="textbox"></span>
						    </div> 
                            
                            <div>
<span><label>Tour Starting Points</label></span><br>
<span><input name="starting" class="form-control" required type="text" class="textbox"></span>
						    </div>                          
                           
               
               
    <br>
     <div>
<span><label>Via</label></span><br>
<span> <Select class="form-control" name="via" style="float:left; width:40%;" required>
          <option value="">Select Via type</option> 
           <option value="Train">Train</option>  
           <option value="Bus">Bus</option> 
            <option value="Flight">Flight</option> 
           
           </Select></span>
						    </div>                          
                                       
               
                            
            
                            
                            
                            
                            
                   <br><br>
						   <div>
						   		<span>
   <input type="submit" class="btn btn-primary" value="Search"></span>
						  </div>
					    </form></div>
               
                                          
<div class="col-lg-6">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Tour Package List</h2>
                                <div class="actions panel_actions pull-right">
                                    
                                </div>
                            </header>
                           

<?php $tour_package="0"; if(isset($_POST['area'])){ ?>
                                         <table class="table table-condensed">
                                            <thead>
 <tr>
     <th>Tour Title</th>
     <th>Area</th>
     <th>Season</th>
     <th>Price</th>
 </tr>
                                            </thead>
                                            <tbody>
 <?php 

$area=$_POST['area'];
$season=$_POST['season'];
$tour_type=$_POST['tour_type'];
$tour_price=$_POST['price'];
$strats_from=$_POST['starting'];
$via=$_POST['via'];
$obj= new Connections(); 
$sql = $obj->db->prepare("SELECT * FROM  tour_package where tour_title='$area'
AND tour_price>='$tour_price' AND season='$season' AND type='$tour_type' AND strats_from='$strats_from' AND via='$via'");
$sql->execute();
$tour_package=$sql->rowCount();
while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	
?> 
 <tr>
     <th scope="row"><?php echo wordwrap($row['tour_title'],10,"<br>"); ?></th>
     <td><?php echo $row['area']; ?></td>
     <td><?php echo $row['season']; ?></td>
     <td><?php echo $row['tour_price']; ?></td>
 </tr>
 <?php   }?>
 
                                            </tbody>
                                        </table>
                                        <?php } ?>
                        </section></div>
                        
                        
                        
                        <div class="col-lg-6">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Intrested Users List</h2>
                                <div class="actions panel_actions pull-right">
                                   
                                </div>
                            </header>
                          

                                 
<?php if(isset($_POST['area'])){ ?>
                                         <table class="table table-condensed">
                                            <thead>
 <tr>
     <th> Name</th>
     <th>Area</th>
     <th>Location</th>
     <th>Email</th>
 </tr>
                                            </thead>
                                            <tbody>
 <?php 

$area=$_POST['area'];
$season=$_POST['season'];
$tour_type=$_POST['tour_type'];
$tour_price=$_POST['price'];
$strats_from=$_POST['starting'];
$via=$_POST['via'];
$obj= new Connections(); 
$sql = $obj->db->prepare("SELECT * FROM  my_recommendation where area='$area'
AND tour_price>='$tour_price' AND season='$season' AND type='$tour_type' AND strats_from='$strats_from' AND via='$via'");
$sql->execute();
while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
 $id=$row['user_id'];
$area=$row['area'];	
$obj= new Connections(); 
$sql1 = $obj->db->prepare("SELECT * FROM  user where ID='$id'");
$sql1->execute();
while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
?> 
 
     <th scope="row"><?php echo wordwrap($row1['first_name'],10,"<br>"); ?>
     <?php echo wordwrap($row1['last_name'],10,"<br>"); ?></th>
     <td><?php echo $area; ?></td>
      <td><?php echo $row1['location']; ?></td>
     <td><?php echo $row1['email']; ?></td>
    
 
 <?php   }?>

                                        <?php }
										echo "</tr>";
										} ?>
                                         
                                            </tbody>
                                        </table>
                                     
                                       
                                        
                            </div> 
<?php if($tour_package!=0){?>                            
                            <center> 
<form action="" method="POST">
<?php
 if(isset($_POST['area'])){
$area=$_POST['area'];
$season=$_POST['season'];
$tour_type=$_POST['tour_type'];
$tour_price=$_POST['price'];
$strats_from=$_POST['starting'];
$via=$_POST['via'];
 }
 ?>
   <input type="hidden" value="<?php echo $area; ?>" name="area"> 
     <input type="hidden" value="<?php echo $area; ?>" name="hiddenarea"> 
       <input type="hidden" value="<?php echo $season; ?>" name="season"> 
         <input type="hidden" value="<?php echo $tour_type; ?>" name="tour_type"> 
           <input type="hidden" value="<?php echo $tour_price; ?>" name="price"> 
             <input type="hidden" value="<?php echo $strats_from; ?>" name="starting"> 
               <input type="hidden" value="<?php echo $via; ?>" name="via">                      
      <input type="submit"  value="Send TRAST Recommendation" class="btn btn-primary btn-lg">
  </form>    
      </center> 
      
      <?php } ?> 
                        </section></div>

                                            <!-- Accordion END -->

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </section></div>



                   


<?php 
if(isset($_POST['hiddenarea'])){
$obj= new Connections(); 

$area=$_POST['hiddenarea'];
$season=$_POST['season'];
$tour_type=$_POST['tour_type'];
$tour_price=$_POST['price'];
$strats_from=$_POST['starting'];
$via=$_POST['via'];

$sql = $obj->db->prepare("SELECT * FROM  tour_package where tour_title='$area'
AND tour_price>='$tour_price' AND season='$season' AND type='$tour_type' AND strats_from='$strats_from' AND via='$via'");
$sql->execute();
$tour_package=$sql->rowCount();
while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
$tour=$row['ID']; 



$obj= new Connections(); 
$sql1 = $obj->db->prepare("SELECT * FROM  my_recommendation where area='$area'
AND tour_price>='$tour_price' AND season='$season' AND type='$tour_type' AND strats_from='$strats_from' AND via='$via'");
$sql1->execute();
while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
	$user=$row1['user_id'];

if($obj->recommend_trast($tour,$user)==1)
{	
echo "<script type='text/javascript'>
$(document).ready(function(){
$('#ultraModal-4').modal('show');
});
</script>";
}	
}
}
}

?>

                                </div>
                            </div>
                        </section></div>


                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

               

                 
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
      
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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
                  <h4 class="modal-title">TRAST</h4>
              </div>
              <div class="modal-body">

                 <h3>    Trast Based Recommendation Send!! </h3>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>




        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">TRAST </h4>
                    </div>
                    <div class="modal-body">

                      Trast Based Recommendation Send!!

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

<!-- Mirrored from jaybabani.com/ultra-admin/ui-accordion.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 10:36:31 GMT -->
</html>



