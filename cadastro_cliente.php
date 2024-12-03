<?
session_start();
include_once("Conectando.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";

$nome = $_POST["Nome"];
echo $nome;
$senha = $_POST["Senha"];
$email = $_POST["Email"];
$telefone = $_POST["Telefone"];
$endereco = $_POST["Endereco"];


    $sql = "INSERT INTO `clientes`( `nome`, `senha`, `email`, `telefone`, `endereco`) VALUES ('".$nome."', '".$senha."', '".$email."','".$telefone."','".$endereco."')";
    $resultado = mysqli_query($link, $sql);
    var_dump($resultado);
 
    if($resultado == true)
    {
       echo('<script> alert("Contato inserido com sucesso!!!");</script>');
    }
    else
    {
       echo('<script>alert("Falha na inserção do contato")</script>');
    } 