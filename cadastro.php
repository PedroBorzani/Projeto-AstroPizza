<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Criando site PHP</title>
        <link rel="stylesheet" type="text/css" href="site.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="cadastro_geral"> <!-- Inicio div geral -->
            <div id="topo">
                <?php
                    include 'topo.php';
                ?>
            </div>

            <div id="menu">
                <?php
                    include 'menu.php';
                ?>
            </div>

            <div id="cadastro_conteudo">
                <?php
                    include 'conteudo_cadastro.php';
                ?>
            </div>
            
        </div> <!-- Fim div geral -->
    </body>
</html>