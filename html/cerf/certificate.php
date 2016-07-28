<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
error_reporting(-1);
ini_set('display_errors', 'On');
$hostname_database = "localhost";
$database_database = "interrupt";
$username_database = "root";
$password_database = "valarmorghulis";

$database = mysql_pconnect($hostname_database, $username_database, $password_database) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_database, $database);
$sql = "select email_id,name from interrupt.users,connection.conn_user where conn_user.id=users.id";
$Recordset3 = mysql_query($sql, $database) or die(mysql_error());

$mail=array();
while($row = mysql_fetch_assoc($Recordset3)){
    $mail[$row["name"]]=$row["email_id"];
}

?>