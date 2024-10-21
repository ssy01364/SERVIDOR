<?php
if (isset($_POST['enviar'])) {
    $numeros = $_POST['numeros'];
    $suma = array_sum($numeros);
    echo "Los números ingresados son: ";
    print_r($numeros);
    echo "<br>La suma de los números es: $suma";
    
} else {
    ?>
    <form action="" method="post">
        <?php for ($i = 0; $i < 9; $i++) { ?>
            <label for="num<?= $i ?>">Número <?= $i + 1 ?>:</label>
            <input type="text" id="num<?= $i ?>" name="numeros[]" required>
            <br>
        <?php } ?>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
}
?>
