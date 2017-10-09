<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MyConnect = "localhost";
$database_MyConnect = "mydb";
$username_MyConnect = "root";
$password_MyConnect = "Kp5610761!";
$MyConnect = mysqli_connect($hostname_MyConnect, $username_MyConnect, $password_MyConnect) or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_set_charset($MyConnect, "utf-8");
//mysqli_query("Set Names UTF8");

mysqli_query($MyConnect, "SET character_set_results=utf8");
mysqli_query($MyConnect, "SET character_set_client=utf8");
mysqli_query($MyConnect, "SET character_set_connection=utf8"); 


function dbconnect()
{
  $hostname_PrintSchedDataCn = 'localhost';
  $database_PrintSchedDataCn = 'mydb';
  $username_PrintSchedDataCn = 'root';
  $password_PrintSchedDataCn = 'Kp5610761!';
  $PrintSchedDataCn = mysqli_connect($hostname_PrintSchedDataCn, $username_PrintSchedDataCn, $password_PrintSchedDataCn, $database_PrintSchedDataCn) or trigger_error(mysqli_error(),E_USER_ERROR);
  mysqli_set_charset($PrintSchedDataCn, "utf-8");
  return $PrintSchedDataCn;
}

?>

