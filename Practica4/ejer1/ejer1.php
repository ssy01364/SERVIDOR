<?php 
/*1. Crear la clase Operaciones con los métodos necesarios para a partir del código mostrado debajo muestre el siguiente resultado: 
Numeros: 50 20 
Suma: 70 
Resta: -30 
Multiplicacion: 1000 
Division: 0.4 
// crear una objeto de clase Operaciones 
$operar = new Operaciones (50, 20)
 //mostrar el objeto opezar, usa el método toString() 
 echo $operar "<br>" ;
 //mostrar operaciones básicas usando los métodos suma, resta, miltiplicacion y division 
 echo Soperar-numa()"br" ;
 echo Soperar->renta ()"<br>";
 echo Soperar-multiplicacion()"<br>" ;
 echo Soperar->division(). "<br> ;
 */
class Operaciones {
    private $num1;
    private $num2;
  
    public function __construct($num1, $num2) {
      $this->num1 = $num1;
      $this->num2 = $num2;
    }
  
    public function suma() {
      return $this->num1 + $this->num2;
    }
  
    public function resta() {
      return $this->num1 - $this->num2;
    }
  
    public function multiplicacion() {
      return $this->num1 * $this->num2;
    }
  
    public function division() {
      if ($this->num2 != 0) {
        return $this->num1 / $this->num2;
      } else {
        return "Error: División por cero";
      }
    }
  
    public function toString() {
      return "Numeros: $this->num1 $this->num2";
    }
  }
  
  $operar = new Operaciones(50, 20);
  echo $operar->toString() . "<br>";
  echo "Suma: " . $operar->suma() . "<br>";
  echo "Resta: " . $operar->resta() . "<br>";
  echo "Multiplicacion: " . $operar->multiplicacion() . "<br>";
  echo "Division: " . $operar->division();
?>