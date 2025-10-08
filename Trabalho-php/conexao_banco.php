<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Formulario";

// Create connection
$conn = new mysqli($servername, $username, $password, $name);

// Check connection
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}
    echo "Conectado com sucesso";
    mysqli_close($conn); // Fechar a conexão
?>
