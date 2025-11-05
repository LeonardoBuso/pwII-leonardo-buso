<?php
session_start();
require 'conexao.php';

// Criar usuário
if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $senha = isset($_POST['senha']) 
        ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) 
        : '';

    $sql = "INSERT INTO demo (nome, data_nascimento, cpf, endereco, celular, email, senha) 
            VALUES ('$nome', '$data_nascimento', '$cpf', '$endereco', '$celular', '$email', '$senha')";

    if (mysqli_query($conexao, $sql)) {
        $_SESSION['mensagem'] = '✅ Usuário criado com sucesso!';
    } else {
        $_SESSION['mensagem'] = '❌ Erro ao criar usuário: ' . mysqli_error($conexao);
    }

    header('Location: index.php');
    exit;
}

// Excluir usuário
if (isset($_POST['delete_usuario'])) {
    $id = mysqli_real_escape_string($conexao, $_POST['delete_usuario']);

    $sql = "DELETE FROM demo WHERE ID = '$id'";
    if (mysqli_query($conexao, $sql)) {
        $_SESSION['mensagem'] = '🗑️ Usuário excluído com sucesso!';
    } else {
        $_SESSION['mensagem'] = '❌ Erro ao excluir usuário: ' . mysqli_error($conexao);
    }

    header('Location: index.php');
    exit;
}

if (isset($_POST['update_usuario'])) {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (!empty($senha)) {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $query = "UPDATE demo SET nome='$nome', data_nascimento='$data_nascimento', cpf='$cpf', endereco='$endereco', celular='$celular', email='$email', senha='$senha_hash' WHERE ID=$id";
    } else {
        $query = "UPDATE demo SET nome='$nome', data_nascimento='$data_nascimento', cpf='$cpf', endereco='$endereco', celular='$celular', email='$email' WHERE ID=$id";
    }

    mysqli_query($conexao, $query);
    header("Location: index.php?msg=Usuario atualizado");
    exit;
}


?>
