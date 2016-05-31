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
    <div id="TituloMenu"> Bienvenidos  <?php echo "$nombre"; ?></div>
    <?php
    require_once("bd/Data.php");
    $d = new Data();

    switch ($idtipoAcceso) {
        case 1:
            echo "<h3>Administrador</h3>";
            break;
        case 2:
            echo "<h3>Veterinario</h3>";
            break;
        case 3:
          echo "<h3>Dueño</h3>";
          break;
    }
    ?>
  </body>
</html>
