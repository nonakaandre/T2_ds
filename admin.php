<?php 

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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="image/vamoscasar.svg" alt="logo" width="150px">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item col-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item col-5">
                        <a class="nav-link" href="#">Adicionar lista</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="#">Recebidos</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="#">Mensagens</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page">

        <div class="contagem-card">
            <span class="subtitle">O grande dia está chegando</span>

            <div class="timer">
                <div class="unit">
                    <span class="num" id="dias">00</span>
                    <span class="label">Dias</span>
                </div>
                <div class="unit">
                    <span class="num" id="horas">00</span>
                    <span class="label">Horas</span>
                </div>
                <div class="unit">
                    <span class="num" id="minutos">00</span>
                    <span class="label">Minutos</span>
                </div>
                <div class="unit">
                    <span class="num" id="segundos">00</span>
                    <span class="label">Segundos</span>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="action-card">
                <div class="action-text">
                    <p class="title">Editar Site</p>
                    <p class="desc">Cores, fotos e história</p>
                </div>
            </div>
            <div class="action-card">
                <div class="action-text">
                    <p class="title">Lista de Presentes</p>
                    <p class="desc">Adicionar/remover itens</p>
                </div>
            </div>
            <div class="action-card">
                <div class="action-text">
                    <p class="title">Doações Recebidas</p>
                    <p class="desc">Quem já te presenteou</p>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>