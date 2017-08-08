<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adsi- 2017</title>
  </head>
  <body>
    <h1>Algoritmo que imprima la suma de todos los numeros pares que hay entre 1 y 100 y diga cuantos hay </h1>
    <div class="container">

    <?php

    $numero=1;
    $suma=0;
    $contador=0;
    while ($numero <= 100) {
      if (($numero%2)==0) {
        echo "$numero <hr/>";

        $suma=$suma+$numero;
        $contador++;
      }
      $numero++;
    }
    echo "la suma de todos los numeros pares entre 1 y 100 es: $suma <br/>";
    echo "En total hay $contador numeros pares entre 1 y 100";

     ?>
    </div>
  </body>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
