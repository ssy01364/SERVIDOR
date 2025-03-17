<?php
session_start();
include("conexion.php");

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
$query = "SELECT  idpersona, nombre, apellidos, edad FROM personas";

$imagenes=$conexion->query("SELECT id,fecha,hora, idpersona,idimagen FROM imagenes");
if($_SERVER["REQUEST_METHOD"] == "POST) "){
    $id=$_POST['id'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $idpersonas=$_POST['personas'];
    $idimagen=$_POST['imagen'];

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AGENDA DE CONTACTOS</h1>
    <form action="#" method="post" >
        
        <label>FECHA</label>
        <input type="data" name="fecha" required>

        <label>HORA</label>
        <input type="time" name="hora" required>

        <label>PERSONA</label>
        <select name="persona">
            <?php while($row=$persona->fetch_assoc())
            ?>
        </select>
        <input type="submit" value="Entrar">
        
    </form>
</body>
</html>


 
