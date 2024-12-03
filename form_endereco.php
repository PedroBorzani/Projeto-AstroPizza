<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Cliente</title>
        <link rel="stylesheet" type="text/css" href="site.css">
    </head>
    <body>
	<div  id = "Corpo">

<?php
        include_once("Conectando.php");
        error_reporting(0);
        $id = 0;
        $id = $_REQUEST['id'];

        if($id > 0)
        {
            $sql = "SELECT `id`, `telefone`, `endereco` FROM `cliente` WHERE id=".$id;
            
            $resultado = mysqli_query($link, $sql);
            foreach($resultado as $valor)
            {
		    $telefone = $valor['telefone'];
		    $endereco = $valor['endereco'];
            }
        }
    ?>

	<div  id = "questionario">
	<form method="POST"   action="cadastro_endereco.php"   enctype="multipart/form-data">
        
		<input type="hidden" name="id" value="<?php echo $id?>">

		<label class = "labels"> Telefone (11) </label>
		<input type="tel"  class = "caixas"  required  name="telefone"  placeholder ="Telefone" size="40"   value="<?php echo $telefone?>"><br><br>

		<label class = "labels"> Endereço </label>
		<input type="text" class = "caixas"  required  name="endereco"  placeholder = "Informe seu endereço com número e complemento" size="40"   value="<?php echo $endereco?>"><br><br>

        <button type="submit" class="btn_cadastro">Cadastrar</button>
        <button type="reset"  class="btn_resetar">Limpar</button>
	</div>
	</div>
	</form>
	</body>
</html>