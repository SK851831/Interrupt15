<?php

	function dbConnect()
	{
		$sql = mysqli_connect('localhost' ,'root','valarmorghulis','interrupt');
		return $sql;

	}

?>
