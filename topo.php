<?php
session_start();
error_reporting(0);
if($_SESSION['telefone'] == TRUE && $_SESSION['nome'] == FALSE)
{
    echo("Telefone: " .$_SESSION['telefone']. "<br>");
}
else if($_SESSION['Id'] == TRUE)
{
    echo("Seja bem vindo " .$_SESSION['nome']);
}
?>


<div class="topo_conteudo_geral">
    <a href="index.php"><img src="imagens/logoalien.png" class="logo"></a>
    <h2>Astro Pizza</h2> 

    <button class="menu_hamburguer" onclick="toggleMenu()">☰</button>

    <ul class="link_menu" id="link_menu">
        <li><img src="imagens/casa.png"><a href="index.php">HOME</a></li>
        <li><img src="imagens/cardapio.png"><a href="cardapio.php">CARDÁPIO</a></li>
        <li><img src="imagens/cupons.png"><a href="cupons.php">CUPONS</a></li>
        <br>
        <div class="acesso">
            <li><a href="login.php" class="link_top">LOGAR</a></li>
            <li><a href="cadastro.php" class="link_top">CADASTRE</a></li>
            <?php
                if($_SESSION['telefone'] == TRUE && $_SESSION['nome'] == FALSE)
                    {
                        echo '<li><a href="acao_logoff.php">LOGOFF</a></li>';
                    }
                else if($_SESSION['Id'] == TRUE)
                    {
                        echo '<li><a href="acao_logoff.php" class="link_top">LOGOFF</a></li>';
                    }
            ?>
        </div>
        
    </ul>

</div>

<body>
    <script src="script.js"></script>
</body>

