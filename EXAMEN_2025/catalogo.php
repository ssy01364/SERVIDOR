<?php
session_start();
include("conexion.php");

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$query = "SELECT idimagen, categoria, imagen FROM imagenes";
$result = $conexion-> query($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
    <h1>Listado pictogramas</h1>
    <table>
        <tr>
            <?php
            $cont=0;
            while($row =$result->fetch_assets()){
                echo"<td>";
                echo "<img src= $imagen width='100'height='100'>";
                echo"{$row['categoria']}<br>"; 
                echo"{$row['imagen']}<br>";
                echo"<td>";
                $cont++;
                if($cont % 4==0){
                    echo"</tr>>tr>";

                }
            }
            ?>
      </tr>
    </table>
</body>
</html>