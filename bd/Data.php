<?php
require_once "Conexion.php";

class Data{
    private $c;

    public function __construct(){
        $this->c = new Conexion(
            "localhost",
            "veterinaria",
            "root",
            ""
        );
    }

    public function getAcceso($rut, $clave){
        $query = "select a.id ".
        "from tipoAcceso a, usuario u ".
        "where a.id = u.tipoAcceso and ".
        "u.rut = '$rut' and ".
        "u.clave = '$clave';";

        $rs = $this->c->ejecutar($query);

        $tipoAcceso = 0;

        /*Si existe algún registro*/
        if($reg = mysql_fetch_array($rs)){
            $tipoAcceso = $reg[0];
        }

        return $tipoAcceso;
    }

    public function listarMascotasId($idMa, $idMe){
        $q = "select m.nombre as 'mascota', m.edad, m.raza, m.sexo, m.vacunas, me.nombre 'medico', a.id 'numero atencion'
	           from mascota m, medico me, atencion a
               where m.id = $idMa and me.id = $idMe;";

        $rs = $this->c->ejecutar($q);
        echo "<h1>Listado de mascotas</h1>";

        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Edad</th>";
                echo "<th>Raza</th>";
                echo "<th>Sexo</th>";
                echo "<th>Vacunas</th>";
                echo "<th>Medico</th>";
                echo "<th>Numero Atencion</th>";
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

        echo "</table>";
    }

    public function eliminarPropietario($id){
        $q = "delete from propietario where id = $id";
        $this->c->ejecutar($q);
    }

    public function getNombrePropietario($rut){
        $q = "select nombre
                from propietario
                where rut = '$rut';";

        $rs = $this->c->ejecutar($q);

        $nombre = "null";
        if($reg = mysql_fetch_array($rs)){
            $nombre = $reg[0];
        }

        return $nombre;
    }

    public function getNombreMedico($rut){
        $q = "select nombre
                from medico
                where rut = '$rut';";

        $rs = $this->c->ejecutar($q);

        $nombre = "null";
        if($reg = mysql_fetch_array($rs)){
            $nombre = $reg[0];
        }

        return $nombre;
    }

    public function crearPropietario($rut, $nombre, $apellido, $telefono){
        $q = " insert into propietario values (null,
                '$rut',
                '$nombre',
                '$apellido',
                 $telefono);";

        $this->c->ejecutar($q);
    }

    public function crearMedico($rut, $nombre, $apellido){
        $q = "insert into medico values (null,
                '$rut',
                '$nombre',
                '$apellido');";

        $this->c->ejecutar($q);
    }

    public function crearMascota($nombre,$edad, $raza, $sexo, $vacunas, $propietario){
        $q = " insert into mascota values (null,
                    '$nombre',
                     $edad,
                    '$raza',
                    '$sexo',
                    $vacunas,
                    $propietario);";

        $this->c->ejecutar($q);
    }



    public function formularioAgregarPropietario($action){
        echo "<h3>Registrarse</h3>";
        echo "<form action='$action' method='post'>";
            echo "<input type='text' name='txtNombre' placeholder='Nombre:'>";
            echo "<br/>";
            echo "<input type='text' name='txtApellido' placeholder='Apellido:'>";
            echo "<br/>";
            echo "<input type='password' name='txtClave' placeholder='Clave:'>";
            echo "<br/>";
            echo "<input type='text' name='txtTelefono' placeholder='Telefono:'>";
            echo "<br/>";
            echo "<input type='submit' name='btnRegistrar' value='Registrar'>";
        echo "</form>";
    }

    public function formularioAgregarMedico($action){
        echo "<h3>Registrar medico</h3>";
        echo "<form action='$action' method='post'>";
            echo "<input type='text' name='txtNombre' placeholder='Nombre:'>";
            echo "<br/>";
            echo "<input type='text' name='txtApellido' placeholder='Apellido:'>";
            echo "<br/>";
            echo "<input type='password' name='txtClave' placeholder='Clave:'>";
            echo "<br/>";
            echo "<input type='submit' name='btnRegistrar' value='Registrar'>";
        echo "</form>";
    }

    public function cargarPropietarios(){
        $q = "select * from propietario";

        $rs = $this->c->ejecutar($q);

        echo "<select name='cboPropietario'>";
        while($reg = mysql_fetch_array($rs)){
            $id = $reg[0];
            $nombre = $reg[1];
            echo "<option value='$id'>$nombre</option>";
        }
        echo "</select>";
    }

    public function formularioAgregarMascota($action){
        echo "<h3>Agregar Mascota</h3>";
        echo "<form action='$action' method='post'>";
            echo "<input type='text' name='txtNombre' placeholder='Nombre:'>";
            echo "<br/>";
            echo "<input type='text' name='txtApellido' placeholder='Edad:'>";
            echo "<br/>";
            echo "<input type='password' name='txtClave' placeholder='Raza:'>";
            echo "<br/>";
            echo "<input type='text' name='txtTelefono' placeholder='Vacunas:'>";
            echo "<br/>";
            echo "Sexo:";
            echo "<br/>";
            echo "<input type="radio" name="rdSexo" value="Masculino">Masculino.";
            echo "<input type="radio" name="rdSexo" value="Femenino">Femenino.";
            echo "<br/>";
            echo "<input type='text' name='txtTelefono' placeholder='Vacunas:'>";
            echo "<br/>";
            cargarPropietarios();
            echo "<br/>";
            echo "<input type='submit' name='btnRegistrar' value='Registrar'>";
        echo "</form>";
    }
}
?>
