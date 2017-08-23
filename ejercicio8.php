<!--Algoritmo que imprima la suma de todos los numeros impares que van del 1-100.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
  </head>
  <body>
    <h3>La suma de los numeros impares son:</h3>
 <?php

 $i=1;
$suma=0;
 while ($i<=100) {
  if (($i%2)==1) {
 $suma=$suma+$i;
  }
  $i++;
 }
 echo " $suma </br>";

  ?>
  </body>
</html>
