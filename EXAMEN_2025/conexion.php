<?php
$servidor = "localhost:3307";
$usuario = "root"; // Cambia esto si usas otro usuario
$clave = ""; // Cambia esto si tienes una contraseña
$base_datos = "pictogramasphp"; // Nombre de la base en minúsculas

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>