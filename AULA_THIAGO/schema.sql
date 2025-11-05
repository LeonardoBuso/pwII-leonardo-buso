CREATE DATABASE bdpw2;
USE bdpw2;

CREATE TABLE demo( 
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80),
    data_nascimento DATE,
    cpf VARCHAR(11),
    endereco VARCHAR(255),
    celular VARCHAR(20),
    email VARCHAR(255),
    senha VARCHAR(255) -- campo para armazenar o hash da senha
);
