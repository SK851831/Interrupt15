<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_database = "localhost";
$database_database = "coding";
$username_database = "root";
$password_database = "valarmorghulis";
$database = mysql_pconnect($hostname_database, $username_database, $password_database) or trigger_error(mysql_error(),E_USER_ERROR); 
?>