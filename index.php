<?php

    require('conexaoBD.php');
    $sql = $pdo->query("SELECT * FROM mercado");

    $lista = [];
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTOS MERCADINHO DO SR. DER</title>
</head>
<body>
    <h1>Produtos</h1>
    <div class="menu">
                <a href="cadProd.php">Cadastrar Produtos</a>
                <a href="excluirProd.php">Excluir Produtos</a>
                <a href="alterarProd.php">Alterar Produtos</a>
            </div>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>PRODUTO</th>
            <th>QUANTIDADE</th>
            <th>PREÇO</th>
        </tr>
        <?php foreach($lista as $a): ?>
            <tr>
                <td><?php echo $a['id_produto']; ?></td>
                <td><?php echo $a['produto']; ?></td>
                <td><?php echo $a['quantidade']; ?></td>
                <td><?php echo $a['preco']; ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>