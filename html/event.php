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
  }else{
    $user_id=$_SESSION['id'];
  }
?>
<?php
    require_once('dbConnect.php');
    if(isset($_POST['event'])){
      $eventArr = array('online_code','online_hunt','coding','myb','db','paper','bombsquad','datastructure','dumbc');
      $sql = dbConnect();
      foreach($_POST['event'] as $selected){
        $index=$selected;
        mysqli_query($sql, "UPDATE interrupt.events SET ".$eventArr[$index]." = 1 WHERE user_id = '$user_id'");
      }
    echo 'passed';
  }
?>
