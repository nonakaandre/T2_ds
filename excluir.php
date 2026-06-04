<?php 
    require("funcoes.php");
    autenticar();

    require("conexao.php");
    
    $id = intval(htmlspecialchars($_GET["id"]));

    $sql = "DELETE FROM produtos WHERE id = :id" ;
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":id", $id);
    $sucesso = $comando->execute();

    if ($sucesso) {
        header("Location: listar_presentes.php");
    } else {
        echo "Falha ao excluir o produto!";
    }
    
?>