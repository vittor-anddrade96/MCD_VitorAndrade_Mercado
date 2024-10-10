<?php

    $pdo = new PDO('mysql:host=localhost;dbname=mercado','root','cimatec');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    define('HOST', 'localhost');
    define('DB', 'mercado');
    define('USER', 'root');
    define('PASS', 'cimatec');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(exception $e){
        echo 'Erro ao conectar o Banco de Dados';
    }

?>