<!DOCTYPE html>
<html lang="pt-BR">
<head>
      <meta charset="utf-8">
	<title> Carrinho </title>
      <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1 class = "titulo"> Pizzas Escolhidas: </h1>

<?php

session_start();
include_once("conectando.php");

$mussarela = $_POST['mussarela'];
$calabresa = $_POST['calabresa'];
$frgcatupy = $_POST['frgcatupy'];
$margerita = $_POST['margerita'];
$portuguesa = $_POST['portuguesa'];
$quatro_queijos = $_POST['quatro_queijos'];
$bacon = $_POST['bacon'];
$chocomorango = $_POST['chocomorango'];



echo "No seu carrinho foi adicionado: ";
if ($mussarela != 0)
{
	$sql = "SELECT id, sabor, tamanho, preco from pizzas where `id` = '".$mussarela."'";
    $resultado = mysqli_query($link,$sql);

    $id = 0;
    foreach ($resultado as $contador) 
    {
       $id = $contador['id'];
    }

    if ($id > 0) 
    {
        $item01 = $contador['sabor']; 
        $tamanho01 = $contador['tamanho'];
        $valor01 = $contador['preco'];
        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item01. " de " .$tamanho01. "</p></div>";
    } 
    else 
    {
        echo "Nenhum resultado encontrado.";
    }
}

if ($calabresa != 0)
{
	$sql = "SELECT id, sabor, tamanho, preco from pizzas where `id` = '".$calabresa."'";
    $resultado = mysqli_query($link,$sql);
    
    $id = 0;
    foreach ($resultado as $contador) 
    {
       $id = $contador['id'];
    }

    if ($id > 0) 
    {
        $item02 = $contador['sabor']; 
        $tamanho02 = $contador['tamanho'];
        $valor02 = $contador['preco'];
        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item02. " de " .$tamanho02. "</p></div>";
    } else 
    {
        echo "Nenhum resultado encontrado.";
    }
}

if ($frgcatupy != 0)
{
	$sql = "SELECT id, sabor, tamanho, preco from pizzas where `id` = '".$frgcatupy."'";
    $resultado = mysqli_query($link,$sql);

    $id = 0;
    foreach ($resultado as $contador) 
    {
       $id = $contador['id'];
    }

    if ($id > 0) 
    {
        $item03 = $contador['sabor']; 
        $tamanho03 = $contador['tamanho'];
        $valor03 = $contador['preco'];
        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item03. " de " .$tamanho03. "</p></div>";
    } else 
    {
        echo "Nenhum resultado encontrado.";
    }
}

if ($margerita != 0)
{
	$sql = "SELECT id, sabor, tamanho, preco from pizzas where `id` = '".$margerita."'";
    $resultado = mysqli_query($link,$sql);

    $id = 0;
    foreach ($resultado as $contador) 
    {
       $id = $contador['id'];
    }

    if ($id > 0) 
    {
        $item04 = $contador['sabor']; 
        $tamanho04 = $contador['tamanho'];
        $valor04 = $contador['preco'];
        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item04. " de " .$tamanho04. "</p></div>";
    } 
    else 
    {
        echo "Nenhum resultado encontrado.";
    }
}

if ($portuguesa != 0)
{
	$sql = "SELECT id, sabor, tamanho, preco from pizzas where `id` = '".$portuguesa."'";
    $resultado = mysqli_query($link,$sql);

    $id = 0;
    foreach ($resultado as $contador) 
    {
       $id = $contador['id'];
    }

    if ($id > 0) 
    {
        $item05 = $contador['sabor']; 
        $tamanho05 = $contador['tamanho'];
        $valor05 = $contador['preco'];
        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item05. " de " .$tamanho05. "</p></div>";
    } 
    else 
    {
        echo "Nenhum resultado encontrado.";
    }
}

if ($quatro_queijos != 0)
{
	$sql = "SELECT id, sabor, tamanho, preco from pizzas where `id` = '".$quatro_queijos."'";
    $resultado = mysqli_query($link,$sql);

    $id = 0;
    foreach ($resultado as $contador) 
    {
       $id = $contador['id'];
    }

    if ($id > 0) 
    {
        $item06 = $contador['sabor']; 
        $tamanho06 = $contador['tamanho'];
        $valor06 = $contador['preco'];
        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item06. " de " .$tamanho06. "</p></div>";
    } 
    else 
    {
        echo "Nenhum resultado encontrado.";
    }
}

if ($bacon != 0)
{
	$sql = "SELECT id, sabor, tamanho, preco from pizzas where `id` = '".$bacon."'";
    $resultado = mysqli_query($link,$sql);

    $id = 0;
    foreach ($resultado as $contador) 
    {
       $id = $contador['id'];
    }

    if ($id > 0) 
    {
        $item07 = $contador['sabor']; 
        $tamanho07 = $contador['tamanho'];
        $valor07 = $contador['preco'];
        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item07. " de " .$tamanho07. "</p></div>";
    } 
    else 
    {
        echo "Nenhum resultado encontrado.";
    }
}

if ($chocomorango != 0)
{
	$sql = "SELECT id, sabor, tamanho, preco from pizzas where `id` = '".$chocomorango."'";
    $resultado = mysqli_query($link,$sql);

    $id = 0;
    foreach ($resultado as $contador) 
    {
       $id = $contador['id'];
    }

    if ($id > 0) 
    {
        $item08 = $contador['sabor']; 
        $tamanho08 = $contador['tamanho'];
        $valor08 = $contador['preco'];
        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item08. " de " .$tamanho08. "</p></div>";
    } 
    else 
    {
        echo "Nenhum resultado encontrado.";
    }
}

error_reporting(0);
$valortotal = $valor01 + $valor02 + $valor03 + $valor04 + $valor05 + $valor06 + $valor07 + $valor08;
echo "<br>";
echo "O valor total ficou no preço de: R$" .$valortotal;

?>


<form  method="POST"  action="confirmacao_endereco.php">
			<div class="dropdown">
				<label> Selecione a Forma de Pagamento </label>
				<select  name = "pagamento"   class = "dropbtn">
				<div id="myDropdown" name = pagamento  class="dropdown-content">
					<option value = debito> Débito </option>
					<option value = credito> Credito </option>
					<option value = dinheiro> Dinheiro </option>
                </select> <br>
                <input type="hidden" name="valortotal" value="<?php echo $valortotal?>">
                <button type="submit" class="btn_atualizar">Confirmar</button>

                
				</div>
			</div>
		</form>
	</div>

<script>
document.getElementById("myBtn").onclick = function() {myFunction()};
function myFunction() 
{
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>

</body>
</html>