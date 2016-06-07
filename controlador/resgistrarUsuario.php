
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
/*
create table usuario(
    id int not null auto_increment,
    nombre varchar (20),
    apellido varchar (20),
    rut varchar (12),
    clave varchar (25),
    tipoAcceso int,
    primary key (id),
    foreign key (tipoAcceso) references tipoAcceso(id)
);

*/
header("location: ../registro.php");
 ?>
