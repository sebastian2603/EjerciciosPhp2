<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adsi - 2017</title>
  </head>

  <body>
    <h1>Algoritmo que muestre los numeros primos entre 1 y 100</h1>
    <div class="container">

<?php

$numero=1;

while ($numero <= 100) {
if ($numero==2 or $numero==3 or $numero==5 or $numero==7 or $numero==11 or $numero==13 or
$numero==17 or $numero==19 or $numero==23 or $numero==29 or $numero==31 or $numero==37 or
$numero==41 or $numero==43 or $numero==47 or $numero==53 or $numero==59 or $numero==61 or
$numero==67 or $numero==71 or $numero==73 or $numero==79 or $numero==83 or $numero==89 or $numero==97) {

  echo "$numero <hr/>";
  }

$numero++;
}

 ?>
    </div>
  </body>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
