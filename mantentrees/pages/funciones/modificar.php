<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
		<?php
				$id=$_REQUEST['id'];
				
				include 'conexion.php';
				
				$query="SELECT * FROM marcador Where id='$id'";
				$resultado=$conexion->query($query);
				$row=$resultado->fetch_assoc();
			?>
			
		<form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
			
			<br/><br/><br/>
			<input type="text" REQUIRED name="Nombre" placeholder="Nombre de la especie" value="<?php echo $row['Nombre']; ?>" /><br/><br/>
			<input type="text" REQUIRED name="Ubicacion" placeholder="Ubicacion" value="<?php echo $row['Ubicacion']; ?>" /><br/><br/>
			<input type="text" REQUIRED name="Latitud" placeholder="Latitud" value="<?php echo $row['Latitud']; ?>" /><br/><br/>
			<input type="text" REQUIRED name="Longitud" placeholder="Longitud" value="<?php echo $row['Longitud']; ?>" /><br/><br/>
			<!--<input type="text" REQUIRED name="Tipo" placeholder="Tipo" value="<?php echo $row['Tipo']; ?>" /><br/><br/> -->
			<input type="text" REQUIRED name="Encargado" placeholder="Encargado" value="<?php echo $row['Encargado']; ?>" /><br/><br/>
			<input type="submit" value="Aceptar" />
		</form>
	</center>
</body>
</html>