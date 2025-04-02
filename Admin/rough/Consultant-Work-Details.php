<?php
include "Application/DB_Functions.php";
if(!isset($_GET['id'])){
echo "<script type='text/javascript'>
window.location.href='Consultant-Registration.php';
</script>";
}
	if(!empty($_POST["save"])) {
            
          
	
	
		$itemCount = count($_POST["Department_worked"]);
		$itemValues=0;
		
		$query = "INSERT INTO consultant_work_profile (`consultant_id`,`exp_year`,`exp_month`, `department_worked`,`designation`, `job_profile`, `location`, `district`, `state`, `from_month`, `from_year`, `to_month`, `to_year`) VALUES ";
		$queryValue = "";
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["Department_worked"]) || !empty ($_POST["Designation"]) || !empty ($_POST["Job_profile"]) || !empty ($_POST["Location"]) || !empty ($_POST["District"]) || !empty ($_POST["State"]) || !empty ($_POST["from_m"]) || !empty ($_POST["from_y"]) || !empty ($_POST["to_m"]) || !empty ($_POST["to_y"])){
				$itemValues++;
				if($queryValue!="") {
					$queryValue .= ",";
				}
				 $queryValue .= "('" . $_GET["id"]. "','" . $_POST["yy"]. "','" . $_POST["mm"]. "','" . $_POST["Department_worked"][$i] . "', '" . $_POST["Designation"][$i] . "', '" . $_POST["Job_profile"][$i] . "', '" . $_POST["Location"][$i] . "', '" . $_POST["District"][$i] . "', '" . $_POST["State"][$i] . "', '" . $_POST["from_m"][$i] . "', '" . $_POST["from_y"][$i] . "',
				'" . $_POST["to_m"][$i]. "', '" . $_POST["to_y"][$i]. "')";
			}
		}
		$sql = $query.$queryValue;
		if($itemValues!=0) {
			$result = mysql_query($sql);
			if(!empty($result)) $message = "Added Successfully.";
		}
	}
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
                <section class="wrapper" style="margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;">

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">REGISTER CONSULTANT </h1>                            </div>

<a href="Sub-Admin-Dashboard.php" style="float:right;" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
                            <header class="panel_header">
                                <div class="col-md-12">
  
                                   
                                    </div>
                                <h2 class="title pull-left"> Work Exprience</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings">
                                    
                                    </i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            
                            <div class="content-body">
                                <div class="row">
                                
                                
<LINK href="style.css" rel="stylesheet" type="text/css" />
<SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<SCRIPT>
function addMore() {
	$("<DIV>").load("input.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</SCRIPT>

<FORM name="frmProduct" method="post" action="Consultant-Work-Details.php?id=<?php echo $_GET['id']; ?>">
<DIV id="outer" style="width:60%;">
<DIV id="header">
<DIV class="float-left">&nbsp;</DIV>

<div class="col-md-8 col-sm-9 col-xs-10">
 <div class="form-group">
      <label class="form-label" for="field-2"><strong>Totoal Year of Exprience</strong></label>
    
      <div class="controls">
          <input type="number" required placeholder="Total Years" name="yy" style="width:40%; float:left; margin-right:3%;"  class="form-control" id="field-2" >
           <input type="number" required  placeholder="Total Months" name="mm" style="width:40%; float:left; margin-right:3%;"  class="form-control" id="field-2" >
      </div>
  </div><br><hr>
</DIV>

<DIV id="product">
<?php require_once("input.php") ?>
</DIV>
<br>

<DIV class="footer">

<DIV class="btn-action float-clear">


<span class="success">
<?php

$obj= new Connections();
$sql = $obj->db->prepare("select * from consultant_work_profile ORDER BY ID DESC LIMIT 1");
$sql->execute();
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
$ID=$row['consultant_id'];
}
?>
<?php if(isset($message)) {  echo "<script>alert('Work Exprience Details Inserted Succesfully!!'); window.location.href='Consultant_Project_Profile.php?id=$ID';</script>"; }?></span>



<input type="submit" class="btn btn-primary" name="save" value="Save & Continue" id="txtPhone">
<a href="Consultant_Project_Profile.php" class="btn btn-primary">Skip</a>
</DIV>
</DIV>

</DIV>
</form>
</div>

                            </div>
                        </section></div>



                </section>
            </section>
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


