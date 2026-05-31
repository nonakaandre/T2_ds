<?php
require("funcoes.php");
autenticar_convidado();
require("conexao.php");

$id_produto = $_GET['id'];

// Busca o produto para mostrar na página
$sql = "SELECT * FROM produtos WHERE id = ?";
$comando = $pdo->prepare($sql);
$comando->bindValue(1, $id_produto);
$comando->execute();
$produto = $comando->fetch();
?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Confirmar Presente</title>
</head>

<body class="d-flex align-items-center py-4">
    <div class="container">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <img src="<?= $produto['imagem'] ?>" class="card-img-top mb-3" alt="<?= $produto['nome'] ?>">
            <h4 class="text-center"><?= $produto['nome'] ?></h4>
            <p class="text-center text-muted">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>

            <form action="registrar_presente.php" method="POST">
                <input type="hidden" name="id_produto" value="<?= $id_produto ?>">
                <div class="mb-3">
                    <label for="nome" class="form-label">Seu nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(11) 99999-9999"
                        required>
                </div>
                <a href="<?= $produto['link'] ?>" target="_blank" class="btn btn-success w-100 mb-2">Ir para compra</a>
                <button type="submit" class="btn btn-primary w-100">Confirmar presente</button>
            </form>
        </div>
    </div>
</body>

</html>