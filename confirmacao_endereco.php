<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="site.css">
	<title>Nota</title>
</head>
<body class="nota_geral">
	<?php

	if(isset($_POST['submit']))
	{

		/*
		print_r($_POST['pagamento']);
		print_r('<br>');
		print_r($_POST['entrega']);
		print_r('<br>');
		print_r($_POST['valortotal']);
		print_r('<br>');
		print_r($_POST['pedido']);
		*/

		session_start();
		error_reporting(0);
		include_once("connect.php");
		
		$pagamento = $_POST['pagamento'];
		$entrega = $_POST['entrega'];
		$valortotal = $_POST['valortotal'];
		$pedido = $_POST['pedido'];
		
		$nome = $_SESSION['nome'];
		$email = $_SESSION['email'];
		$endereco = $_SESSION['endereco'];
		$telefone = $_SESSION['telefone'];
		$id = $_SESSION['Id'];


		if($entrega == 'entrega')
		{
			if($_SESSION['Id'] == TRUE)
			{
				$sql = "INSERT INTO `pedidos` (`nome`, `telefone`, `endereco`, `pedido`, `valortotal`, `pagamento`) VALUES
				('".$nome."','".$telefone."','".$endereco."','".$pedido."','".$valortotal."','".$pagamento."')";
				$result = mysqli_query($conexao, $sql);
			
				$ultimo_id = $conexao->insert_id;

				echo('<script> alert("Pedido realizado com sucesso!!");</script>');
				echo("<label> Nome a ser chamado: </label> $nome <br>");
				echo("<label> Email de contato: </label> $email <br>");			
				echo("<label> Número de Telefone: </label> $telefone <br>");
				echo("<label> Endereço: </label> $endereco <br>");
				echo("<label> Número do Pedido: </label> $ultimo_id <br>");
				echo("<label> Valor total: </label> $valortotal <br>");
				echo("<label> Tempo de Demora: 35 minutos</label><br>");
				echo("<a href=index.php>Voltar para a página inicial</a>");
			}
			else
			{
				echo('<script> alert("Não foi possivel encontrar o login!!!");</script>');
				echo('<script> alert("Por favor cadastre seu endereco ou realize o login!!!");</script>');
				echo('<script> window.location.replace("login.php") </script>');
			}
		}
		else if($entrega == 'retirar')
		{
			$sql = "INSERT INTO `pedidos` (`pedido`, `valortotal`, `pagamento`) VALUES
			('".$pedido."','".$valortotal."','".$pagamento."')";
			$result = mysqli_query($conexao, $sql);

			$ultimo_id = $conexao->insert_id;

			echo('<script> alert("Pedido realizado com sucesso!!");</script>');
			echo('<script> alert("Em torno de 25 minutos já pode vir para retirar!!");</script>');
			echo("<label> Número do Pedido: </label> $ultimo_id <br>");
			echo("<label> Valor total: </label> $valortotal <br>");
			echo("<label> Tempo de Demora: 25 minutos</label><br>");
			echo("<a href=index.php>Voltar para a página inicial</a>");
		}
		else
		{
			echo('<script> alert("Não foi possivel realizar o pedido!!! Tente novamente!!");</script>');
			echo('<script> window.location.replace("cardapio.php") </script>');
		}
	}
	else
	{
		echo('<script> alert("Não foi possivel realizar o pedido!!! Tente novamente!!");</script>');
		echo('<script> window.location.replace("cardapio.php") </script>');
	}

	?>
	
</body>
</html>
