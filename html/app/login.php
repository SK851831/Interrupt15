<?php
require_once('connections.php');
if(isset($_POST['tag']) )
{
	
	$tag = $connect->real_escape_string($_POST['tag']);
	$u_name = $connect->real_escape_string($_POST['uname']);
	$password = $_POST['password'];
	$password=sha1($password);
        $password=md5($password);
        $password=sha1($password);

	if($tag == "login_phone")
	{
		$result = $connect->query("SELECT * FROM `users` WHERE `phone_no` = '$u_name' and `password` = '$password'") or die($connect->error);
	}
	else if($tag == "login_email")
	{
		$result = $connect->query("SELECT * FROM `users` WHERE `email_id` = '$u_name' and `password` = '$password' ") or die($connect->error);
	}
	$n = $result->num_rows;
	$log_array = array();
	if($n == 0)
	{
		$log_array['success'] = 0;
		$log_array['id'] = "";
		$log_array['name'] = "";
		$log_array['auth_token'] = "";
	}
	else
	{
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$log_array['success'] = 1;
		$log_array['id'] = $row['id'];
		$log_array['name'] = $row['name'];
		$log_array['email'] = $row['email_id'];
		$log_array['phone'] = $row['phone_no'];
		$log_array['auth_token'] = $row['auth_token'];
		$log_array['college'] = $row['college_name'];
		$log_array['department'] = $row['department'];
		$result->close();
	}
	echo "\n".json_encode($log_array);
}
else
{
	echo "not set";
}
?>