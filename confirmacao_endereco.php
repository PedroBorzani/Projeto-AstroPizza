<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
      <title>Confirmação de Cliente</title>
      <link rel="stylesheet" type="text/css" href="site.css">

	<script>
	function concluirPedido() 
	{
	alert("Pedido realizado com sucesso!! Tempo de espera: 20 minutos");
	window.location.href = "inicio.html";
	}
	</script>

</head>

<body>

<?php
include_once("Conectando.php");
$pagamento = $_POST['pagamento'];
$valortotal = $_POST['valortotal'];

$id = 0;


if($id = 0)
{
	echo('<script> alert("Nenhum endereço cadastrado encontrado!!!");</script>');
    echo ('<script> window.location.replace("form_endereco.php") </script>');
}
else
{
	$sql = "SELECT `nome`, `email`, `telefone` FROM `clientes` WHERE id=.$id";
	$resultado = mysqli_query($link, $sql);
	foreach($resultado as $valor)
	{
		$nome = $valor['nome'];
            $email = $valor['email'];
            $telefone = $valor['telefone'];
      }

	$sql = "SELECT `endereco` FROM `cliente` where `telefone` = '$telefone'";
	$resultado = mysqli_query($link, $sql);
}
?>

	<div id = "questionario">
		<h1  class = "titulo"> Confirmação de Informação </h1>

		<label class = "labels"> Nome </label> <br>
		<label class = "labels_confirma"> $nome </label> <br>

		<label class = "labels"> Email </label> <br>
		<label class = "labels_confirma"> $email </label> <br>

		<label class = "labels"> Telefone </label> <br>
		<label class = "labels_confirma"> $telefone </label> <br>

		<form>
		<label class = "labels"> Escolha o endereço: </label>
		<select  id = 'endereco'  name = 'endereco'>
		<?php
			if (mysqli_num_rows($resultado) > 0) 
			{
 				while ($valor = mysqli_fetch_assoc($resultado)) 
				{
            		echo "<option value='{$valor['endereco']}'>{$valor['endereco']}</option>";
        		}
			}
		?>
        	</form>

		<label class = "labels"> Forma de Pagamento </label> <br>
		<label class = "labels_confirma"> pagamento </label> <br>

		<button onclick="concluirPedido()">Concluir Pedido</button>
	</div>
</body>
</html>