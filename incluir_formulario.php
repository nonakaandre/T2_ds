<?php 
require("conexao.php");
session_start();

$itemNome = htmlspecialchars($_POST['itemNome']);
$itemDescricao = htmlspecialchars($_POST['itemDescricao']);
$itemPreco = htmlspecialchars($_POST['itemPreco']);
$itemImage = htmlspecialchars($_POST['itemImage']);
$itemLink = htmlspecialchars($_POST['itemLink']);  

$sql = "INSERT INTO produtos (nome, descricao, preco, imagem, link) VALUES (?, ?, ?, ?, ?)";

?>