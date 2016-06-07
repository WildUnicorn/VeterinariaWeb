<?php
class Mascota{
    public $id;
    public $nombre;
    public $edad;
    public $raza;
    public $sexo;
    public $vacunas;
    public $medico;// FK (ID)

/*
create table mascota(
    id int not null auto_increment,
    nombre varchar (25),
    edad int,
    raza varchar (25),
    sexo varchar(15),
    vacunas int,
    medico int,
    primary key (id),
    foreign key (medico) references usuario(id)
);
*/
}

 ?>
