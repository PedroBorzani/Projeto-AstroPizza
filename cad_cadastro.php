<?php

    if(isset($_POST['submit']))
    {
        /*
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['senha']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['telefone']);
        print_r('<br>');
        print_r($_POST['endereco']);
        */

        session_start();
        error_reporting(0);
        include_once('connect.php');

        $id = 0;
        $id = $_SESSION['Id'];

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        if($id > 0)
        {
            $sql = "UPDATE `usuarios` SET `nome`='".$nome."',`senha`='".$senha."',`email`='".$email."',`telefone`='".$telefone."',`endereco`='".$endereco."' WHERE `Id` = '".$id."'";
            $result = mysqli_query($conexao, $sql);

            if($result == true)
            {
                echo('<script> alert("Contato Atualizado com sucesso!!!");</script>');
                echo('<script> window.location.replace("login.php") </script>');
            }
            else
            {
                echo('<script> alert("Não foi possível Atualizar o Contato, tente novamente mais tarde!");</script>');
                echo('<script> window.location.replace("index.php") </script>');
            }            
        }
        else
        {
            $sql = "INSERT INTO `usuarios` (`nome`, `senha`, `email`, `telefone`, `endereco`) VALUES
            ('".$nome."','".$senha."','".$email."','".$telefone."','".$endereco."')";
            $result = mysqli_query($conexao, $sql);

            if($result == true)
            {
                echo('<script> alert("Contato inserido com sucesso!!!");</script>');
                echo('<script> window.location.replace("login.php") </script>');
            }
            else
            {
                echo('<script> alert("Não foi possível inserir Contato, tente novamente mais tarde!");</script>');
                echo('<script> window.location.replace("index.php") </script>');
            }
        }
    }
    else
    {
        echo('<script> alert("Não foi possível realizar o envio do fórmulario!!");</script>');
        echo('<script> window.location.replace("index.php") </script>');
    }
?>