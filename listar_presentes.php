<?php 
require("funcoes.php");
autenticar();

require("conexao.php");


$sql = "SELECT * FROM produtos";
$comando = $pdo->query($sql);
$produtos = $comando->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/listar.css">
    <title>Lista de Presentes</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <img src="image/vamoscasar.svg" alt="logo" width="150px">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item col-3">
                        <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item col-5">
                        <a class="nav-link" href="admin.php">Adicionar a lista</a>
                    </li>
                    <li class="nav-item col-5">
                        <a class="nav-link" href="listar_presentes.php">Listar Presentes</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="#">Recebidos</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="mensagens.php">Mensagens</a>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1>Lista de Presentes Cadastrados</h1>
        <table class="table table-striped ">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th class=" col-1">Link</th>
                <th> </th>
            </tr>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= htmlspecialchars($produto['nome']) ?></td>
                <td><?= htmlspecialchars($produto['descricao']) ?></td>
                <td><?= htmlspecialchars($produto['preco']) ?></td>
                <td><img src="<?= htmlspecialchars($produto['imagem']) ?>" alt="Imagem do produto" width="100"></td>
                <td><a href="<?= htmlspecialchars($produto['link']) ?>" target="_blank" class="text-decoration-none">Ver
                        Produto</a></td>
                <td><a href="form_alterar.php?id=<?= $produto['id'] ?>"
                        class="text-decoration-none text-warning">Alterar</a>

                    <a href="excluir.php?id=<?= $produto ['id'] ?>" class="text-decoration-none text-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>