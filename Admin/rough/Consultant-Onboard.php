<?php
session_start();
?>
<!DOCTYPE html>
<html class=" ">
<head>

        <title> Master Admin Panel</title>
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
        <link href="assets/plugins/responsive-tables/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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
                                <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">View Applied Consultant</h1>                           
                                 </div>


                        </div>
                        
                    </div>
					<a href="Consultant-Dashboard.php" style="float:right;" class="btn btn-primary">Back</a>
					
					
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                
                                <div class="col-md-12">
                                        
                              
                                    </div>
                                    <br>
                                    <form action="" method="POST">
                                <input type="submit" name="search" class="btn btn-primary" value="Search" style="float:right;">&nbsp;&nbsp;
                                <input type="text" name="search" value="" placeholder="" style="float:right; height:35px;" placeholder="Search Consult by Name">
                               </form>
                                <h2 class="title pull-left">Consultant List</h2>
                                <div class="actions panel_actions pull-right">
                                    
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="table-responsive" data-pattern="priority-columns">
                                           <?php if(!isset($_POST['search'])){ ?> 
                                            <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
<tr>
  
     <th data-priority="1">Sr no.</th>
     <th data-priority="2">Consultant Name</th>
     <th data-priority="3">State</th>
     <th data-priority="4">Department</th>
      <th data-priority="4">Query Forwarded</th>
      <th data-priority="4">Solved</th>
       <th data-priority="4">Ratings</th>
    <th data-priority="5">Action</th>
 
</tr>
                                                </thead>
                                                <tbody>
<?php	
  //require "includes/connection.php";
  //include 'Application/DB_Functions.php'; // Here we just call the ADB_Fuctions file for provinding the connection
    include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj->db->prepare("select * from  consultant where approve='1' ORDER BY ID DESC");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                       <tr>
                       <th><?php echo $row['ID']; ?></th>
                        <th><?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?> </th>
                        
                        
                        <td><?php 
						$id=$row['ID'];
						 $sql1 = $obj->db->prepare("select * from  consultant_state_department where consultant_id	='$id'");
						 $sql1->execute();
						 while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
						
						echo $row1['state']."."; 
						echo "</td><td>  ";
						echo $row1['department'].".";
						
						 }?></td>
                         
                         
                        <td></td>
                          <td></td>
       <td>sdf</td>
       <td>
       <a href="Consultant-Onboard-Details.php?id=<?php echo $row['ID']; ?>" class="btn btn-primary"> View </a>
	   </td>
              
</tr>      
                                          <?php } ?>          
                                                </tbody>
                                            </table>
                                            <?php }else{ ?>
                                            
                                         
                                         
                                         
                                         
                                         
 <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
<tr>
  
     <th data-priority="1">Sr no.</th>
     <th data-priority="2">Consultant Name</th>
     <th data-priority="3">State</th>
     <th data-priority="4">Department</th>
      <th data-priority="4">Query Forwarded</th>
      <th data-priority="4">Solved</th>
       <th data-priority="4">Ratings</th>
    <th data-priority="5">Action</th>
 
</tr>
                                                </thead>
                                                <tbody>
<?php	
  //require "includes/connection.php";
  //include 'Application/DB_Functions.php'; // Here we just call the ADB_Fuctions file for provinding the connection
    include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	$search=$_POST['search'];		
  $sql = $obj->db->prepare("select * from  consultant where approve='1' AND first_name like '%$search%' OR middle_name like '%$search%'  OR last_name like '%$search%'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                       <tr>
                       <th><?php echo $row['ID']; ?></th>
                        <th><?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?> </th>
                        
                        
                        <td><?php 
						$id=$row['ID'];
						 $sql1 = $obj->db->prepare("select * from  consultant_state_department where consultant_id	='$id'");
						 $sql1->execute();
						 while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
						
						echo $row1['state']."."; 
						echo "</td><td>  ";
						echo $row1['department'].".";
						
						 }?></td>
                         
                         
                        <td></td>
                          <td></td>
       <td>sdf</td>
       <td>
       <a href="Consultant-Onboard-Details.php?id=<?php echo $row['ID']; ?>" class="btn btn-primary"> View </a>
	   </td>
              
</tr>      
                                          <?php } ?>          
                                                </tbody>
                                            </table>       
                                         
                                         
                                         
                                         
                                         
                                         
                                         <?php } ?>   
                                        </div >  


                                    </div>
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

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                   


                    <h4 class="group-head">Favourites</h4>
                    
                </div>

            </div>


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
        <script src="assets/plugins/responsive-tables/js/rwd-table.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 


    </body>

</html>


