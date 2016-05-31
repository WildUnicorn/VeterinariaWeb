<?php

if(isset($_POST["btnIniciar"])){
    require_once "../bd/Data.php";

    $nombre = $_POST["txtNombre"];
    $clave = $_POST["txtClave"];

    $d = new Data();
    $idtipoAcceso = $d->getTipoAcceso($nombre, $clave);
    $nombre = $d->getNombre($nombre, $clave);

    session_start();
    $_SESSION["idtipoAcceso"] = $idtipoAcceso;
    $_SESSION["nombre"] = $nombre;

    header("location: ../menu.php");
}else{
    header("location: ../index.php?m=1");
}
?>
