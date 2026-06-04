<?php 
require("funcoes.php");
autenticar_convidado();
require("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Enviar Mensagem</title>
</head>

<body class="d-flex align-items-center justify-content-center py-4">

    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h4 class="text-center mb-4">Deixe uma mensagem para os noivos </h4>
            <form action="gravar_mensagem.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Seu nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
            <?php if (isset($_GET['sucesso'])): ?>
            <div class="alert alert-success alert-dismissible fade show m-3 mt-5" role="alert">
                Mensagem enviada com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>
        </div>
    </div>



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>