<?php 
$tipo_banco = "mysql";
$servidor = "localhost";
$porta = "3306";
$banco = "FatecShop";
$usuario = "php";
$senha = "senha123";

$dsn = "$tipo_banco:host=$servidor;port=$porta;dbname=$banco";

try {
    $pdo = new PDO($dsn, $usuario, $senha);
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    exit();
}
?>