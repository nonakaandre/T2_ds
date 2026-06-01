<?php 
require("funcoes.php");
autenticar();
require("conexao.php");

$sql = "SELECT * FROM mensagem ORDER BY id DESC";
$comando = $pdo->query($sql);
$mensagens = $comando->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/listar.css">
    <title>Mensagens</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <img src="image/vamoscasar.svg" alt="logo" width="150px">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item col-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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

    <div class="container mt-5 pt-5 col-8">
        <h1>Lista de Mensagens Recebidas</h1>
        <table class="table table-striped ">
            <tr>
                <th class="col-3">Nome</th>
                <th class="col-7">Mensagem</th>
                <th class="col-2">Data</th>
            </tr>
            <?php foreach ($mensagens as $mensagem): ?>
            <tr>
                <td><?= htmlspecialchars($mensagem['nome']) ?></td>
                <td><?= htmlspecialchars($mensagem['mensagem']) ?></td>
                <td><?=  htmlspecialchars($mensagem['dt_envio']) ?></td>
                <!--PRECISO ADICIONAR O BOTÃO EXCLUIR A MENSAGEM AQUI-->

            </tr>
            <?php endforeach; ?>
        </table>
    </div>




    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>