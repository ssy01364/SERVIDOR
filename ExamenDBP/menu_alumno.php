<?php
session_start();
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='alumno'){
  echo "Usted no es alumno, no puede acceder";


  exit;
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Menu Alumno</title>
</head>
    <body>


    <h2>Bienvenido, <?php echo $_SESSION['nombre_usuario']; ?>!
    </h2>
    <p>Tu perfil es de alumno/a.</p>
    <form action="resultado_alumno.php" method="get">
    <input type="submit" value="Ver Mis Notas">
    </form>
    <form action="index.php" method="get">
    <input type="submit" value="Cerrar Sesión">
    </form>
    </body>
</html>
