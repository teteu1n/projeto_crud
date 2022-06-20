<?php
    //arquivo para a conexão com o banco de dados...
    // Dados do SGBD MySQL para a conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";

    // Criando a conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Checando a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    echo "
        <script>alert('Conectado com successo ao Banco de Dados')</script>
    ";
    


?>