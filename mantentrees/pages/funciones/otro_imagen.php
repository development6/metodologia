<!DOCTYPE html>
<html>
<head>
	<title>Index de imagenes</title>
</head>
<body>
	<center><br/><br/><br/>
		<?php
			
			$id=$_REQUEST['id'];
				
			require_once 'conexion.php';
			
			
			$query="SELECT * FROM marcador Where id='$id'";
			$resultado=$conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>
		
		<form action="guardar2.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
		
			<input type = "file" name="Imagen" /><br/><br/>
			<input type = "submit" value="Aceptar" />
		
		</form>
	</center>
</body>
</html>