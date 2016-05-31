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

    public function crearUsuarioBasico($nombre, $apellido, $rut, $clave,$tipoAcceso){
        $q = "insert into usuario
            values (null,
                '$correo',
                '$apellido',
                '$rut',
                '$clave',
                '$tipoAcceso');";

        $this->c->ejecutar($q);
    }

    public function cargarTipoAcceso(){
        $q = "select * from tipoAcceso";

        $rs = $this->c->ejecutar($q);

        echo "<select name='cboPrivilegio'>";
        while($reg = mysql_fetch_array($rs)){
            $id = $reg[0];
            $acceso = $reg[1];
            echo "<option value='$id'>$acceso</option>";

        }
        echo "</select>";


 ?>
