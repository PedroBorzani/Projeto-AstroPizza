<?php

    $dbhost = 'LocalHost';
    $dbUsername = 'root';
    $bdPassword = '';
    $bdName = 'projeto';

    $conexao = mysqli_connect($dbhost,$dbUsername,$bdPassword,$bdName);

/*    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão formada com sucesso";
    }
*/
?>