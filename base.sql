/* create table usuario(
    id int NOT null PRIMARY KEY auto_increment,
    nombre varchar (50) not null ,
    apellido varchar(50) not null,
    documento varchar (50) not null,
    fecha_nacimiento date not null
    );

    create table producto(
    id int NOT null PRIMARY KEY auto_increment,
    nombre varchar (50) not null,
    descripcion text not null,
    codigo varchar (10) not null,
    valor_unitario BIGINT (50) not null
    ); */
create database estudiante_acudiente;
use estudiante_acudiente;

CREATE TABLE `estudiante` (
	`id_estu` INT NOT NULL AUTO_INCREMENT,
	`nombre` varchar(50) NOT NULL,
	`apellido` varchar(50) NOT NULL,
	`edad` int(50) NOT NULL,
	`ciudad_nacimiento` varchar(50) NOT NULL,
	`id_acu` INT ,
	`id_ciu` INT  ,
	PRIMARY KEY (`id_estu`)
);

alter table `estudiante` add constraint `estudiante_fk0` foreign key (`id_acu`) references `acudiente`(`id_acu`);
alter table `estudiante` add constraint `estudiante_fk1` foreign key (`id_ciu`) references `ciudad`(`id_ciu`);



CREATE TABLE `acudiente` (
	`id_acu` INT NOT NULL AUTO_INCREMENT,
	`nombre` varchar(50) NOT NULL,
	`apellido` varchar(50) NOT NULL,
	`edad` varchar(50) NOT NULL,
	`telefono` varchar(50) NOT NULL,
	`direccion` varchar(50) NOT NULL,
	PRIMARY KEY (`id_acu`)

);

CREATE TABLE `ciudad` (
	`id_ciu` INT NOT NULL AUTO_INCREMENT,
	`nombre` varchar(50) NOT NULL,
	PRIMARY KEY (`id_ciu`)
);

INSERT INTO ciudad (nombre)  // NOTA no agregar los insert de las ciudades 
VALUES
	("Armenia"),
	("Barrancabermeja"),
	("Barranquilla"),
	("Bogota"),
	("Bucaramanga"),
	("Buga"),
	("Cali"),
	("Cartagena"),
	("Cucuta"),
	("Florencia"),
	("Honda"),
	("Ibague"),
	("Ipiales"),
	("Jamundi"),
	("Leticia"),
	("Manizales"),
	("Mariquita"),
	("Medellin"),
	("Monteria"),
	("Neiva"),
	("Pamplona"),
	("Pasto"),
	("Pereira"),
	("Popayan"),
	("Riohacha"),
	("San andres y providencia"),
	("Santa marta"),
	("Sincelejo"),
	("Sogamoso"),
	("Tabio"),
	("Tumaco"),
	("Tunja"),
     ("Villavicencio"),
    ("Villeta");


//  PROCEDIMIENTO ALMACENADOS 
delimiter $$
create procedure registrar_estudiante(in nombre varchar(50), apellido varchar(50), edad varchar(50), ciudad_nacimiento varchar(50))
begin 
 insert into estudiante(nombre,apellido,edad,ciudad_nacimiento) values(nombre,apellido,edad,ciudad_nacimiento);
end  $$
delimiter $$

"call registrar_estudiante('$nombre','$apellido',$edad,'$ciudadNacimiento')"; 


/* CARLOS  crea la base de datos con el nombre  estudiante_acudiente con los campos que estan arriba,   luego crea las tablas  como estan arriba ignora las que estan como comentarios. Creada las tablas y la base de datos  agrega la carpeta de crud en el directorio 
y  en la parte  DE CLASES (CONEXION) cambien el pasword por root por que yo lo hice con windows .

 Solo hice el primer procedimiento, mas tarde  hago los otros  o si puede adelantar algo dele de una solo faltan crear
los otros  cuatro procedimientos   */




describe estudiante;

drop	table estudiante;

describe acudiente;

