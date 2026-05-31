<?php 
require("conexao.php");
session_start();

$itemNome = htmlspecialchars($_POST['itemNome']);
$itemDescricao = htmlspecialchars($_POST['itemDescricao']);
$itemPreco = htmlspecialchars($_POST['itemPreco']);
$itemImage = htmlspecialchars($_POST['itemImage']);
$itemLink = htmlspecialchars($_POST['itemLink']);  

$sql = "INSERT INTO produtos (nome, descricao, preco, imagem, link) VALUES (?, ?, ?, ?, ?)";

try {
    $comando = $pdo->prepare($sql);
    $comando->bindValue(1, $itemNome);
    $comando->bindValue(2, $itemDescricao);
    $comando->bindValue(3, $itemPreco);
    $comando->bindValue(4, $itemImage);
    $comando->bindValue(5, $itemLink);

    $sucesso = $comando->execute();
    if ($sucesso) {
        header("Location: admin.php?sucesso=1");
        exit();
    } else {
        echo "Erro ao adicionar o item: " . $comando->errorInfo()[2];
    }
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    exit();
}

?>