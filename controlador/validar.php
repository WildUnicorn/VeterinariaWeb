<?php

if(isset($_POST["btnIniciar"])){
    require_once "../bd/Data.php";

    $nombre = $_POST["txtNombre"];
    $clave = $_POST["txtClave"];


    $d = new Data();
    $idtipoAcceso = $d->cargarAccesoUsuario($nombre, $clave);
    $nombre = $d->buscarUsuario($nombre, $clave);

    session_start();
    $_SESSION["idtipoAcceso"] = $idtipoAcceso;
    $_SESSION["nombre"] = $nombre;

    //echo "Tipo Acceso: ".$idtipoAcceso;
    //echo "Sesión:".$_SESSION["idtipoAcceso"];
    header("location: ../menu.php");
}else{

  header("location: ../index.php?m=1");
}
?>
