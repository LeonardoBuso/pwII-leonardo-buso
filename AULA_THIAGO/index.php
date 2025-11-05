<?php
session_start();
require 'conexao.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-4">
      <?php include('mensagem.php'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Lista de Usuários
                <a href="inserirCheck.php" class="btn btn-primary float-end">Adicionar Usuário</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Nascimento</th>
                    <th>Ações</th>
                  </tr>
                </thead>
               <tbody>
<?php
$query = "SELECT * FROM demo ORDER BY ID DESC";
$resultado = mysqli_query($conexao, $query);

if(mysqli_num_rows($resultado) > 0){
    while($usuario = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>{$usuario['nome']}</td>";
        echo "<td>{$usuario['email']}</td>";
        echo "<td>" . date('d/m/Y', strtotime($usuario['data_nascimento'])) . "</td>";
        echo "<td>
                <a href='visualizar.php?id={$usuario['ID']}' class='btn btn-secondary btn-sm'>Visualizar</a>
                <a href='editar.php?id={$usuario['ID']}' class='btn btn-success btn-sm'>Editar</a>
                <form action='acoes.php' method='POST' class='d-inline'>
                    <button type='submit' name='delete_usuario' value='{$usuario['ID']}' class='btn btn-danger btn-sm'>Excluir</button>
                </form>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Nenhum usuário encontrado</td></tr>";
}
?>
</tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>