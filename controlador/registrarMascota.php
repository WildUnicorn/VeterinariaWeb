<?php
if(isset($_POST["btnRegistrar"])){
require_once "../bd/Data.php";

$nombre = $_POST["txtNombre"];
$edad = $_POST["txtEdad"];
$raza = $_POST["txtRaza"];
$sexo = $_POST["txtSexo"];
$vacunas = $_POST["txtVacuna"]
$medico = $_POST["cboMedico"];

$d = new Data();
$d->crearMascota($nombre, $edad, $raza, $sexo, $vacunas ,$medico);
}

 ?>
