<!--Algoritmo que muestre los numeros primos que haya del 1 al 100.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <h3>Los numeros primos del 1-100 son:</h3>
 <?php
   $p=1;


   while ($p <= 100) {
     if ($p==2 or $p==3 or $p==5 or $p==7 or $p==11 or $p==13 or $p==17 or $p==19 or $p==23 or $p==29 or $p==31 or $p==37 or $p==41 or
      $p==43 or $p==47 or $p==53 or $p==59 or $p==61 or $p==67 or $p==71 or $p==73 or $p==79 or $p==83 or $p==89 or $p==97) {
         echo "$p &nbsp";
    }
          $p++;
  }



  ?>
  </body>

</html>
