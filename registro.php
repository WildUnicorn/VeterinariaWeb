<!DOCTYPE html>
<?php

 ?>
<html>
  <head>
    <meta charset="utf-8">

    <title>Registro</title>
    <style media="screen">
    body{
      background-image: url("img/banner1.jpg");
      background-repeat: no-repeat;
      background-position:top center;
    }
    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;



    </style>
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
