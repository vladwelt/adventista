
SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

CREATE TABLE public.usuario (
  id_usuario SERIAL NOT NULL PRIMARY KEY,
  login varchar(30) NOT NULL,
  password varchar(30) NOT NULL,
  nombre varchar(250) NOT NULL,
  apellido_pat varchar(50) NOT NULL,
  apellido_mat varchar(50),
  fech_nac date NOT NULL,
  direccion varchar(50) NOT NULL,
  telefono int,
  permisos varchar(50) NOT NULL
);

CREATE TABLE administrador () inherits (public.usuario);
CREATE TABLE instructor () inherits (public.usuario);
CREATE TABLE alumno () inherits (public.usuario);

insert into administrador (login, password, nombre, apellido_pat, apellido_mat, fech_nac, direccion, telefono,permisos) 
	values ('ubaldino','asdf','ubaldino','Zurita',null,'18/07/1990','Av. 9 de abril N°123',74356789,'administrador');
insert into instructor (login, password, nombre, apellido_pat, apellido_mat, fech_nac, direccion, telefono,permisos) 
	values ('erikc','asdf','Erick','Pena','Sahonero','20/08/1990','Av. Circunvalacion N°321',72786345,'instructor');
insert into alumno (login, password, nombre, apellido_pat, apellido_mat, fech_nac, direccion, telefono,permisos) 
	values ('vlady','asdf','Vlady','Cespedes',null,'01/01/1990','Av. Barrientos N°213',72345678,'alumno');

ALTER TABLE "usuario" OWNER TO postgres;  
