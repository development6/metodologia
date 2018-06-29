<?php
include 'conexion.php';
	
	$Nombre=$_POST['Nombre'];
	$Ubicacion=$_POST['Ubicacion'];
	$Latitud=$_POST['Latitud'];
	$Longitud=$_POST['Longitud'];
	//$Tipo=$_POST['Tipo'];
	$Encargado=$_POST['Encargado'];

	$query="INSERT INTO marcador(Nombre,Ubicacion,Latitud,Longitud,Encargado) VALUES('$Nombre','$Ubicacion','$Latitud',
	'$Longitud','$Encargado')";
	$resultado=$conexion->query($query);
	
	if($resultado){
		header("Location: tabla.php");
	}
	else{
		echo "Insercion no exitosa";
	}
	
?>