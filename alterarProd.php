<?php

    require('conexaoBD.php');

    if (isset($_POST['acao'])) {
        $id_produto = $_POST['id_produto'];
        $quantidade  = $_POST['quantidade'];
        $preco = $_POST['preco'];

        $sql = $pdo->prepare("UPDATE `mercado` SET id_produto = :id_produto, quantidade = :quantidade, preco = :preco WHERE id_produto = :id_produto");
        $sql->bindValue(':id_produto', $id_produto);
        $sql->bindValue(':quantidade', $quantidade);
        $sql->bindValue(':preco', $preco);
    

        $sql->execute();
        echo 'Produto atualizado com sucesso!';
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAÇÃO DE PRODUTOS</title>
</head>
<body>
    <h2>Alterando Produtos do Estoque</h2>
    <form method="post">
        <small>Digite o id do Produto</small>
        <br>
        <input type="number" id="id_produto" name ="id_produto" required />
        <br>
        <small>Digite a nova Quantidade</small>
        <br>
        <input type="number" name="quantidade" required />
        <br>
        <small>Digite o novo Valor do Produto</small>
        <br>
        <input type="number" name="preco" mim="0" value="0" step=".01" required />
        <br>
        <br>
        <input type="submit" name="acao" value="Enviar" />
        <input type="reset" value="Apagar" />
    </form>
    <a href="index.php">Voltar Lista de Produtos</a>
</body>
</html>