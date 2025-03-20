<?php
session_start();
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='director'){
  echo "Usted no es director, no puede insertar";
  exit;
}
include('login.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
  $id_alumno = $_POST['id_alumno'];
  $asignatura = $_POST['asignatura'];
  $nota = $_POST['nota'];

  if($id_alumno=="" || $asignatura=="" || $nota=="" || $nota<0 || $nota>10){
    echo "La nota no valida o tiene campos vacios";
  }
}






?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insertar Notas</title>
</head>
<body>
<h2>Insertar Notas</h2>

<form method="post" action="insertar_notas.php">
<input type="number" name="id_alumno" placeholder="ID Alumno">
<br>
<input type="text" name="asignatura" placeholder="Asignatura">
<br>
<input type="number" step="0.1" name="nota" placeholder="Nota(0-10)">
<br>
<input type="submit" value="Insertar">
</form>
      <form action="menu_director.php" method="get">
        <input type="submit" value="Volver">

    </form>
</body>

</html>
