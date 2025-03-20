<?php
$servidor = "localhost:3307";
$usuario_bd = "root";
$clave_bd = "";
$base_datos = "bdnotas";
$conexion = new mysqli($servidor, $usuario_bd, $clave_bd, $base_datos);
if(!$conexion){
  die("Error en la conexion");

  
}
?>