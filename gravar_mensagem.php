<?php 

require("conexao.php");
 
$nome = htmlspecialchars($_POST['nome']);
$mensagem = htmlspecialchars($_POST['mensagem']);

$sql = "INSERT INTO mensagem (nome, mensagem) VALUES (?, ? )";

try {
    $comando = $pdo->prepare($sql);
    $comando->bindValue(1, $nome);
    $comando->bindValue(2, $mensagem);

    $sucesso = $comando->execute();
    if ($sucesso) {
        header("Location: enviar_mensagem.php?sucesso=1");
        exit();
    } else {
        echo "Erro ao enviar mensagem: " . $comando->errorInfo()[2];
    }
} catch (PDOException $e) {
    echo "Erro ao enviar mensagem: " . $e->getMessage();
    exit();
}
 ?>