<?php
require_once('connections.php');
if(isset($_POST['tag']) && isset($_POST['email']) )
{

	$tag = $_POST['tag']; 
	$auth = "interrupt15".time();
	if($tag == "insert")
	{
		$name = $_POST['name'];
		$phone_number = $_POST['phone_no'];
		$email = $_POST['email'];
		$password = $_POST['password'];
                $college = $_POST['college'];
		$reg_array = array();
		$password=sha1($password);
        	$password=md5($password);
        	$password=sha1($password);

               
		$check_query = $connect->query("SELECT * FROM `users` where `email_id` = '$email'");
		$n = $check_query->num_rows;
		if($n == 0)
		{
			$result = $connect->query("INSERT INTO users(name,email_id,phone_no,password,auth_token,college_name) VALUES ('$name','$email','$phone_number','$password','$auth','$college')") or die($connect->error);	
			if($result)
			{
				  exec("python /var/www/mail2python.py $email");
				$reg_array['success'] = 1;
				$reg_array['id'] =$connect->insert_id;
				$reg_array['auth_token'] = $auth; 	
			}
		}
		else
		{
			$row = mysqli_fetch_array($check_query,MYSQLI_ASSOC);
			$reg_array['success'] = 0;
			$reg_array['id'] = $row["id"];
			$reg_array['auth_token'] = $row["auth_token"];
		}
		echo json_encode($reg_array);
		$check_query->close();
	}
	else if($tag == "update")
	{
		$email = $_POST['email'];
		$college = $_POST['college'];
		$dept = $_POST['department'];
		$reg_array = array();
		$check_query = $connect->query("SELECT * FROM `users` where `email_id` = '$email'");
		$n = $check_query->num_rows;
		if($n == 0)
		{
			$name = $_POST['name'];
			$phone_number = $_POST['phone_no'];
			$password = $_POST['password'];
            $password=sha1($password);
        	$password=md5($password);
        	$password=sha1($password);
            $id_phone=$_POST['id'];
            $id_int=(int)$id_phone;
            echo $id_int;
			$result = $connect->query("UPDATE `users` SET `name`='$name',`email_id`='$email',`phone_no`='$phone_number',`password`='$password',`college_name`='$college',`department`='$dept',`auth_token`='$auth' where `id`=$id_int") or die($connect->error);	
			if($result)
			{
				$reg_array['success'] = 1;
				$reg_array['id'] =$connect->insert_id;
				$reg_array['auth_token'] = $auth; 	
			}
		}
		else
		{
			$row = mysqli_fetch_array($check_query,MYSQLI_ASSOC);
			$id = $row["id"];

                        $phone_number = $_POST['phone_no'];
			$password = $_POST['password'];
$password=sha1($password);
        	$password=md5($password);
        	$password=sha1($password);

			$result = $connect->query("UPDATE `users` SET `college_name`='$college',`department` = '$dept',`phone_no`='$phone_number',`password`='$password' where `id`=$id") or die($connect->error);
			if($result)
			{
				$reg_array['success'] = 1;
				$reg_array['id'] = $row['id'];
				$reg_array['auth_token'] = $row["auth_token"];
			}
			else
			{
				$reg_array['success'] = 0;
				$reg_array['id'] = "nil";
				$reg_array['auth_token'] = "nil";
			}
		}
		echo json_encode($reg_array);
		$check_query->close();
	}
}
else
{
	echo "not set";
}
?>
		