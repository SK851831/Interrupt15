<?php
  session_start();
    require_once('../dbConnect.php');
    if(isset($_POST['email'])){
        $email=$_POST['email'];
      }if(isset($_POST['pass'])){
        $pass=$_POST['pass'];
      }
      if(isset($email,$pass)){
        $pass=sha1($pass);
        $pass=md5($pass);
        $pass=sha1($pass);
	  	  $sql = dbConnect();

        $query = "SELECT * FROM interrupt.users WHERE email_id = '$email' AND password = '$pass'";
        $data = mysqli_query($sql,$query);
        if (mysqli_num_rows($data)== 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
            $row = mysqli_fetch_array($data);
            $_SESSION['email'] = $row['email_id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            $id=$row['id'];
          setcookie('email', $row['email_id'], time() + (60 * 60 * 24 * 5), "/");  // expires in 30 days
          setcookie('id', $row['id'], time() + (60 * 60 * 24 * 5), "/");  // expires in 30 days
          setcookie('name', $row['name'], time() + (60 * 60 * 24 * 5), "/");  // expires in 30 days
          header('Location: http://interrupt15.in/round1');
        }
        else {
          header('Location: http://interrupt15.in/round1/login');
        }
	  }

?>
