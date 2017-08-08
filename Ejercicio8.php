<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adsi- 2017</title>
  </head>
  <body>
    <h1>Algoritmo que imprima la suma de todos los numeros impares que hay entre 1 y 100</h1>
    <div class="container">
    <?php

    $numero=1;
    $suma=0;
    while ($numero <= 100) {
      if (($numero%2)==1) {
        echo "$numero <hr/>";

        $suma=$suma+$numero;
      }
      $numero++;
    }
    echo "la suma de todos los numeros impares entre 1 y 100 es: $suma";

     ?>
    </div>
  </body>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
