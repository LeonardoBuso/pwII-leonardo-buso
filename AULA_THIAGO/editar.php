<?php
include('conexao.php');
$usuario = null;

$id = $_GET['id'] ?? null;

if ($id !== null) {
    $id = intval($id); // segurança extra
    $query = "SELECT * FROM demo WHERE ID = $id";
    $result = mysqli_query($conexao, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);
    }
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <?php if ($usuario): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Usuário
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="acoes.php" method="POST">
                            <input type="hidden" name="id" value="<?= $usuario['ID'] ?>">
                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" value="<?= $usuario['nome'] ?>">
                            </div> 
                            <div class="mb-3">
                                <label>Data de Nascimento</label>
                                <input type="date" name="data_nascimento" class="form-control" value="<?= $usuario['data_nascimento'] ?>">
                            </div>
                            <div class="mb-3">
                                <label>CPF</label>
                                <input type="text" name="cpf" class="form-control" value="<?= $usuario['cpf'] ?>">
                            </div>
                            <div class="mb-3">
                                <label>Endereço</label>
                                <input type="text" name="endereco" class="form-control" value="<?= $usuario['endereco'] ?>">
                            </div>                       
                            <div class="mb-3">
                                <label>Celular</label>
                                <input type="tel" name="celular" class="form-control" value="<?= $usuario['celular'] ?>">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?= $usuario['email'] ?>">
                            </div>
                            <div class="mb-3">
                                <label>Senha (deixe em branco para não alterar)</label>
                                <input type="password" name="senha" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_usuario" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <h6>Check lista Quiosque Morumbi</h6>
                        <a href="tel:+5511999998888">(11)5555-5555</a>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="alert alert-danger mt-4">
            Usuário não encontrado ou ID inválido.
        </div>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
