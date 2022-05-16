<?php
$servidor = 'localhost';
$usuario ='root';
$contraseña = '';
$db = 'formulario';

$conexion = mysqli_connect($servidor,$usuario, $contraseña, $db);
if (!$conexion) {
	echo 'error de conexion';
}
?>