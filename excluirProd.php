<?php

    require('conexaoBD.php');

    if(isset($_POST['acao'])){
        $id_produto = $_POST['id_produto'];

        $sql = $pdo->prepare("DELETE FROM `mercado` WHERE id_produto = :id_produto");
        $sql->bindValue(':id_produto', $id_produto);

        $sql->execute();
        echo 'Produto excluído com Sucesso!';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCLUSÃO DE PRODUTO</title>
</head>
<body>
    <form method="post">
        <br>
        <small>Digite o ID do Produto a ser Excluído</small>
        <br>
        <input type="number" name="id_produto" required />
        <br>
        <h3>Esse Funcionário será excluído, deseja continuar com a Exclusão?</h3>
        <input type="submit" name="acao" value="Excluir" />
    </form>
    <a href="index.php">Voltar Lista de Produtos</a>
</body>
</html>