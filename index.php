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
	<div id="menu">
		<?php include_once "menu.php"; ?>
	</div>
	<?php echo "<div id='direccion'>" . $direccion . "</div>"; ?>
</body>
</html>










