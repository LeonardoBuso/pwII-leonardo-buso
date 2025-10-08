<?php 
    include("conexao_banco.php");

    $nome = $_POST('nome');
    $idade = $_POST('idade');
    $CPF = $_POST('CPF');

    $sql = "INSERT INTO dados (nome, idade, CPF) VALUES ('$nome', '$idade', '$CPF') ";

    if ()
?>