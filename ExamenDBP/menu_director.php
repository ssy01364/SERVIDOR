<?php
session_start();
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='director'){
  echo "Usted no es director, no puede acceder";
  exit;

  
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Menu Director

</title>
</head>
    <body>
    <h2>Bienvenido, <?php echo $_SESSION['nombre_usuario']; ?>!</h2>
    <p>Tu perfil es de director/a.</p>
    <form action="insertar_notas.php" method="get">
    <input type="submit" value="Insertar Nota">

    </form>
    <form action="mostrar_notas.php" method="get">
    <input type="submit" value="Mostrar Notas">

    </form>
    <form action="index.php" method="get">
    <input type="submit" value="Cerrar Sesión">

    </form>
    </body>
</html>
