<?php

if(isset($_POST['submit']))
{
    /*
    print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['senha']);
    print_r('<br>');
    print_r($_POST['telefone']);
    */
    
    session_start();
    include_once('connect.php');
    $id = 0;
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

    
    if($nome == ""  &&  $senha == ""  &&  $telefone != "")
    {
        $sql = "SELECT `Id`, `endereco`, `telefone` FROM `usuarios` WHERE `telefone` = '".$telefone."'";
        $result = mysqli_query($conexao, $sql);

        foreach ($result as $valor) 
        {
           $id = $valor['Id'];
        }

        if($id > 0)
        {
            $_SESSION['endereco'] = $valor['endereco'];
            $_SESSION['telefone'] = $valor['telefone'];
            $_SESSION['Id'] = $valor['Id'];
            echo('<script> alert("Login realizado com Sucesso!!");</script>');
            echo('<script> window.location.replace("index.php?logado=1") </script>');
        }
        else
        {
            unset($_SESSION['endereco']);
            unset($_SESSION['telefone']);
            unset($_SESSION['Id']);
            echo('<script> alert("Número de Telefone não está cadastrado!!");</script>');
            echo('<script> window.location.replace("login.php") </script>');
        }
    }
    else 
    {
        $sql = "SELECT `Id`, `nome`, `senha`, `endereco`, `email`, `telefone` FROM `usuarios` WHERE `nome` = '".$nome."' AND `senha` = '".$senha."' AND `telefone` = '".$telefone."'";
        $result = mysqli_query($conexao, $sql);


        foreach ($result as $valor) 
        {
           $id = $valor['Id'];
        }

        if($id > 0)
        {
            $_SESSION['nome'] = $valor['nome'];
            $_SESSION['senha'] = $valor['senha'];
            $_SESSION['email'] = $valor['email'];
            $_SESSION['endereco'] = $valor['endereco'];
            $_SESSION['telefone'] = $valor['telefone'];
            $_SESSION['Id'] = $valor['Id'];

            echo('<script> alert("Login realizado com Sucesso!!");</script>');
            echo('<script> window.location.replace("index.php?logado=1") </script>');
        }
        else
        {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            unset($_SESSION['email']);
            unset($_SESSION['endereco']);
            unset($_SESSION['telefone']);
            unset($_SESSION['id']);

            echo('<script> alert("Usuário, senha ou número de Telefone incorretas!!");</script>');
            echo('<script> window.location.replace("login.php") </script>');
        }
    }
}
else
{
    echo('<script> alert("Não foi possível realizar o envio do fórmulario!!");</script>');
    echo('<script> window.location.replace("login.php") </script>');
}
?>