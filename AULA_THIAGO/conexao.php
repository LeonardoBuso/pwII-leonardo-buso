<?php 
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'Leonardobs2008');
define('DB', 'bdpw2');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível estabelecer conexão');
?>