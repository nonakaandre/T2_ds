<?php
require("funcoes.php");
autenticar_convidado();
require("conexao.php");

$id_produto = $_POST['id_produto'];
$nome = htmlspecialchars($_POST['nome']);
$telefone = htmlspecialchars($_POST['telefone']);

$sql = "INSERT INTO presentes_recebidos (id_produto, nome_convidado, telefone) VALUES (?, ?, ?)";

try {
    $comando = $pdo->prepare($sql);
    $comando->bindValue(1, $id_produto);
    $comando->bindValue(2, $nome);
    $comando->bindValue(3, $telefone);

    $sucesso = $comando->execute();
    if ($sucesso) {
        header("Location: convidado.php?sucesso=1");
        exit();
    } else {
        echo "Erro ao registrar presente: " . $comando->errorInfo()[2];
} 
}catch (PDOException $e) {
    echo "Erro ao registrar presente: " . $e->getMessage();
    exit();
}

?>