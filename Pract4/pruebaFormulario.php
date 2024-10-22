
<?php
if (isset($_POST['enviar'])) {
    $numeros = $_POST['numeros'];
    $suma = array_sum($numeros);
    echo "Los números ingresados son: ";
    print_r($numeros);
    echo "<br>La suma de los números es: $suma";
    include('script2.php');
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

/*
 echo"<form>";
    for($i=0; $i<=9; $i++){
     echo<<<_END
<label for="$i">$i:</label>
<input type="text" id="num1" name="$i" required>
<br>
_END;
  
}
echo<<<_END
<input type="submit"  value="Enviar">
_END;
    echo"</form>";
*/
?>