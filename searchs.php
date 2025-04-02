<?php
include('db.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select first_name,last_name from  user where first_name like '%$q%' or last_name like '%$q%' order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$username=$row['first_name'];
$email=$row['last_name'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $email);
?>
<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span>&nbsp; &nbsp;<?php echo $final_email; ?><br/>
</div>
<?php
}
}
?>
