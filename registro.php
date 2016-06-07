<!DOCTYPE html>
<?php

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>

      <?php
      require_once("bd/Data.php");
      $d = new Data();
      /*controlador\resgistrarUsuario.php*/
      $action = "controlador/resgistrarUsuario.php";
          $d->formularioCrear($action);
       ?>


  </body>
</html>
