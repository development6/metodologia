<?php

	include 'conexion.php';
	
	$id=$_REQUEST['id'];
	
	$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
	
	$query="UPDATE marcador SET Imagen='$Imagen' Where id='$id' ";
	$resultado=$conexion->query($query);
	
	if($resultado){
		header("Location: tabla.php");
	}
	else{
		echo "Insercion fallida";	}
	

?>