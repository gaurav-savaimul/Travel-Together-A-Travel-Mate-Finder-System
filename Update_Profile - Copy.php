<?php session_start(); ?><!DOCTYPE html>
<html class=" ">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>User Profile</title>
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
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <!-- START TOPBAR -->
          <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
      
            <!-- SIDEBAR - START -->
              <?php include 'Includes/nav-sidebar.php'; ?>
                              
                     <!-- START CONTAINER -->
       <section id="main-content" class=" " style="color:#999;">
                <section class="wrapper" style='margin-top:10px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">
<!--<form class="example" method="post" action="searching.php" style="margin:auto;max-width:1200px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>-->


                          


                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box nobox">
                            <div class="content-body">    <div class="row">
                                    
                                    
  
            <!-- START CONTAINER -->
        <div class="page-container row-fluid">

          
          <div class="col-md-9 col-sm-8 col-xs-12">

              <div class="uprofile-content">
   
   <div class="clearfix"></div>





 <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
  <header class="panel_header">
      <div class="col-md-12">
  
         
          </div>
      <h2 class="title pull-left">Update Profile</h2>
      <br><br>
      <div class="actions panel_actions pull-right">
          
      </div>
  </header>
  
  <div class="content-body">
      <div class="row">
        <!-- FORM START FROM HERE FOR INSERTING --->  
       <form action="" method="post" enctype="multipart/form-data"> 
          <div class="col-md-12 col-sm-12 col-xs-12">

  

  <div class="form-group">
  
 

      <label class="form-label" for="field-2">Your School</label>
    
      <div class="controls">
      <input type="text"  name="s_name" style="width:45%; float:left; margin-right:3%;" class="form-control" id="field-2" placeholder="School Name">
  <select placeholder="Passout Year" style="width:45%;float:left;" class="form-control" id="field-2" name="year">
  <option value="" selected="selected">Select Passout Year</option>
  <option value="1930">1930</option>
  <option value="1931">1931</option>
  <option value="1932">1932</option>
  <option value="1933">1933</option>
  <option value="1934">1934</option>
  <option value="1935">1935</option>
  <option value="1936">1936</option>
  <option value="1937">1937</option>
  <option value="1938">1938</option>
  <option value="1939">1939</option>
  <option value="1940">1940</option>
  <option value="1941">1941</option>
  <option value="1942">1942</option>
  <option value="1943">1943</option>
  <option value="1944">1944</option>
  <option value="1945">1945</option>
  <option value="1946">1946</option>
  <option value="1947">1947</option>
  <option value="1948">1948</option>
  <option value="1949">1949</option>
  <option value="1950">1950</option>
  <option value="1951">1951</option>
  <option value="1952">1952</option>
  <option value="1953">1953</option>
  <option value="1954">1954</option>
  <option value="1955">1955</option>
  <option value="1956">1956</option>
  <option value="1957">1957</option>
  <option value="1958">1958</option>
  <option value="1959">1959</option>
  <option value="1960">1960</option>
  <option value="1961">1961</option>
  <option value="1962">1962</option>
  <option value="1963">1963</option>


  <option value="1964">1964</option>
  <option value="1965">1965</option>
  <option value="1966">1966</option>
  <option value="1967">1967</option>
  <option value="1968">1968</option>
  <option value="1969">1969</option>
  <option value="1970">1970</option>
  <option value="1971">1971</option>
  <option value="1972">1972</option>
  <option value="1973">1973</option>
  <option value="1974">1974</option>
  <option value="1975">1975</option>
  <option value="1976">1976</option>
  <option value="1977">1977</option>
  <option value="1978">1978</option>
  <option value="1979">1979</option>
  <option value="1980">1980</option>
  <option value="1981">1981</option>
  <option value="1982">1982</option>
  <option value="1983">1983</option>
  <option value="1984">1984</option>
  <option value="1985">1985</option>
  <option value="1986">1986</option>
  <option value="1987">1987</option>
  <option value="1988">1988</option>
  <option value="1989">1989</option>
  <option value="1990">1990</option>
  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  </select>
      </div>
  </div>
  
  <br>
  
  
   <label class="form-label" for="field-2">Your High-School</label>
    
      <div class="controls">
      <input type="text"  name="h_name" style="width:45%; float:left; margin-right:3%;" class="form-control" id="field-2" placeholder="School Name">
  <select placeholder="Passout Year" style="width:45%;float:left;" class="form-control" id="field-2" name="hyear">
  <option value="" selected="selected">Select Passout Year</option>
  <option value="1930">1930</option>
  <option value="1931">1931</option>
  <option value="1932">1932</option>
  <option value="1933">1933</option>
  <option value="1934">1934</option>
  <option value="1935">1935</option>
  <option value="1936">1936</option>
  <option value="1937">1937</option>
  <option value="1938">1938</option>
  <option value="1939">1939</option>
  <option value="1940">1940</option>
  <option value="1941">1941</option>
  <option value="1942">1942</option>
  <option value="1943">1943</option>
  <option value="1944">1944</option>
  <option value="1945">1945</option>
  <option value="1946">1946</option>
  <option value="1947">1947</option>
  <option value="1948">1948</option>
  <option value="1949">1949</option>
  <option value="1950">1950</option>
  <option value="1951">1951</option>
  <option value="1952">1952</option>
  <option value="1953">1953</option>
  <option value="1954">1954</option>
  <option value="1955">1955</option>
  <option value="1956">1956</option>
  <option value="1957">1957</option>
  <option value="1958">1958</option>
  <option value="1959">1959</option>
  <option value="1960">1960</option>
  <option value="1961">1961</option>
  <option value="1962">1962</option>
  <option value="1963">1963</option>


  <option value="1964">1964</option>
  <option value="1965">1965</option>
  <option value="1966">1966</option>
  <option value="1967">1967</option>
  <option value="1968">1968</option>
  <option value="1969">1969</option>
  <option value="1970">1970</option>
  <option value="1971">1971</option>
  <option value="1972">1972</option>
  <option value="1973">1973</option>
  <option value="1974">1974</option>
  <option value="1975">1975</option>
  <option value="1976">1976</option>
  <option value="1977">1977</option>
  <option value="1978">1978</option>
  <option value="1979">1979</option>
  <option value="1980">1980</option>
  <option value="1981">1981</option>
  <option value="1982">1982</option>
  <option value="1983">1983</option>
  <option value="1984">1984</option>
  <option value="1985">1985</option>
  <option value="1986">1986</option>
  <option value="1987">1987</option>
  <option value="1988">1988</option>
  <option value="1989">1989</option>
  <option value="1990">1990</option>
  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
 <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  </select>
      </div>
  
  
  
  
  
  
  
  <div class="form-group">
      <label class="form-label" for="field-2">Currently Working as</label>
    
      <div class="controls">
          <input type="text" required name="working_as" placeholder="Currently Working as"  class="form-control" id="field-2" >
      </div>
  </div>
  <div class="form-group">
      <label class="form-label" required for="field-2">Lives in</label>
    
      <div class="controls">
          <input type="text" name="live" required  class="form-control" id="field-2" >
      </div>
  </div>
  <div class="form-group">
      <label class="form-label" for="field-2">Home Town</label>
    
      <div class="controls">
          <input type="text"  name="home_town" required class="form-control" id="field-2" >
      </div>
               
      
      <div class="form-group">
      <label class="form-label" for="field-2">Hobby</label>
    
      <div class="controls">
          <input type="text"  name="hobby" require class="form-control" id="field-2" >
      </div>
  </div>
  
  
  
  <div class="form-group">
   <h4>Select Your Interested In</h4>
  <div class="controls">
      <label><input type="checkbox" name="field[]" value="Sport">Sport</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox" name="field[]" value="Politics">Politics</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox" name="field[]" value="Education">Education</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox" name="field[]" value="Entertainment">Entertainment</label>
    </div>
	
	 <div class="controls">
      <label><input type="checkbox"  name="field[]" value="Movies">Movies</label>
    </div>
 
 
 <h4>Select Your Favourite Game</h4>
  <div class="controls">
      <label><input type="checkbox"  name="game[]" value="Cricket">Cricket</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox" name="game[]" value="Tenis">Tenis</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox"  name="game[]" value="Football">Football</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox" name="game[]" value="Hockey">Hockey</label>
    </div>
	
	 <div class="controls">
      <label><input type="checkbox" name="game[]" value="Baseball">Baseball</label>
    </div>
	
	<h4>Select Your Favourite Technology</h4>
  <div class="controls">
      <label><input type="checkbox" name="device[]" value="Smartphone">Smartphone</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox"  name="device[]" value="Tablet">Tablet</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox"  name="device[]" value="Laptop">Laptop</label>
    </div>
	 <div class="controls">
      <label><input type="checkbox"  name="device[]" value="PC">PC</label>
    </div>
	
	 <div class="controls">
      <label><input type="checkbox" name="device[]" value="Smart Watch">Smart Watch</label>
    </div>
  
  
  
  
  <!--<div class="controls">
  <select name="field" placeholder="Passout Year"  style="width:45%;float:left;" class="form-control" id="field-2" name="hyear">
  <option value="" selected="selected">Select Your Interested Field</option>
  <option value="Sports">Sports</option>
  <option value="Politics">Politics</option>
  <option value="Education">Education</option>
  <option value="Entertainment">Entertainment</option>
  <option value="Movies">Movies</option>
   </select>
      </div> 
	  <br>
	  <br>
	  <br>
	  <div class="controls">
	   
  <select name="game" placeholder="Passout Year"  style="width:45%;float:left;" class="form-control" id="field-2" name="hyear">
  <option value="" selected="selected">Select Your Favourite Game</option>
  <option value="Cricket">Cricket</option>
  <option value="Tenis">Tenis</option>
  <option value="Football">Football</option>
  <option value="Hockey">Hockey</option>
  <option value="Baseball">Baseball</option>
  
 
  </select>
      </div>
	  
	  <br>
	  <br>
	  <br>
	  
	   <div class="controls">
  <select name="device" placeholder="Passout Year"  style="width:45%;float:left;" class="form-control" id="field-2" name="hyear">
  <option value="" selected="selected">Select Your Favourite Device</option>
  <option value="Smartphone">Smartphone</option>
  <option value="Laptop">Laptop</option>
  <option value="Tablet">Tablet</option>
  <option value="PC">PC</option>
  <option value="SmartWatch">SmartWatch</option>
  
 
  </select>
      </div>
	  <br>
	  <br>
	  <br>-->
  
  
  <br>
  <div class="form-group">
      <label class="form-label" for="field-2">Profile Photo</label>
    
      <div class="controls">
          <input type="file"  name="file" required class="form-control" id="field-2" >
      </div>
  </div>
     
 
 
  

   
  
   <div class="form-group">
                     <label class="form-label" for="field-1"></label>
                     <div class="controls">
                        <input type="submit"  name="submit" class="btn btn-primary" value="submit" id="txtPhone">
                     </div>
                 </div>

                  
          </div>
                  
           </form>
           <!-- FORM END FROM HERE FOR INSERTING --->  
      </div>
 <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
           <?php include 'Includes/social_content.php'; ?>
          
          

  </div>
                        </section></div>



                </section>
            </section>
           </div>

       </div>	
       <div class="clearfix"></div>						
   </div>


              </div>









          </div>
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
        <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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

                 <h3>Profile Updated Succesfully!! </h3>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
        <!-- modal end -->
    </body>
