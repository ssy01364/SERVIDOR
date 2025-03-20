<?php
session_start();
include('login.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
  $usuarioForm = $_POST['usuario'];
  $claveForm = $_POST['clave'];
  
  $sql = "SELECT * FROM usuarios WHERE usuario='$usuarioForm' AND password='$claveForm'";
  $resultado = mysqli_query($conexion, $sql);


  if(mysqli_num_rows($resultado)==1){
    $fila = mysqli_fetch_assoc($resultado);
    $_SESSION['id_usuario'] = $fila['id'];
    $_SESSION['nombre_usuario'] = $fila['usuario'];
     $_SESSION['rol'] = $fila['rol'];


    if($fila['rol']=='director'){

      header("Location: menu_director.php");
    } else {
      header("Location: menu_alumno.php");
    }
    exit;
  } else {
    $error = "X Usuario o contraseña incorrectos";
  }
}






?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Logueo</title>
</head>
<body>
<h2>Iniciar Sesión</h2>

<form method="post" action="index.php">
    <input type="text" name="usuario" placeholder="Usuario">
    <br>
      <input type="password" name="clave" placeholder="Contraseña">
        <br>
      <input type="submit" value="Entrar">

    </form>
<?php if(isset($error)){ echo $error; } ?>

</body>
</html>
