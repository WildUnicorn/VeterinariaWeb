<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <?php
    if(isset($_POST["btnRegistrar"])){
    require_once "bd/Data.php";

    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $rut = $_POST["txtRut"];
    $clave = $_POST["txtClave"];
    $tipoAcceso = $_POST["txtTipoAcceso"];
    $privilegio = $_POST["cboPrivilegio"];

    $d = new Data();
    $d->crearUsuarioBasico($nombre, $apellido, $rut, $clave,$tipoAcceso);
}



     ?>
  </body>
</html>
