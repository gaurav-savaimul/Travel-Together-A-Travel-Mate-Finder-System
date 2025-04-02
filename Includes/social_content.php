<div class="col-md-3 col-sm-4 col-xs-12" style="float:right;">
                                        <div class="uprofile-image">
        <?php	
 
 
	  
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
                       
                                        
                                        <div class="uprofile-buttons">
  
  
  
  
  
  
  
  
  
                                        </div>
                                        <div class=" uprofile-social">

   
                                        </div> 

                                    </div>