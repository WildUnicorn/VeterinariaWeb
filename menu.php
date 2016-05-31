<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION["idtipoAcceso"])){
    header("location: index.php?m=2");
}else{
    $idPrivilegio = $_SESSION["idPrivilegio"];
    $nombre = $_SESSION["nombre"];

    if($idPrivilegio == 0){
        session_destroy();
        header("location: index.php?m=3");
    }
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
  </head>
  <body>

  </body>
</html>
