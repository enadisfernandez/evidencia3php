<!--Algoritmo que imprima la suma de todos los numeros pares que van del 1-100 y digas cuantos has.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 9</title>
  </head>
  <body>
    <h3>La suma de todos los numeros pares del 1-100 son:</h3>
 <?php
 $i=1;
 $suma=0;
 $cont=0;
 while ($i<=100) {
  if (($i%2)==0) {
    $suma=$suma+$i;
    $cont++;
}
  $i++;
 }
 echo " $suma </br>";
 echo " El total de numeros pares son: $cont";



  ?>
  </body>
</html>
