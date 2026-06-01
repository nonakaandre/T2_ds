<?php 
require("funcoes.php");
autenticar();
?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Área administrativa</title>
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
                        <a class="nav-link" href="#lista">Adicionar a lista</a>
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
        </div>
    </nav>

    <?php if (isset($_GET['sucesso'])): ?>
    <div class="alert alert-success alert-dismissible fade show m-3 mt-5" role="alert">
        Item adicionado com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php endif; ?>

    <div class="page ">

        <div class="contagem-card">
            <span class="subtitle">O grande dia está chegando</span>

            <div class="timer">
                <div class="unit">
                    <span class="num" id="dias">301</span>
                    <span class="label">Dias</span>
                </div>
                <div class="unit">
                    <span class="num" id="horas">23</span>
                    <span class="label">Horas</span>
                </div>
                <div class="unit">
                    <span class="num" id="minutos">30</span>
                    <span class="label">Minutos</span>
                </div>
                <div class="unit">
                    <span class="num" id="segundos">00</span>
                    <span class="label">Segundos</span>
                </div>
            </div>
        </div>


    </div>

    <section class="container mt-4" id="lista">
        <h1>Lista de Presentes</h1>
        <h2>Adicionar itens</h2>
        <form action="incluir_produto.php" method="POST">
            <div class="mb-3">
                <label for="itemNome" class="form-label">Nome do item</label>
                <input type="text" class="form-control" id="itemNome" name="itemNome" placeholder="Ex: Jogo de panelas"
                    required>
            </div>
            <div class="mb-3">
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
                <input type="url" class="form-control" id="itemLink" name="itemLink"
                    placeholder="Informe o link de compra do item" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Item</button>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>