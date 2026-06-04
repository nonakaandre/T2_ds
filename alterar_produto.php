<?php 
require("funcoes.php");
autenticar();
require("conexao.php");

$id = intval(htmlspecialchars($_POST["id"]));
$itemNome = htmlspecialchars($_POST['itemNome']);
$itemDescricao = htmlspecialchars($_POST['itemDescricao']);
$itemPreco = htmlspecialchars($_POST['itemPreco']);
$itemImage = htmlspecialchars($_POST['itemImage']);
$itemLink = htmlspecialchars($_POST['itemLink']); 

$sql = "UPDATE produtos SET nome = :nome, descricao = :descricao, preco = :preco, imagem = :imagem, link = :link WHERE id = :id";
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":nome", $itemNome);
    $comando->bindParam(":descricao", $itemDescricao);
    $comando->bindParam(":preco", $itemPreco);
    $comando->bindParam(":imagem", $itemImage);
    $comando->bindParam(":link", $itemLink);
    $comando->bindParam(":id", $id);

    $sucesso = $comando->execute();
    if ($sucesso) {
        header("Location: listar_presentes.php");
    } else {
    echo "Falha ao atualiza produto";
    }
?>