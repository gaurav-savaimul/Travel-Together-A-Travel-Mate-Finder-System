<?php
require "connection.php";


Class Connections {

    public $db;
    public function __Construct()
    {
        $this->db = new mPDO();
        //return $this->db;
    }
	
	
	
	public function CheckLogin($name,$password)
	{
		$sql = $this->db->prepare("select * from user where email=:name and password=:password");
			/* execute statement */
		$sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
		$sql->execute();
		
			/* bind result variables */
			$row=$sql->fetchColumn();  ///fetchColumn() is used to select rows from table like mysql_num_row used in normal php 
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
        
 
public function insert_user($first_name,$last_name,$email,$password,$contact,$gender,$dob,$image_1){
$sql =$this->db->prepare("INSERT INTO user(`first_name`,`last_name`,`email`,`password`,`contact`,`gender`,`dob`,`identity`) VALUES(:first_name,:last_name,:email,:password,:contact,:gender,:dob,:image_1)");
$sql->bindParam(':first_name', $first_name);
$sql->bindParam(':last_name', $last_name);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':contact', $contact);
$sql->bindParam(':gender', $gender);
$sql->bindParam(':dob', $dob);$sql->bindParam(':image_1', $image_1);
$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}

function insert_msg($tread_no,$receiver_id,$sender_id,$sender_name,$receiver_name,$msg){

$sql =$this->db->prepare("INSERT INTO message(`tread_no`,`sender_id`,`receiver_id`,`sender_name`,`receiver_name`,`message`,`read_status`) VALUES(:tread_no,:sender_id,:receiver_id,:sender_name,:receiver_name,:message,'0')");


$sql->bindParam(':tread_no', $tread_no);
$sql->bindParam(':sender_id', $sender_id);
$sql->bindParam(':receiver_id', $receiver_id);
$sql->bindParam(':sender_name', $sender_name);
$sql->bindParam(':receiver_name', $receiver_name);
$sql->bindParam(':message', $msg);
$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}


function insert_msg_group($sender_id,$sender_name,$msg,$group_id){

$sql =$this->db->prepare("INSERT INTO `group_chat`(`username`, `message`,`userid`,`group_id`) VALUES(:sender_name,:msg,:sender_id,:group_id)");


$sql->bindParam(':sender_name', $sender_name);
$sql->bindParam(':msg', $msg);
$sql->bindParam(':sender_id', $sender_id);
$sql->bindParam(':group_id', $group_id);

$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}



 function insert_img($add_title,$image){
$sql =$this->db->prepare("INSERT INTO `add_img` (`add_title`, `image`) VALUES (:add_title,:pic)");
$pic=date("mdYHis")."-".$image;
$sql->bindParam(':add_title', $add_title);
$sql->bindParam(':pic', $pic);
$sql->execute();

$tmp_name=$_FILES['file']['tmp_name'];
$location='assets/images/img/';
move_uploaded_file($tmp_name,$location.$pic);


if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 
 
 
 

 function insert_profile($email,$school,$passout,$highschool,$highschool_passout,$currently_working,$lives_in,$from,$hobby,$pic){
$sql =$this->db->prepare("INSERT INTO profile(`user_id`,`school`,`passout`,`highschool`,`highschool_passout`,`currently_working`,`lives_in`,`from`,`hobby`,`pic`)VALUES(:email,:school,:passout,:highschool,:highschool_passout,:currently_working,:lives_in,:from,:hobby,:pic)");
$pic=date("mdYHis")."-".$pic;
$sql->bindParam(':email', $email);
$sql->bindParam(':school', $school);
$sql->bindParam(':passout', $passout);
$sql->bindParam(':highschool', $highschool);
$sql->bindParam(':highschool_passout', $highschool_passout);
$sql->bindParam(':currently_working', $currently_working);
$sql->bindParam(':lives_in', $lives_in);
$sql->bindParam(':from', $from);
$sql->bindParam(':hobby', $hobby);
$sql->bindParam(':pic', $pic);
$sql->execute();

$tmp_name=$_FILES['file']['tmp_name'];
$location='assets/images/pro_pic/';
move_uploaded_file($tmp_name,$location.$pic);


if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 
 
 
  function delete($id,$table)
    {
 
                $sql = $this->db->prepare("delete from $table where ID=:id");
                $sql->bindParam(':id', $id);
                $sql->execute();
                if($sql)
                {
                return 1;
                }
                else
                {
                return 0;
                }
      }
	
    
	
	
function Change_password($new,$email)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE user SET password=:new WHERE email='$email'");

        $sql->bindParam(':new', $new);
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            // echo $this->db->$sql;
             
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
    }
	
	
	
	public function insert_post($email,$first_name,$file,$post,$time,$date,$types,$vidpost){
$sql =$this->db->prepare("INSERT INTO wall(`sender_id`, `sender_name`, `pic`, `message`, `uploaded_time`, `uploaded_date`
    , `types`, `videolink`) VALUES(:email,:first_name,:file,:post,:time,:date,:types,:vidpost)");
$file=date("mdYHis")."-".$file;
$sql->bindParam(':email', $email);
$sql->bindParam(':first_name', $first_name);
$sql->bindParam(':file', $file);
$sql->bindParam(':post', $post);
$sql->bindParam(':time', $time);
$sql->bindParam(':date', $date);
$sql->bindParam(':types', $types);
$sql->bindParam(':vidpost', $vidpost);
$sql->execute();
$tmp_name=$_FILES['file']['tmp_name'];
$location='assets/images/post/';
move_uploaded_file($tmp_name,$location.$file);

if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}





public function insert_coment($idd,$content,$email,$first_name,$time,$date){
$sql =$this->db->prepare("INSERT INTO  comment( `post_id`, `comment`, `post_by_id`, `posted_by`, `time`, `date`) VALUES(:idd,:content,:email,:first_name,:time,:date)");

$sql->bindParam(':idd', $idd);
$sql->bindParam(':content', $content);
$sql->bindParam(':email', $email);
$sql->bindParam(':first_name', $first_name);
$sql->bindParam(':time', $time);
$sql->bindParam(':date', $date);
$sql->execute();


if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}






public function add_request($sender,$receiver){
$sql =$this->db->prepare("INSERT INTO friends_request(`sender`,`receiver`) VALUES(:sender,:receiver)");
$sql->bindParam(':sender', $sender);
$sql->bindParam(':receiver', $receiver);

$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
} 





public function accept_request($sender,$receiver){
$sql = $this->db->prepare("UPDATE friends_request SET status='1' WHERE sender=:sender AND receiver=:receiver");
$sql->bindParam(':sender', $sender);
$sql->bindParam(':receiver', $receiver);

$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
} 






}
?>