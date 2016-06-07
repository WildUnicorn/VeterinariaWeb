create database veterinaria;
 use veterinaria;

  create table tipoAcceso(
     id int not null auto_increment,
     acceso varchar (20),
     primary key (id)
 );
insert into tipoAcceso values (null,'Administrador');
insert into tipoAcceso values (null,'Medico Veterinario');
insert into tipoAcceso values (null,'Dueño');

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


 insert into usuario values (null,'Juan','Gomez','111-1','123456',1);
 insert into usuario values (null,'Juana','Rojas','222-2','654321',2);
 insert into usuario values (null,'Camila','Gonzalez','333-3','123456',2);
 insert into usuario values (null,'Valeria','Flores','444-4','654321',2);
 insert into usuario values (null,'Pedro','Fernandez','555-5','123456',2);
 insert into usuario values (null,'Joaquin','Olivares','666-6','654321',2);
 insert into usuario values (null,'Mauricio','Castillo','777-7','123456',2);
 insert into usuario values (null,'Isidora','Castro','888-8','654321',2);
 insert into usuario values (null,'Dania','Pereira','999-9','123456',2);



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

 /**Elimiar mascota**/
 delete from mascota
 where id="";
 /**Eliminar usuario**/
 delete from usuario
 where id="";

 /**Agregar mascota **/
 insert into mascota values
 (null,'Nombre','edad','raza','sexo','vacunas','medico');


 /**agregar usuario**/
  insert into usuario values
 (null,'nombre','apellido','rut','clave','Tipo acceso');

 /**buscar mascota**/
 select m.id, m.nombre, m.edad, m.raza, m.sexo, m.vacunas,u.nombre  from mascota m,usuario u
 where m.id='' or m.nombre='juana' and  m.medico = u.id ;



 /**buscar cliente por id**/
