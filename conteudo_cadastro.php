<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="site.css">
    </head>

<?php
    session_start();
    error_reporting(0);

    if($_SESSION['Id'] == TRUE)
    {
        $nome = $_SESSION['nome'];
        $senha = $_SESSION['senha'];
        $email = $_SESSION['email'];
        $endereco = $_SESSION['endereco'];
        $telefone = $_SESSION['telefone'];

        /*
        print_r($nome);
        print_r("<br>");    
        print_r($senha);
        print_r("<br>");
        print_r($email);
        print_r("<br>");
        print_r($endereco);
        print_r("<br>");
        print_r($telefone);
        print_r("<br>");
        */
    }
?>

    <div class="cadastro_geral">

            <div>
                <img src="imagens/warrior.png">
            </div>

        <form method="POST" action="cad_cadastro.php" class="cadastro_form">
            <h2>Criar minha conta</h2>
            <h4>Qual seu nome?</h4>
            <input type="text"  name="nome"  id="nome"  size="60"  placeholder="NOME"  value="<?= $nome;?>"  required>
            <h4>Qual seu email?</h4>
            <input type="email"  name="email"  id="email"  size="60"  placeholder="EMAIL"  value="<?= $email;?>">
            <h4>Crie uma senha</h4>
            <input type="password"  name="senha"  id="senha"  size="60"  placeholder="SENHA" value="<?= $senha;?>" required>
            <h4>Qual seu número de Telefone?</h4>
            <input type="tel"  name="telefone"  id="telefone"  size="60"  placeholder="NÚMERO DE TELEFONE" value="<?= $telefone;?>" required>
            <h4>Coloque seu endereço completo</h4>
            <input type="text"  name="endereco"  id="endereco"  size="60"  placeholder="ENDEREÇO COMPLETO" value="<?= $endereco;?>" required>
            
            <button type="submit"   name="submit"  id="submit">CADASTRATAR</button>
            <button type="reset">LIMPAR</button>
        </form>
        <div class="info_final_cadastro">
            <a href="index.php"><p>&larr; Voltar para a página principal</p></a>
            <span>Já possui cadastro ? Então click no link <a href="login.php">Logar</a> para entrar</span>
            
        </div>
    </div>

</html>