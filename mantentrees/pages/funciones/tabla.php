<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
  .boton{
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 18px;
    font-style: italic;
    color: #006505;
    background-color: #82b085;
    border-radius: 15px;
    border: 3px double #006505;
  }
  .boton_1:hover{
    opacity: 0.6;
    text-decoration: none;
  }
</style >

<style type="text/css">
  .boton1{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
</style>

	<title>Tabla</title>
</head>
<body >

	
	<center>
	<h1>Listado de arboles</h1>
	</center>
	<center>
		<table>
			<thead>
				<tr height="100" >
					<th colspan="1"><a class="boton1" href="formulario.php">Ingresar nuevo registro</a></th>
					<!--<th colspan="8">Listado de arboles</th>-->
				</tr>
			</thead>
			<tbody>
				<tr>
					<!--<td>id</td>-->
					<td><strong>Nombre</strong></td>
					<td><strong>Ubicacion</strong></td>
					<!--<td>Latitud</td>-->
					<!--<td>Longitud</td>-->
					<!--<td>Tipo</td> -->
					<td><strong>Encargado</strong></td>
					<!--<td>Imagen</td>
					<td colspan="2">Operaciones</td>-->
				</tr>
			<?php
				include 'conexion.php';
				$query="SELECT * FROM marcador";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
			?>
				<tr>
					<!--<td><?php echo $row['id']; ?></td>-->
					<td><?php echo $row['Nombre']; ?></td>
					<td><?php echo $row['Ubicacion']; ?></td>
					<!--<td><?php echo $row['Latitud']; ?></td>-->
					<!--<td><?php echo $row['Longitud']; ?></td>-->
					<!--<td><?php echo $row['Tipo']; ?></td> -->
					<td><?php echo $row['Encargado']; ?></td>
					<td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"/></td>
					<td><a class="boton" href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
					<td><a class="boton" href="eliminar.php?id=<?php echo $row['id']; ?>">Remover</a></td>
					<td><a class="boton" href="imagen.php?id=<?php echo $row['id']; ?>">Ver imagen</a></td>
				</tr>
			<?php
				}
			?>
			
			
			</tbody>
		</table>
	</center>
	

</body>
</html>