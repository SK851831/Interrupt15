<?php
    require_once('app/connections.php');
    if(empty(trim($_POST['routes']))){
        $search_array = array();
		$record_array = array('route_no','bus_route','starting_point','time','via');
		$retrive_query = $connect->query("SELECT * FROM `bus_schedule`");
		while($row = $retrive_query->fetch_assoc())
		{
			array_push($record_array,$row['route_number'],$row['bus_route'],$row['starting_point'],$row['starting_time'],$row['via']);
		}
		$search_array['success'] = 1;
		$search_array['info'] = $record_array;
		echo json_encode($search_array);
    }else{
        $search_array = array();
		$record_array = array('route_no','bus_route','starting_point','time','via');
		$stop = strtoupper(trim($_POST['routes']));
		$check_query = $connect->query("SELECT * FROM `stoppings` where `stop_name` = '$stop'");
		$n = $check_query->num_rows;
		if($n == 0)
		{
			$search_array['success'] = 0;
		}
		else
		{
			$search_array['success'] = 1;
			while($row = $check_query->fetch_assoc())
			{
				$id = $row['route_number'];
				$retrive_query = $connect->query("SELECT * FROM `bus_schedule` where `route_number` = '$id'");
				$res = mysqli_fetch_array($retrive_query,MYSQLI_ASSOC);
				array_push($record_array,$res['route_number'],$res['bus_route'],$res['starting_point'],$res['starting_time'],$res['via']);
				$retrive_query->close();
			}
		}
		$check_query->close();
		$search_array['info'] = $record_array;
		echo json_encode($search_array);
    }
?>