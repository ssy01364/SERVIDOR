<?php
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

?>