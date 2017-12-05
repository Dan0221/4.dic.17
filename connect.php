<?php

$host="localhost"; 
$username="root";  
$password="";
$db_name="employees_assign"; 

 $con = mysqli_connect($host, $username, $password); 

if (mysqli_connect_errno ())
{
    echo "Error" . mysqli_connect_error();
}


?>
