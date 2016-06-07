<?php
class Propietario{
    public $id;
    public $nombre;
    public $apellido;
    public $rut;
    public $clave;
    public $tipoAcceso; 
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
?>
