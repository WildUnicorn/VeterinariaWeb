create database veterinaria;
 use veterinaria;

 create table tipoAcceso(
     id int auto_increment,
     acceso varchar (20),
     primary key (id)
 );

insert into tipoAcceso values (null,'Administrador');
insert into tipoAcceso values (null,'Medico Veterinario');
insert into tipoAcceso values (null,'Dueño');

create table propietario(
id int auto_increment,
rut varchar (12),
nombre varchar (20),
apellido varchar (20),
telefono int,
primary key (id)
);

 insert into propietario values (null,'101-0','Maria Jose','Valdes',778899);

 create table mascota(
     id int auto_increment,
     nombre varchar (25),
     edad int,
     raza varchar (25),
     sexo varchar(15),
     vacunas int,
     propietario int,
     primary key (id),
     foreign key (propietario) references propietario(id)
 );

 insert into mascota values (null,'boby',5,'Labrador','macho',2,1);
 insert into mascota values (null,'bobo',6,'dalmata','macho',6,1);

 create table medico(
id int auto_increment,
rut varchar (12),
nombre varchar (20),
apellido varchar (20),
primary key (id)
);

 insert into  medico values (null,'333-3','Camila','Gonzalez');
 insert into  medico values(null,'444-4','Valeria','Flores');
 insert into  medico values (null,'555-5','Pedro','Fernandez');
 insert into  medico values (null,'666-6','Joaquin','Olivares');
 insert into  medico values (null,'777-7','Mauricio','Castillo');
 insert into  medico values (null,'888-8','Isidora','Castro');
 insert into  medico values (null,'999-9','Dania','Pereira');

 create table administrador (
	id int auto_increment,
    rut varchar(12),
    clave varchar (25),
    primary key (id)
);
insert into administrador values (null,'111-1','123456');

create table atencion(
	id int auto_increment,
    idMascota int,
    idMedico int,
    primary key (id),
    foreign key (idMascota) references mascota (id),
    foreign key (idMedico) references medico (id)
);

insert into atencion values (null,2,4);


select * from mascota;

 select m.id, m.nombre, m.edad, m.raza, m.sexo, m.vacunas, p.nombre as 'propietario'
                from mascota m, propietario p;
                /*where m.id = 2;*/

select * from mascota;
select * from medico;
select * from atencion;

select m.nombre as 'Mascota', m.edad, m.raza, m.sexo, m.vacunas, me.nombre 'Medico', a.id 'Numero Atencion'
	from mascota m, medico me, atencion a
    where m.id = 2 and me.id = 4;
