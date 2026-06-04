<?php 

require("funcoes.php");
autenticar();

require("conexao.php");

$id = intval(htmlspecialchars($_GET["id"]));

$sql = "SELECT * FROM produtos WHERE id = :id";
$comando = $pdo->prepare($sql);
$comando->bindParam(":id", $id);
$comando->execute();
$produto = $comando->fetch();
?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Alterar presente</title>
</head>

<body>
    <section class="container mt-4" id="lista">
        <h1>Alterar itens</h1>
        <form action="incluir_produto.php" method="POST">
            <div class="mb-3">
                <label for="itemNome" class="form-label">Nome do item</label>
                <input type="text" class="form-control" id="itemNome" name="itemNome"
                    value="<?= $produto["itemNome"] ?>" maxlength="50" required>
            </div>
            <div class=" mb-3">
                <label for="itemDescricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="itemDescricao" name="itemDescricao" rows="3"
                    placeholder="Ex: Conjunto de panelas antiaderentes, ideal para cozinhar com facilidade."
                    required></textarea>
            </div>
            <div class="mb-3">
                <label for="itemPreco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="itemPreco" name="itemPreco" placeholder="Ex: 199.99"
                    step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="itemImage" class="form-label">URL da imagem</label>
                <input type="url" class="form-control" id="itemImage" name="itemImage"
                    placeholder="Informe o URL da imagem do item" required>
            </div>
            <div class=" mb-3">
                <label for="itemLink" class="form-label">Link de compra</label>
                <input type="url" class="form-control" id="itemLink" name="itemLink" rows="2"
                    rows=placeholder=" Informe o link de compra do item" required>
            </div>
            <button type="submit" class="btn btn-primary">Alterar Item</button>
    </section>



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>