<?php
  class Atencion{
    public $id;
    public $idMascota;// FK (ID)
    public $idMedico;// FK (ID)

  }
  /*
  create table atencion(
  	id int auto_increment,
      idMascota int,
      idMedico int,
      primary key (id),
      foreign key (idMascota) references mascota (id),
      foreign key (idMedico) references medico (id)
  );
  */
 ?>
