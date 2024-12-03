<?
include_once("Conectando.php");
$nome = "";
$senha = "";
$email = "";
$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


if($id > 0)
{
	$sql = "SELECT `endereco` FROM `cliente` where `telefone` = '$telefone'";
	$resultado = mysqli_query($link, $sql);
	
	$valor = $resultado
	if($valor == $endereco)
	{
		echo('<script> alert("Endereço já está cadastrado com esse número!!!");</script>');
        echo('<script>window.location.replace("index.php"); </script>');
	}
	else
	{
		$sql = "INSERT INTO `clientes`( `nome`, `senha`, `email`, `telefone`, `endereco`) VALUES ('".$nome."', '".$senha."', '".$email."','".$telefone."','".$endereco."')";
		echo('<script> alert("Endereço cadastrado!!!");</script>');
		echo('<script>window.location.replace("login.php"); </script>');
	}
}
else
{
   $sql = "INSERT INTO `cadastro`( `nome`, `senha`, `email`, `telefone`, `endereco`) VALUES ('".$nome."', '".$senha."', '".$email."','".$telefone."','".$endereco."')";
   $resultado = mysqli_query($link, $sql);
   var_dump($resultado);

   if($resultado == true)
   {
      echo('<script> alert("Contato inserido com sucesso!!!");</script>');
      echo ('<script> window.location.replace("login.php") </script>');
   }
   else
   {
      echo('<script>alert("Falha na inserção do contato")</script>');
   } 
}

