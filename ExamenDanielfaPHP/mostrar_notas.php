<?php
session_start();
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='director'){
  echo "Usted no es director, no puede ver las notas de los alumnos";
  exit;
}
include('login.php');
 $asignaturas = [];

$sql_asignaturas = "SELECT DISTINCT asignatura FROM notas";
$res_asignaturas = mysqli_query($conexion, $sql_asignaturas);
            while($fila = mysqli_fetch_assoc($res_asignaturas)){

        $asignaturas[] = $fila['asignatura'];
}

    $sql_alumnos = "SELECT * FROM alumnos";
    $res_alumnos = mysqli_query($conexion, $sql_alumnos);
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mostrar Notas</title>

</head>
<body>

  <h2>Notas de los Alumnos</h2>
<table border="1">
<tr>
<th>Alumno</th>

<?php foreach($asignaturas as $asig){ ?>
<th><?php echo $asig; ?></th>

<?php } ?>
</tr>
      <?php while($alumno = mysqli_fetch_assoc($res_alumnos)){ ?>
        <tr>
<td><?php echo $alumno['apellidos']." ".$alumno['nombre']; ?></td>
<?php foreach($asignaturas as $asig){
    $sql_nota = "SELECT nota FROM notas WHERE alumno='".$alumno['id']."' AND asignatura='$asig'";
  $res_nota = mysqli_query($conexion, $sql_nota);
  $nota = "";
            if(mysqli_num_rows($res_nota)>0){
            $fila_nota = mysqli_fetch_assoc($res_nota);
            $nota = $fila_nota['nota'];
    }
?>
<td><?php echo $nota; ?></td>
    <?php } ?>
</tr>


<?php } ?>


</table>
<form action="menu_director.php" method="get">
<input type="submit" value="Volver">
</form>
</body>
</html>
