<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['id'])&& isset($_COOKIE['name'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['id'] = $_COOKIE['id'];
      $user_id=$_COOKIE['id'];
      $_SESSION['name'] = $_COOKIE['name'];
    }
  }
  if (!isset($_SESSION['email'])) {
    header("Location:index.php");
  }
  require_once('dbConnect.php');
  $sql = dbConnect();
  $user_id=$_SESSION['id'];

  $query11 = "SELECT * FROM interrupt.workshop WHERE id = $user_id";

        $data11 = mysqli_query($sql,$query11);
        if (mysqli_num_rows($data11)== 1) {
		echo 'You are already registered';
header("refresh:1;url=index.php");

	}else{
  $query1 = "INSERT into interrupt.workshop values($user_id,now())";
$data1 = mysqli_query($sql,$query1);
  echo 'Registered Successfully';
header("refresh:1;url=index.php");

}
?>

