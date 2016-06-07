
?>

<?php
if(isset($_POST["btnRegistrar"])){
require_once "../bd/Data.php";

$nombre = $_POST["txtNombre"];
$apellido = $_POST["txtApellido"];
$rut = $_POST["txtRut"];
$clave = $_POST["txtClave"];
$tipoAcceso = $_POST["cboPrivilegio"];

$d = new Data();
$d->crearUsuario($nombre, $apellido, $rut, $clave,$tipoAcceso);
}
    header("location: ../menu.php");
//header("location: ../registro.php");
 ?>
