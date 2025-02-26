<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    die("Usuario no autenticado.");
}
$usuario = htmlspecialchars($_SESSION['usuario']);
?>
<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Opciones</title>
    <link rel="stylesheet" href="../css/login.css">
    <style>
        /* Estilos adicionales para este formulario, en caso de necesitar ajustes específicos */
        body {
            flex-direction: column;
            position: relative;
            padding-top: 60px; /* Espacio para el botón de cerrar sesión */
        }
        .welcome-message {
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 40px;
            color: #fff;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3), 0 0 25px rgba(255, 165, 0, 0.5);
            animation: slideIn 1s ease-out forwards;
        }
        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .form-container {
            max-width: 600px;
            width: 90%;
        }
    </style>
</head>
<body>
    <button class="logout-btn" onclick="window.location.href='../index.php';">🔒 Cerrar sesión</button>
    <div class="welcome-message">¡Bienvenido, <?php echo $usuario; ?>!</div>
    <div class="form-container">
        <h1>Selecciona una opción</h1>
        <form action="procesar.php" method="POST">
            <button type="submit" name="opcion" value="formulario.php" class="submit-btn">🍽️ Añadir comida</button>
            <button type="submit" name="opcion" value="calendario.php" class="submit-btn">📅 Ir al calendario</button>
            <button type="submit" name="opcion" value="estadisticas.php" class="submit-btn">📊 Ir a las estadísticas</button>
        </form>
    </div>
</body>
</html>
