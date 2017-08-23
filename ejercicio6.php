<!--Algoritmo que imprima la suma de todos los numeros que van del 1-100.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <h3>La suma de los numeros del 1-100 es:</h3>
    <?php
    $n=1;
    $suma=0;
      while ($n <= 100) {
        $suma=$suma+$n;
        $n++;
      }
      echo "$suma </br>";
     ?>

  </body>
</html>
