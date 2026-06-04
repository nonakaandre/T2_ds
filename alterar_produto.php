<?php 
require("conexao.php");

$id = intval(htmlspecialchars($_POST["id"]));
$itemNome = htmlspecialchars($_POST['itemNome']);
$itemDescricao = htmlspecialchars($_POST['itemDescricao']);
$itemPreco = htmlspecialchars($_POST['itemPreco']);
$itemImage = htmlspecialchars($_POST['itemImage']);
$itemLink = htmlspecialchars($_POST['itemLink']); 

$sql = "UPDATE produtos SET itemNome = :nome, descricao = :descricao, preco = :preco, imagem = :imagem, link = :link WHERE id = :id";
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":descricao", $descricao);
    $comando->bindParam(":preco", $preco);
    $comando->bindParam(":imagem", $imagem);
    $comando->bindParam(":link", $link);
    $comando->bindParam(":id", $id);

    $sucesso = $comando->execute();
    if ($sucesso) {
        header("Location: listar_produtos.php");
    } else {
    echo "Falha ao atualiza produto";
    }
?>