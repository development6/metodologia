<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
	
		<form action="operacion_guardar.php" method="POST">
			<br/><br/><br/>
			<input type="text" REQUIRED name="Nombre" placeholder="Nombre de la especie" value="" /><br/><br/>
			<input type="text" REQUIRED name="Ubicacion" placeholder="Ubicacion" value="" /><br/><br/>
			<input type="text" REQUIRED name="Latitud" placeholder="Latitud" value="" /><br/><br/>
			<input type="text" REQUIRED name="Longitud" placeholder="Longitud" value="" /><br/><br/>
			<!--<input type="text" REQUIRED name="Tipo" placeholder="Tipo" value="" /><br/><br/> -->
			<input type="text" REQUIRED name="Encargado" placeholder="Encargado" value="" /><br/><br/>
			<input type="submit" value="Aceptar" />
		</form>
		
	
	</center>
</body>
</html>