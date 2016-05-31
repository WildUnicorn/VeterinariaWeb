<?php

require_once "Conexion.php";

class Data{
    private $c;

    public function __construct(){
        $this->c = new Conexion(
            "localhost",
            "sesiones",
            "root",
            "123456"
        );
    }

    public function crearUsuarioBasico($nombre, $apellido, $rut, $pass,$tipoAcceso){
        $q = "insert into usuario
            values (null,
                '$correo',
                '$apellido',
                '$rut',
                '$pass',
                '$tipoAcceso');";

        $this->c->ejecutar($q);
    }


 ?>
