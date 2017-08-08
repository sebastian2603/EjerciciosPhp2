<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adsi - 2017</title>
  </head>

  <body>
    <h1>Algoritmo que muestre los numeros impares entre 1 y 100</h1>
    <div class="container">

<?php

$numero=1;
while ($numero <= 100) {
  if (($numero%2)==1) {
    echo "<hr/> $numero ";
  }
    $numero++;
}

 ?>
    </div>
  </body>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
