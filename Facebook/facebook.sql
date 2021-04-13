create database facebook;

use facebook;

create table usuario(
id_usuario integer PRIMARY KEY AUTO_INCREMENT not null,
nome varchar(20) not null,
sobrenome varchar(60) not null,
emailtel varchar(40) not null,
emailtel_confirm varchar(40) not null,
senha varchar(20) not null,
sexo varchar(12) not null);