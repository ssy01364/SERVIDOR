<?php  
session_start();

if (!isset($_SESSION['id_usu'])) {
    die("Por favor, inicia sesión para ver esta página.");
}

$id_usu = intval($_SESSION['id_usu']);

include '../conexion.php';  

$mes = isset($_GET['mes']) ? $_GET['mes'] : date('m');
$anio = isset($_GET['anio']) ? $_GET['anio'] : date('Y');

$primerDia = date('Y-m-01', strtotime("$anio-$mes-01"));
$ultimoDia = date('Y-m-t', strtotime("$anio-$mes-01"));

$sql = "SELECT fecha, 'Glucosa' AS tipo FROM CONTROL_GLUCOSA WHERE id_usu = $id_usu
        UNION 
        SELECT fecha, 'Comida' FROM COMIDA WHERE id_usu = $id_usu
        UNION 
        SELECT fecha, 'Hiperglucemia' FROM HIPERGLUCEMIA WHERE id_usu = $id_usu
        UNION 
        SELECT fecha, 'Hipoglucemia' FROM HIPOGLUCEMIA WHERE id_usu = $id_usu";
$resultado = $conn->query($sql);

$eventos = [];
if ($resultado) {
    while ($row = $resultado->fetch_assoc()) {
        $eventos[$row['fecha']][] = $row['tipo'];
    }
}

$diaSemana = date('N', strtotime($primerDia));
$diasMes = date('t', strtotime($primerDia));

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario Diabetes</title>
  <link rel="stylesheet" href="../css/login.css">
  <style>
    /* Estilos específicos para el calendario */
    .container-calendar {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      width: 95%;
      max-width: 800px;
      text-align: center;
      color: white;
      margin: 20px auto;
      overflow: auto;
      max-height: 1200px;
    }
    .container-calendar h1 {
      margin-bottom: 20px;
      font-size: 24px;
    }
    /* Navegación del calendario */
    .nav-calendar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
    }
    .nav-calendar a {
      text-decoration: none;
      color: white;
      background: #e67e22;
      padding: 10px 15px;
      border-radius: 5px;
      font-size: 1.2rem;
      transition: 0.3s;
    }
    .nav-calendar a:hover {
      background: #d35400;
    }
    .nav-calendar a:active {
      transform: scale(0.98);
    }
    /* Tabla del calendario */
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.3);
      word-wrap: break-word;
    }
    th {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
    }
    td {
      cursor: pointer;
    }
    td:hover {
      background-color: #3f7cac;
      transition: 0.3s ease;
    }
    td a {
      color: #f39c12; /* Naranja */
      font-size: 1.5rem;
      text-decoration: none;
      display: block;
      padding: 10px;
      transition: transform 0.1s ease, color 0.3s ease;
    }
    td a:hover {
      background-color: #f39c12;
      color: #fff;
    }
    td a:active {
      transform: scale(0.95);
      color: #fff;
    }
    /* Botón para menú principal */
    .button-container {
      margin-top: 20px;
      text-align: center;
    }
    .btn-calendar {
      background-color: #3498db;
      color: white;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
      font-size: 1rem;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .btn-calendar:hover {
      background-color: #2980b9;
      transform: scale(1.05);
    }
    .btn-calendar:active {
      transform: scale(0.95);
    }
  </style>
</head>
<body>
  <div class="container-calendar">
    <div class="nav-calendar">
      <a href="?mes=<?= ($mes == 1) ? 12 : $mes - 1 ?>&anio=<?= ($mes == 1) ? $anio - 1 : $anio ?>">◀ Mes Anterior</a>
      <h1><?= date("F Y", strtotime($primerDia)) ?></h1>
      <a href="?mes=<?= ($mes == 12) ? 1 : $mes + 1 ?>&anio=<?= ($mes == 12) ? $anio + 1 : $anio ?>">Mes Siguiente ▶</a>
    </div>
    <table>
      <tr>
        <th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th>
      </tr>
      <tr>
      <?php
        for ($i = 1; $i < $diaSemana; $i++) {
            echo "<td></td>";
        }
        for ($dia = 1; $dia <= $diasMes; $dia++) {
            $fecha_actual = "$anio-$mes-" . str_pad($dia, 2, "0", STR_PAD_LEFT);
            echo "<td>";
            echo "<a href='datos.php?fecha=$fecha_actual'><strong>$dia</strong></a>";
            echo "</td>";
            if ((($dia + $diaSemana - 1) % 7) == 0) {
                echo "</tr><tr>";
            }
        }
        while ((($dia + $diaSemana - 1) % 7) != 1) {
            echo "<td></td>";
            $dia++;
        }
      ?>
      </tr>
    </table>
    <div class="button-container">
      <a href="seleccionar.php" class="btn-calendar">📋 Menú Principal</a>
    </div>
  </div>
</body>
</html>
