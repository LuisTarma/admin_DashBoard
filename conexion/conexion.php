<?php 

$conexion = mysqli_connect("localhost", "root", "root", "db_prueba");

if (!$conexion) {
	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	echo "error de depuracion: " . mysqli_connect_errno();
	exit;
}

echo "Exito: Se realizo una conexion apropiada" . PHP_EOL;
echo "Informacion del host: " . mysqli_get_host_info($conexion) . PHP_EOL;

mysqli_close($conexion);
?>