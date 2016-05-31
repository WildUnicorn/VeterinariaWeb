<?php
// viene de index.php con los datos
// POST --> txtCorreo, txtPass, btnIniciar

/*
1.- Si viene viajando algún dato
        - Rescatar los datos
        - llamar al data para el id Privilegio
        - Subir hacia sesión el id
        - ir a menu
2.- si no viene viajando
        - Redirijo automáticamente hacia
        index con un mensaje
*/
if(isset($_POST["btnIniciar"])){
    require_once "../bd/Data.php";

    $nombre = $_POST["txtNombre"];
    $clave = $_POST["txtClave"];

    $d = new Data();
    $idtipoAcceso = $d->getTipoAcceso($nombre, $clave);
    $nombre = $d->getNombre($nombre, $clave);
    // Subir variable hacia sesión
    session_start();
    $_SESSION["idtipoAcceso"] = $idtipoAcceso;
    $_SESSION["nombre"] = $nombre;

    header("location: ../menu.php");
}else{
    header("location: ../index.php?m=1");
}
?>
