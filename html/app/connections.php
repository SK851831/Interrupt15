<?php
$host="localhost";
$user="root";
$password="valarmorghulis";
$db="interrupt";
$connect = new mysqli($host,$user,$password,$db);
if(mysqli_connect_errno())
{
	echo mysqli_connect_error();
}
?>
