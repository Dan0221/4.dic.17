<?php

require "connect.php";

$nombre= $_GET['nombre'];

if (!empty($nombre)) 
{
	$persona= mysqli_real_escape_string($con, $nombre);

	$sql="SELECT * FROM tbl_employees WHERE emp_fname LIKE '%".$nombre."%'";

	$resultadoBD=$con->query($sql);
	
	if($resultadoBD->num_rows > 0){
		while($fila = $resultadoBD->fetch_assoc())
		{
		      echo "You are looking for " . $fila["emp_fname"] . " " . $fila["emp_lname"] . "<br />";
		}		
	}else{
		echo "Nothing found.";
	}

	mysqli_close($con);

}



?>