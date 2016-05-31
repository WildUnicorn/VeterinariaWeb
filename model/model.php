<?php
class Usuario{
    public $id;
    public $nombre;
    public $appellido;
    public $rut;
    public $clave;
    public $tipoAcceso// FK (ID)

    //*
    id auto_increment,
     nombre varchar (20),
     apellido varchar (20),
     rut varchar (12),
     clave varchar (25),
     tipoAcceso int,
     primary key (id),
     foreign key (tipoAcceso) references tipoAcceso(id)
    *//
}
?>
