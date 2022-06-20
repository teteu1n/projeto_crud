<?php
    //incluir o arquivo de conexão com o banco de dados para validar o usuário
    include 'conecta.php';

    //recupera informações vindas do modal: loginModal da pagina index.php
    $email = strtolower($_POST['email']); //converte email para minusculo
    $senha = $_POST['senha'];

    echo "Recebi email => $email <br>";
    echo "Recebi senha => $senha <br>";

    //Consulta SQL que será inferida na tabela de usuários
    $consulta = 
        "SELECT * FROM usuarios
        WHERE email = '$email' AND senha = '$senha'";

    var_dump($consulta);



?>