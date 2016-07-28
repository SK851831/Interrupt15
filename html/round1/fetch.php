<?php
session_start();
require_once('../dbConnect.php');
$sql = dbConnect();
	if(isset($_SESSION['id']))
	{
		$current = $_GET['current'];
		$id = $_SESSION['id'];
		$answer = $_GET['answer'];
		
		if($current == 1)
		{
			
			$query = mysqli_query($sql, "SELECT * FROM round_one WHERE id = $current ");
			$query = mysqli_fetch_array($query);
			$response['questionNumber'] = $query['id'];
			$response['level'] = $query['level'];
			$response['pic'] = $query['pic'];
			$response['a']= $query['a'];
			$response['b']= $query['b'];
			$response['c']= $query['c'];
			$response['d']= $query['d'];
			$response['question'] = $query['question'];
			echo json_encode($response);
		}
		else {

			$query = mysqli_query($sql, "SELECT * FROM round_one WHERE id = $current ");
			$query = mysqli_fetch_array($query);
			$response['questionNumber'] = $query['id'];
			$response['level'] = $query['level'];
			$response['pic'] = $query['pic'];
			$response['a']= $query['a'];
			$response['b']= $query['b'];
			$response['c']= $query['c'];
			$response['d']= $query['d'];
			$response['question'] = $query['question'];
			$query = mysqli_query($sql, "SELECT * FROM round_one WHERE id = $current-1");
			$query = mysqli_fetch_array($query);
			
			if($answer == $query['answer'])
			{
				mysqli_query($sql,"UPDATE online_coding_round1 SET score = `score` + 1 WHERE user_id = $id ");
			}
			mysqli_query($sql,"UPDATE online_coding_round1 SET current = $current -1  WHERE user_id = $id");
			
			echo json_encode($response);
		}
		
	}
	else{
		header('location: ../');
	}


?>