delimiter $$
create procedure registrar_estudiante(in nombre varchar(50), apellido varchar(50), edad varchar(50), ciudad_nacimiento varchar(50))
begin 
 insert into estudiante(nombre,apellido,edad,ciudad_nacimiento) values(nombre,apellido,edad,ciudad_nacimiento);
end  $$
delimiter $$

"call registrar_estudiante('$nombre','$apellido',$edad,'$ciudadNacimiento')";

delimiter $$
create procedure consulta_estudiante()
begin
SELECT * FROM estudiante;
end $$
delimiter $$

"call consulta_estudiante()";



delimiter $$
create procedure consulta_id(in iid int(11))
begin
select * from estudiante where id_estu=iid;
end $$
delimiter $$

" call consulta_id ('id')";



delimiter $$
create procedure editar(in nomb varchar(50),apell varchar(50), edaad int(50), ciudadNacimiento varchar (50), iid int (11))
begin
UPDATE estudiante set nombre= nomb,  apellido=apell, edad=edaad, ciudad_nacimiento=ciudadNacimiento WHERE id_estu=iid;
end $$
delimiter $$acudienteacudiente

"call editar('$nombre','$apellido','$edad','$ciudadNacimiento','$id')";


delimiter $$
create procedure eliminar_estudiante(in id_estudiante int(11))
begin
delete from estudiante where id_estu=id_estudiante; 
end $$
delimiter $$

"call eliminar_estudiante('$id')";






// acudiente

delimiter $$
create procedure registrar_acudiente(in nombre varchar(50), apellido varchar(50), edad varchar(50), telefono varchar(50), direccion varchar(50))
begin 
 insert into acudiente(nombre,apellido,edad,telefono,direccion) values(nombre,apellido,edad,telefono,direccion);
end  $$
delimiter $$

 $query="call registrar_acudiente('$nombre','$apellido',$edad,'$telefono','$direccion')";  
 
 delimiter $$
create procedure consulta_acudiente()
begin
SELECT * FROM acudiente;
end $$
delimiter $$

"call consulta_acudiente()";


delimiter $$
create procedure consulta_id_acu(in iid int(11))
begin
select * from acudiente where id_acu=iid;
end $$
delimiter $$

" call consulta_id_acu('$id')";


delimiter $$
create procedure editar_acu(in nombre varchar(50), apellido varchar(50), edad varchar(50), telefono varchar(50), direccion varchar(50), iid int(11))
begin
UPDATE acudiente set nombre= nombre,  apellido=apellido, edad=edad, telefono=telefono, direccion=direccion  WHERE id_acu=iid;
end $$
delimiter $$

"call editar('$nombre','$apellido','$edad','$ciudadNacimiento','$id')";


delimiter $$
create procedure eliminar_acudiente(in id_acudiente int(11))
begin
delete from acudiente where id_acu=id_acudiente; 
end $$
delimiter $$


"call eliminar_acudiente('$id')";



 delimiter $$
create procedure consulta_ciudad()
begin
SELECT * FROM ciudad;
end $$
delimiter $

"call consulta_ciudad()";


select estudiante.nombre, estudiante.apellido,
estudiante.edad,ciudad.nombre as ciudad_de_nacimiento,
acudiente.nombre as nombre_acudiente from estudiante
inner join ciudad on estudiante.id_ciu=ciudad.id_ciu
inner join acudiente on estudiante.id_acu=acudiente.id_acu

CREATE view estudiantes_acu
as 
select estudiante.nombre, estudiante.apellido,
estudiante.edad,ciudad.nombre as ciudad_de_nacimiento,
acudiente.nombre as nombre_acudiente from estudiante
inner join ciudad on estudiante.id_ciu=ciudad.id_ciu
inner join acudiente on estudiante.id_acu=acudiente.id_acu;


select *from  estudiantes_acu;

delimiter $$
create procedure consulta_estudiante()
begin
SELECT * FROM estudiantes_acu;
end $$
delimiter $$

"call consulta_acudiente()";