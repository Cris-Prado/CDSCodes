<?php

    $dbHost = 'sql106.unaux.com';
    $dbUsername = 'unaux_32299181';
    $dbPassword = 'Cris032583@';
    $dbName = 'unaux_32299181_formulario';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    /*
        if($conexao->connect_errno)
        {
            echo "Erro";
        }
        else
        {
            echo "Conexão efetuada com sucesso";
        }
    */
?>