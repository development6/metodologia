<!DOCTYPE html>
<html>
<head>
	<title>Guardar imagen</title>
</head>
<body>
			<?php
				include 'conexion.php';
				$id=$_REQUEST['id'];
				$query="SELECT * FROM marcador Where id='$id' ";
				$resultado=$conexion->query($query);
				$row=$resultado->fetch_assoc();
			?>



	<center>
	
		<form action="guardar_imagen.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
			<img height="300px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"/><br/><br/>
			<input type="file" name="Imagen" />
			<input type="submit" value="Subir">
		</form>
			
	
	</center>
</body>
</html>