</html>

<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysqldb='social_sentiments';
mysql_connect($mysql_host,$mysql_user,$mysql_pass);
mysql_select_db("social_sentiments");
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function
 
if(isset($_POST['s_name']))
{
$school = $_POST['s_name'];
$passout = $_POST['year'];
$highschool = $_POST['h_name'];
$highschool_passout = $_POST['hyear'];
$currently_working = $_POST['working_as'];
$lives_in = $_POST['live'];
$from = $_POST['home_town'];
$hobby = $_POST['hobby'];


$checkbox1=$_POST['field'];
$checkbox2=$_POST['game'];
$checkbox3=$_POST['device'];
$aa= $_SESSION['user_id'];
if($_POST['submit']=="submit")  
{
	
	
foreach ($_POST['field'] as $names)
{
	$cat="feild";
$query="INSERT INTO user_profile(value,user_id,category) VALUES('$names','$aa','$cat')";
mysql_query($query)or die(mysql_error());
}

foreach ($_POST['game'] as $names)
{
$cat="game";
$query="INSERT INTO user_profile(value,user_id,category) VALUES('$names','$aa','$cat')";
mysql_query($query)or die(mysql_error());
}
foreach ($_POST['device'] as $names)
{
$cat="device";
$query="INSERT INTO user_profile(value,user_id,category) VALUES('$names','$aa','$cat')";
mysql_query($query)or die(mysql_error());
}

}

$pic =$_FILES['file']['name'];
$email=$_SESSION['email'];

if($obj->insert_profile($email,$school,$passout,$highschool,$highschool_passout,$currently_working,$lives_in,$from,$hobby,$pic)==1)
{	
echo "<script type='text/javascript'>
$(document).ready(function(){
$('#ultraModal-4').modal('show');
});
</script>";
}
else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}
}

?>


