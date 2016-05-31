
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
      }

      public function formularioCrear($action){
          echo "<h3>Crear usuario</h3>";
          echo "<form action='$action' method='post'>";
              echo "<input type='text' name='txtNombre' placeholder='Nombre:'>";
              echo "<br/>";
              echo "<input type='text' name='txtApellido' placeholder='Appellido:'>";
              echo "<br/>";
              echo "<input type='nuber' name='txtRut' placeholder='Rut:'>";
              echo "<br/>";
              echo "<input type='password' name='txtClave' placeholder='Clave:'>";
              echo "<br/>";
              $this->cargarTipoAcceso();
              echo "<br/>";
              echo "<input type='submit' name='btnRegistrar' value='Registrar'>";
          echo "</form>";

          /*
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
          */
      }
 ?>
