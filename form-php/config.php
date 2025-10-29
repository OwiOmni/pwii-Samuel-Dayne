<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    // corrigido: nome do banco sem backtick extra
    $dbName = 'formulario-samuel';

    // Conexão com verificação de erro e charset
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if ($conexao->connect_error) {
        die('Conexão falhou: ' . $conexao->connect_error);
    }
    $conexao->set_charset('utf8mb4');

?>