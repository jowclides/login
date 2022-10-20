<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'wsphp_login';


    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Validação da conexão:

    if($conexao->connect_errno)
    {

        echo "Erro na conexão:";

    }else {
        //Echo "<center> <h4> Conexão efetuada com sucesso! </h4></center>";
    }





?>