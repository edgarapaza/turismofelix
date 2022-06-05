CREATE DATABASE turismofelix DEFAULT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

CREATE TABLE sitios(
idsitios int not null auto_increment,
nombre varchar(200) not null,
imagen varchar(200) not null,
tipo varchar(100) not null,
descripcion varchar(255) not null,
descripcion2 varchar(255) not null,
precio double not null,
telefono varchar(10),
email varchar(80),
disponible varchar(80),
dias varchar(80),
recomendado boolean,
PRIMARY KEY(idsitios)
)

CREATE TABLE yo(
    idyo int not null auto_increment,
    nombre varchar(60) not null,
    apellido varchar(120) not null,
    username varchar(30) not null,
    passwd varchar(120) not null,
    direccion varchar(150),
    ubicacion varchar(100),
    PRIMARY KEY(idyo) 
)
