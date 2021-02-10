create database incidencias;
use incidencias;

create table incidenciasanotadas
(
usuario varchar(30),
departamento varchar(20),
incidencia text
);

insert into incidenciasanotadas
values('Jesus','Informatica','Fallo en la impresora laser')