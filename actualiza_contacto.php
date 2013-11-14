<?php

include_once "conexion.php"; 



$id = $_POST["id"];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$nextel = $_POST['nextel'];
$email = $_POST['email'];

$sql = "UPDATE contacto ".
       "SET direccion = '$direccion',telefono = '$telefono',celular = '$celular',nextel = '$nextel',email = '$email' ".
       "WHERE id = 1" ;

$query = mysql_query( $sql, $conexion );



header( 'Location: actualizar_contacto.php?exito=si' );
?>


