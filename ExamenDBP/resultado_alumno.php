<?php
session_start();
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='alumno'){

  echo "  Usted no es alumno, no puede acceder a este listado";
            exit;
}
include('conexion.php');
$id_alumno = $_SESSION['id_usuario'];


$sql_notas = "SELECT * FROM notas WHERE alumno='$id_alumno'";
$res_notas = mysqli_query($conexion, $sql_notas);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado Alumno</title>
</head>
<body>
<h3><?php echo  $_SESSION['nombre_usuario']; ?>, tus notas son: </h3>
<table border="1">


<tr>
<th>Asignatura</th>
<th>Nota</th>

</tr>
<?php while($fila = mysqli_fetch_assoc($res_notas)){ ?>
<tr>
<td><?php echo $fila['asignatura']; ?></td>

<td><?php echo $fila['nota']; ?></td>
</tr>
<?php } ?>
</table>
<form action="menu_alumno.php" method="get">
  <input type="submit" value="Volver">
</form>
<form action="index.php" method="get">
    <input type="submit" value="Cerrar Sesión">
      </form>
</body> 
    </html>
