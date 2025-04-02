<style>* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}</style> <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">
<!--<form class="example" method="post" action="searching.php" style="margin:auto;max-width:1200px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>-->


                            <div class="pull-left">
                                <h1 class="title">User Profile</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box nobox">
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="uprofile-image">
        <?php	
  include 'Application/DB_Functions.php';
 
	  
	  if(isset($_POST['search2'])){
  $search2=$_POST['search2']; 
$obj= new Connections();

	$email=$_SESSION['email'];       
	   
			
     $obj= new Connections(); 
$sql =$obj->db->prepare("INSERT INTO 
`track_search` (`searchs`, `useridd`) VALUES 
(:search2, :email);");
$sql->bindParam(':search2', $search2);
$sql->bindParam(':email', $email);
$sql->execute();
}
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	?>                                        
                                        
   
                                        </div>
           <h5 style="color:white;">     <strong>Sponsored Ads </strong> </h5>                              
                                       
      <?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysqldb='sentiment_analyzer';
mysql_connect($mysql_host,$mysql_user,$mysql_pass);
mysql_select_db("sentiment_analyzer");
 $email=$_SESSION['email'];       
$result3= mysql_query("select * from  products_user_click where userid='$email' ORDER BY ID DESC LIMIT 1");
while($row3=mysql_fetch_array($result3)){
	
	 $prodid=$row3['click_products'];
	}
	if(isset($prodid)){
$result3= mysql_query("select * from  ep_product where PD_ID='$prodid'");
while($row3=mysql_fetch_array($result3)){
	
	 $image1=$row3['image1'];
	  $PRODUCT_NAME=$row3['PRODUCT_NAME'];
	}	
	

?>
<a href="_sentiment_ecommerce/Product-details.php?id=<?php echo $prodid; ?>" target="_blank">
<img src="_sentiment_ecommerce/images/product/<?php echo $image1; ?>" / style="width:100%; height:100%;">
 <h5 style="color:white;">     <strong><?php echo $PRODUCT_NAME; ?> </strong> </h5>  </a>                  
             <br /><hr />                          
              <?php } ?>                         
                                        <div class="uprofile-info">
                                        
     <?php       $obj= new Connections();
  $email=$_SESSION['email'];
  $sql = $obj->db->prepare("select * from  profile where user_id='$email' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){ ?>
	 <img src="assets/images/images (1).png" class="img-responsive">
	  <?php }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
		 <img src="assets/images/pro_pic/<?php echo $row['pic']; ?>" class="img-responsive">  <?php 
	  }}
	  
	  ?>
	                               
 <h3>   <?php	
  $obj= new Connections();
  $email=$_SESSION['email'];
  $sql = $obj->db->prepare("select * from  user where email='$email'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	  echo $row['first_name']; echo " "; echo $row['last_name']; }
	?> 
        </h3>                                  
                                        
                                        
           <?php	
  
  $sql = $obj->db->prepare("select * from  profile where user_id='$email' ORDER BY ID DESC LIMIT 1");
  $sql->execute();
 if($sql->rowCount()=='0'){
	 echo "<strong>Profile Not Updated<br> <center><a href='Update_Profile.php'>Update Profile</a></center></strong>";
	 }else{while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	?>                              
   <ul class="list-unstyled">
       <li><i class='fa fa-home'></i> <?php echo $row['from']; ?></li>
       <li><i class='fa fa-home'></i> <?php echo $row['lives_in']; ?></li>
       <li><i class='fa fa-suitcase'></i> <?php echo $row['currently_working']; ?> </li>
       
        <li><i class='fa fa-users'></i> <?php echo $row['school']; ?> - <?php echo $row['passout']; ?> </li>
          <li><i class='fa fa-users'></i> <?php echo $row['highschool']; ?> -  <?php echo $row['highschool_passout']; ?> </li>
          
        
         <li><i class='fa fa-futbol-o'></i> <?php echo $row['hobby']; ?> </li>
   </ul>
   <?php }} ?>
                                        </div>
                                        <div class="uprofile-buttons">
  
  
  
  
  
  
  
  
  
                                        </div>
                                        <div class=" uprofile-social">

   
                                        </div> 

                                    </div>