<?php
include 'conexion.php';
	
	$id=$_REQUEST['id'];
	$Nombre=$_POST['Nombre'];
	$Ubicacion=$_POST['Ubicacion'];
	$Latitud=$_POST['Latitud'];
	$Longitud=$_POST['Longitud'];
	//$Tipo=$_POST['Tipo'];
	$Encargado=$_POST['Encargado'];

	$query="UPDATE marcador SET Nombre='$Nombre', Ubicacion='$Ubicacion', Latitud='$Latitud', Longitud='$Longitud', 
	Encargado='$Encargado' WHERE id='$id' ";
	$resultado=$conexion->query($query);
	
	if($resultado){
		header("Location: tabla.php");
	}
	else{
		echo "Insercion no exitosa";
	}
	
?>