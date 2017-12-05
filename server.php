<?php

require "connect.php";

$nombre= $_GET['nombre'];

if (!empty($nombre))
{
	$persona= mysqli_real_escape_string($con, $nombre);


	$sql=("SELECT * FROM tbl_employees WHERE nombre LIKE '%".$persona."%'");

	
	$resultadoBD=$con->query($sql);

 
	while($fila = $resultadoBD->fetch_assoc())
	{
		echo $fila['nombre']. " ";
	}

	mysqli_close($con);

}


	

?>