<?php
error_reporting(0);
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors',1);
//ini_set('html_errors', 1);
require_once('Connections/database.php');
mysql_select_db($database_database, $database);
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
    header("Location:../index.php");
  }
  $user_id=$_SESSION['id'];
if (isset($_SESSION['level'])){
$_SESSION['level']=$_SESSION['level']+1;
$_SESSION['x']=0;
$cques=$_SESSION['x'];
$clevel=$_SESSION['level'];
echo "Entering level ".$_SESSION['level'];
$query_Recordset3="UPDATE  `connection`.`conn_user` SET  `clevel` =  '$clevel' ,`cques` =  '$cques' WHERE  `conn_user`.`id` ='$user_id'";
        // echo $query_Recordset3;
            $Recordset3 = mysql_query($query_Recordset3, $database) or die(mysql_error());

}
else{
  $query="SELECT count(`id`) as `ids` FROM  `conn_user` WHERE  `id` =$user_id";
  // echo $query;
  $result=mysql_query($query,$database);
  $flag=mysql_fetch_assoc($result);
   if($flag['ids']==1)
  {
    $query="SELECT * FROM  `conn_user` WHERE  `id` =$user_id";
    //echo $query;
    $result=mysql_query($query,$database);
    $row1=mysql_fetch_assoc($result);
    $_SESSION["level"]=$row1['clevel'];
    $_SESSION["x"]=$row1['cques'];
  }
 
}

$query_Recordset3="SELECT * FROM  `conn_quesion` where level= ".$_SESSION['level'];
$Recordset3 = mysql_query($query_Recordset3, $database) or die(mysql_error());
$img=array();
$answer=array();
$hint=array();
while($row = mysql_fetch_assoc($Recordset3)){
    array_push($img,$row["pic"]);
    array_push($hint,$row["hint"]);
    array_push($answer,$row["answer"]); 

}
if(empty($img)){
echo "That's all for the day Come tomorrow ";
 header("Location:../logout.php");
}
else{
$_SESSION['pic']=$img;
$_SESSION['answer']=$answer;
$_SESSION['hint']=$hint;

$_SESSION['answered'] = array(0,0,0,0,0);
header("refresh:1;url=home.php");
}
?>