<?php 
require("funcoes.php");
autenticar_convidado();

require("conexao.php");

$sql = "SELECT * FROM produtos ORDER BY preco asc";
$comado = $pdo->query($sql);
$produtos = $comado->fetchAll();


?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="css/convidado.css">
    <title>Área administrativa</title>
</head>

<body style="background-color: #FAF7F1;">

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <img src="image/vamoscasar.svg" alt="logo" width="150px">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item col-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item col-5">
                        <a class="nav-link" href="#sobre">Sobre o Casamento</a>
                    </li>
                    <li class="nav-item col-5">
                        <a class="nav-link" href="#presentear">Presentear Noivos</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="confirmar_presenca.php">Confirmar Presença</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="enviar_mensagem.php">Enviar Mensagens</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if (isset($_GET['sucesso'])): ?>
    <div class="alert alert-success alert-dismissible fade show m-3 mt-5" role="alert">
        Agradecemos muito pelo seu presente! Sua confirmação foi registrada com sucesso.
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
    <section id="sobre" class="container mt-5 pt-5">
        <h2 class="text-center mb-5">Sobre o Casamento</h2>
        <div class="row g-4 text-center">

            <div class="col-md-3 col-6">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <h1>📅</h1>
                        <h5 class="card-title">Data</h5>
                        <p class="card-text">14 de fevereiro de 2026</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <h1>🕔</h1>
                        <h5 class="card-title">Horário</h5>
                        <p class="card-text">16h00 — Cerimônia</p>
                        <p class="card-text">19h00 — Recepção</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <h1>📍</h1>
                        <h5 class="card-title">Local</h5>
                        <p class="card-text">Espaço Villa Jardins</p>
                        <p class="card-text">Av. das Flores, 1200 — Marília, SP</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <h1>👗</h1>
                        <h5 class="card-title">Dress Code</h5>
                        <p class="card-text">Esporte Fino</p>
                        <p class="card-text">Pedimos que evitem a cor branca</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <h1 class="text-center mt-5 display-3">Presentear</h1>
        <div id="presentear" class="container mt-5 pt-5">
            <?php foreach ($produtos as $produto) { ?>
            <div class="card mb-4 d-flex flex-row align-items-stretch">
                <img src="<?= $produto['imagem'] ?>" class="card-img-top align-self-center p-3"
                    alt="<?= $produto['nome'] ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $produto['nome'] ?></h5>
                    <p class="card-text mt-4"><?= $produto['descricao'] ?></p>
                    <p class="card-text mt-auto fw-bold">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                </div>
                <div class="align-self-center p-3">
                    <a href="confirmar_presente.php?id=<?= $produto['id'] ?>"
                        class="btn btn-primary btn-lg">Presentear</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>