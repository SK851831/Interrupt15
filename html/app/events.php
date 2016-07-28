<?php
require_once('connections.php');
if(isset($_POST['auth_token']))
{
	$id = $_POST['id'];
	$auth = $_POST['auth_token'];
	$db = $_POST['db'];
	$ds = $_POST['ds'];
	$dc = $_POST['dc'];
	$p = $_POST['p'];
	$oc = $_POST['oc'];
	$oh = $_POST['oh'];
	$c = $_POST['c'];
	$myb = $_POST['myb'];
	$b = $_POST['b'];

	$result = $connect->query("SELECT * FROM `users` WHERE `id` = $id and `auth_token`='$auth'" ) or die($connect->error);
	$n = $result->num_rows;
	$log_array = array();
	if($n == 0)
	{
		$log_array['success'] = 0;
		$log_array['id'] = $id;
		$log_array['auth_token'] = $auth;
	}
	else
	{
		$reg_event = $connect->query("SELECT * FROM `events` where `user_id` = $id ");
		$n = $reg_event->num_rows;
		if($n == 0)
		{	
			$sql = "INSERT INTO `events`(user_id,online_code,online_hunt,coding,myb,db,paper,bombsquad,datastructure,dumbc) VALUES ($id,$oc,$oh,$c,$myb,$db,$p,$b,$ds,$dc)";
			$ins = $connect->query($sql) or die($connect->error);
			$log_array['success'] = 1;
			$log_array['id'] = $id;
			$log_array['auth_token'] = $auth;
		}
		else
		{
			$upd = $connect->query("SELECT * FROM `events` where `user_id` = $id");
			$row = mysqli_fetch_array($upd,MYSQLI_ASSOC);
			if($oc == 1 && $row["online_code"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `online_code` = 1 where `user_id` = $id" );
			}
			if($oh == 1 && $row["online_hunt"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `online_hunt` = 1 where `user_id` = $id" );
			}
			if($c == 1 && $row["coding"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `coding` = 1 where `user_id` = $id" );
			}
			if($myb == 1 && $row["myb"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `myb` = 1 where `user_id` = $id" );
			}
			if($db == 1 && $row["db"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `db` = 1 where `user_id` = $id" );
			}
			if($ds == 1 && $row["datastructure"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `datastructure` = 1 where `user_id` = $id" );
			}
			if($b == 1 && $row["bombsquad"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `bombsquad` = 1 where `user_id` = $id" );
			}
			if($p == 1 && $row["paper"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `paper` = 1 where `user_id` = $id" );
			}
			if($dc == 1 && $row["dumbc"] == 0)
			{
				$ins = $connect->query("UPDATE `events` SET `dumbc` = 1 where `user_id` = $id" );
			}
			$log_array['success'] = 1;
			$log_array['id'] = $id;
			$log_array['auth_token'] = $auth;
		}
	}
	echo json_encode($log_array);
}
else
{
	echo "not set";
}
?>