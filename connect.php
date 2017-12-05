<?php

$host="127.0.0.1"; 
$username="kmiloarguello";  
$password="";
$db_name="danie"; 

$con = new mysqli($host, $username, $password, $db_name);

if ($connect->connect_error){
  echo "Failed to connect to MySQL: " . $connect->connect_error;
}

?>
