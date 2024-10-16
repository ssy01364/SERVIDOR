<?php
/*15. Crea un array con los nombre Pedro, Ismael, Sonia, Clara, Susana, Alfonso y
Teresa. Muestra el número de elementos que contiene y cada elemento en una
lista 
no numerada de html  
*/

$nombre = array ("Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa");
echo count($nombre);
echo "<br>";
echo "<ul>";
foreach ($nombre as $clave => $valor) {
    echo "<li>$valor</li>";
}
echo "</ul>";

?>