<!--Algoritmo  que muestre los numeros impares que haya del 1 al 100.-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h3>los numeros impares son:</h3>
 <?php

 $i=1;

 while ($i<=100) {
  if (($i%2)==1) {
    echo " $i </br>";

  }
  $i++;
 }

  ?>
  </body>
</html>
