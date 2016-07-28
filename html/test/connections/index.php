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
    header("Location:../quizzler.php");
  }
?>
<?php require_once('Connections/database.php'); ?>
<?php

$user_id=$_SESSION['id'];
mysql_select_db($database_database, $database);
if (isset($_SESSION['level'])){
  if($_SESSION['level']>32){
  
    header("Location:../logout.php");
  }
$clevel=$_SESSION['level'];
}
else
{
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
  else{
  $query_Recordset2="INSERT INTO `conn_user` VALUES('$user_id',1,1,0)";
$Recordset2 = mysql_query($query_Recordset2, $database) or die(mysql_error());
	$_SESSION["level"]=1;
	$_SESSION['x']=0;
  }
}

$query_Recordset3="SELECT * FROM  `conn_quesion` where level= ".$_SESSION['level'];
//echo $query_Recordset3;
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
echo 'That\'s all for the day';
 header("refresh:1;url=../logout.php");
}
else{
$_SESSION['pic']=$img;
$_SESSION['answer']=$answer;
$_SESSION['hint']=$hint;

$_SESSION['answered'] = array(0,0,0,0,0);
header("refresh:1;url=home.php");
}
?>