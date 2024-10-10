<?php

require('conexaoBD.php');

if (isset($_POST['acao'])) {
    $produto = $_POST['produto'];
    $quantidade  = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = $pdo->prepare("INSERT INTO mercado (produto,quantidade,preco) VALUES (:produto, :quantidade, :preco)");
    $sql->bindValue(':produto', $produto);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->bindValue(':preco', $preco);

    $sql->execute();
    echo 'Produto cadastrado com sucesso!';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos Sr. Der</title>
</head>

<body>
    <h2>CADASTRO DE PRODUTOS MERCADINHO DO SR. DER</h2>
    <form method="post">
        <small>Produto</small>
        <br>
        <input type="text" name="produto" required />
        <br>
        <small>Quantidade</small>
        <br>
        <input type="number" name="quantidade" required />
        <br>
        <small>Preço do Produto</small>
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