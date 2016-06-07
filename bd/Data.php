<?php

require_once "Conexion.php";

class Data{
    private $c;

    public function __construct(){
        $this->c = new Conexion(
            "localhost",
            "veterinaria",
            "root",
            "123456"
        );
    }

    public function crearUsuario($nombre, $apellido, $rut, $clave,$tipoAcceso){
        $q = "insert into usuario
            values (null,
                '$nombre',
                '$apellido',
                '$rut',
                '$clave',
                '$tipoAcceso')";

        $this->c->ejecutar($q);
    }

    public function crearMascota($nombre, $edad, $raza, $sexo, $vacunas ,$medico){
      $q = "insert into usuario
      values (null,
      '$nombre',
      '$edad',
      '$raza',
      '$sexo',
      '$vacuna',
      '$medico')";

      $this->c->ejecutar($q);
    }

    public function eliminarMascota($id){
      $q="delete from mascota where id='$id'";
      $this->c->ejecutar($q);
    }
    public function eliminarUsuario($id){
      $q="delete from usuario where id='$id'";
      $this->c->ejecutar($q);
    }

    public function buscarMascota($filtro){
      $q="select m.id, m.nombre, m.edad, m.raza,
       m.sexo, m.vacunas,u.nombre
       from mascota m,usuario u
       where m.id='$filtro' or m.nombre='$filtro'
       and  m.medico = u.id ;";
      $rs=$this->c->ejecutar($q);
      echo "<table border='1'>";
        echo "<tr>";
          echo "<th>id</th>";
          echo "<th>nombre</th>";
          echo "<th>edad</th>";
          echo "<th>raza</th>";
          echo "<th>sexo</th>";
          echo "<th>vacunas</th>";
          echo "<th>nombre medico</th>";
        echo "</tr>";

      while($reg = mysql_fetch_array($rs)){
        echo "<tr>";
          echo "<td>$reg[0]</td>";
          echo "<td>$reg[1]</td>";
          echo "<td>$reg[2]</td>";
          echo "<td>$reg[3]</td>";
          echo "<td>$reg[4]</td>";
          echo "<td>$reg[5]</td>";
          echo "<td>$reg[6]</td>";
        echo "</tr>";
      }

      echo"</table>";
    }
    public function buscarMascotaPorMedico($filtro){
      $q="select m.id, m.nombre, m.edad, m.raza,
        m.sexo, m.vacunas,u.nombre
        from mascota m,usuario u
        where u.nombre='$filtro'
        and  m.medico = u.id ;";
      $rs=$this->c->ejecutar($q);
      echo "<table border='1'>";
        echo "<tr>";
          echo "<th>id</th>";
          echo "<th>nombre</th>";
          echo "<th>edad</th>";
          echo "<th>raza</th>";
          echo "<th>sexo</th>";
          echo "<th>vacunas</th>";
          echo "<th>nombre medico</th>";
        echo "</tr>";

      while($reg = mysql_fetch_array($rs)){
        echo "<tr>";
          echo "<td>$reg[0]</td>";
          echo "<td>$reg[1]</td>";
          echo "<td>$reg[2]</td>";
          echo "<td>$reg[3]</td>";
          echo "<td>$reg[4]</td>";
          echo "<td>$reg[5]</td>";
          echo "<td>$reg[6]</td>";
        echo "</tr>";
      }

      echo"</table>";
    }

    public function actualizarVacunas($id ,$vacunas){
      $q="update mascota
        set vacunas='$vacunas'
        where id='$id'";
        $this->c->ejecutar($q);
    }

    public function actualizarEdad($id ,$edad){
      $q="update mascota
      set edad='$edad'
      where id='$id'";
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

    }
 ?>
