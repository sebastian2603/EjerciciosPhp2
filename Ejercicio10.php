<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adsi - 2017</title>
  </head>
  <body>
    <h1>Algoritmo que solicite dos numeros y que muestre todos los numeros que hay entre ellos</h1>
    <div class="container">
      <form method="post">
        <br>
        <br>
        <label>Ingrese un numero: &nbsp &nbsp</label>
        <input type="number" name="numero1" value="">
        <br>
        <br>
        <label>Ingrese otro numero: &nbsp</label>
        <input type="number" name="numero2" value="">
        <br>
        <br>
        <input class="btn btn-target" type="submit" name="Enviar" value="Ver numeros">
        <hr>

        <?php
        $numero1=$_POST['numero1'];
        $numero2=$_POST['numero2'];

        while ($numero1 <= $numero2) {
          echo "$numero1 &nbsp   ";

          $numero1++;

        }
         ?>
         <hr>
       </form>
    </div>

    </body>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>
