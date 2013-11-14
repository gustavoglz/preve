<!-- Conexión a base de datos-->
	<?php 

include_once "conexion.php"; 
$datos = mysqli_query($conexion,"SELECT * FROM contacto WHERE id=1");

//obtención de variables
while($row = mysqli_fetch_array($datos))
{
	$direccion = $row['direccion'];
	$telefono = $row['telefono'];
	$celular = $row['celular'];
	$nextel = $row['nextel'];
	$email = $row['email'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php include_once "head.php"; ?>
</head>
<body>
	<?php include_once "menu.php"; ?>
<form action="actualiza_contacto.php" method="POST">
	<label>direccion</label> 
	<input type="text" value='<?php echo $direccion ?>' id="direccion" name="direccion"></input><br />
	<label>telefono</label> 
	<input type="text" value='<?php echo $telefono ?>' id="telefono" name="telefono"></input><br />
	<label>celular</label> 
	<input type="text" value='<?php echo $celular ?>' id="celular" name="celular"></input><br />
	<label>nextel</label> 
	<input type="text" value='<?php echo $nextel ?>' id="nextel" name="nextel"></input><br />
	<label>email</label> 
	<input type="text" value='<?php echo $email ?>' id="email" name="email"></input><br />
	<input type="hidden" value='<?php echo $id ?>' id="id" name="id"></input><br />
	
	<input type="submit" value="actualizar"></input><br />
</form>
</body>
</html>