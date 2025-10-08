create database if not exists Formulario;
drop table if exists dados;

create table dados (
	nome varchar(100),
    idade int(3),
    CPF varchar(11)
);