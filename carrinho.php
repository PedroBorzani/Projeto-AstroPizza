<!DOCTYPE html>
<html lang="pt-BR">
<head>
      <meta charset="utf-8">
	<title> Carrinho </title>
      <link rel="stylesheet" type="text/css" href="site.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="carrinho_geral">
        <a href=cardapio.php>Voltar para o cardapio</a>
        <h1 class = "titulo"> Pizzas Escolhidas</h1>

        <?php

            if(isset($_POST['submit']))
            {

                session_start();
                include_once("connect.php");

                $mussarela = $_POST['mussarela'];
                $calabresa = $_POST['calabresa'];
                $frgcatupy = $_POST['frgcatupy'];
                $margerita = $_POST['margerita'];
                $portuguesa = $_POST['portuguesa'];
                $quatro_queijos = $_POST['quatro_queijos'];
                $bacon = $_POST['bacon'];
                $chocomorango = $_POST['chocomorango'];
                $cupom = $_POST['cupom'];

                $valor01 = 0;
                $valor02 = 0;
                $valor03 = 0;
                $valor04 = 0;
                $valor05 = 0;
                $valor06 = 0;
                $valor07 = 0;
                $valor08 = 0;
                $frete = 10;

                echo "<br><br>";
                echo "<p>No seu carrinho foi adicionado: </p>";
                if ($mussarela != 0)
                {
                    $sql = "SELECT id, sabor, Tamanho, valor from pizzas where `id` = '".$mussarela."'";
                    $resultado = mysqli_query($conexao,$sql);

                    $id = 0;
                    foreach ($resultado as $contador) 
                    {
                    $id = $contador['id'];
                    }

                    if ($id > 0) 
                    {
                        $item01 = $contador['sabor']; 
                        $tamanho01 = $contador['Tamanho'];
                        $valor01 = $contador['valor'];
                        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item01. " " .$tamanho01. "</p></div>";
                    } 
                    else 
                    {
                        echo "Nenhum resultado encontrado.";
                    }
                }

                if ($calabresa != 0)
                {
                    $sql = "SELECT id, sabor, Tamanho, valor from pizzas where `id` = '".$calabresa."'";
                    $resultado = mysqli_query($conexao,$sql);
                
                    $id = 0;
                    $contador['sabor'] = "";
                    $contador['Tamanho'] = "";
                    $contador['valor'] = 0;
                    foreach ($resultado as $contador) 
                    {
                    $id = $contador['id'];
                    }

                    if ($id > 0) 
                    {
                        $item02 = $contador['sabor']; 
                        $tamanho02 = $contador['Tamanho'];
                        $valor02 = $contador['valor'];
                        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item02. " " .$tamanho02. "</p></div>";
                    } 
                    else 
                    {
                        echo "Nenhum resultado encontrado.";
                    }
                }   

                if ($frgcatupy != 0)
                {
                    $sql = "SELECT id, sabor, Tamanho, valor from pizzas where `id` = '".$frgcatupy."'";
                    $resultado = mysqli_query($conexao,$sql);

                    $id = 0;
                    $contador['sabor'] = "";
                    $contador['Tamanho'] = "";
                    $contador['valor'] = 0;
                    foreach ($resultado as $contador) 
                    {
                    $id = $contador['id'];
                    }

                    if ($id > 0) 
                    {
                        $item03 = $contador['sabor']; 
                        $tamanho03 = $contador['Tamanho'];
                        $valor03 = $contador['valor'];
                    echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item03. " " .$tamanho03. "</p></div>";
                    
                    } 
                    else 
                    {
                    echo "Nenhum resultado encontrado.";
                    }
                }

                if ($margerita != 0)
                {
                    $sql = "SELECT id, sabor, Tamanho, valor from pizzas where `id` = '".$margerita."'";
                    $resultado = mysqli_query($conexao,$sql);

                    $id = 0;
                    $contador['sabor'] = "";
                    $contador['Tamanho'] = "";
                    $contador['valor'] = 0;
                    foreach ($resultado as $contador) 
                    {
                    $id = $contador['id'];
                    }

                    if ($id > 0) 
                    {
                        $item04 = $contador['sabor']; 
                        $tamanho04 = $contador['Tamanho'];
                        $valor04 = $contador['valor'];
                        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item04. " " .$tamanho04. "</p></div>";
                    } 
                    else 
                    {
                        echo "Nenhum resultado encontrado.";
                    }
                }

                if ($portuguesa != 0)
                {
                    $sql = "SELECT id, sabor, Tamanho, valor from pizzas where `id` = '".$portuguesa."'";
                    $resultado = mysqli_query($conexao,$sql);

                    $id = 0;
                    $contador['sabor'] = "";
                    $contador['Tamanho'] = "";
                    $contador['valor'] = 0;
                    foreach ($resultado as $contador) 
                    {
                    $id = $contador['id'];
                    }

                    if ($id > 0) 
                    {
                        $item05 = $contador['sabor']; 
                        $tamanho05 = $contador['Tamanho'];
                        $valor05 = $contador['valor'];
                        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item05. " " .$tamanho05. "</p></div>";
                    } 
                    else 
                    {
                        echo "Nenhum resultado encontrado.";
                    }
                }


                if ($quatro_queijos != 0)
                {
                    $sql = "SELECT id, sabor, Tamanho, valor from pizzas where `id` = '".$quatro_queijos."'";
                    $resultado = mysqli_query($conexao,$sql);

                    $id = 0;
                    $contador['sabor'] = "";
                    $contador['Tamanho'] = "";
                    $contador['valor'] = 0;
                    foreach ($resultado as $contador) 
                    {
                    $id = $contador['id'];
                    }

                    if ($id > 0) 
                    {
                        $item06 = $contador['sabor']; 
                        $tamanho06 = $contador['Tamanho'];
                        $valor06 = $contador['valor'];
                        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item06. " " .$tamanho06. "</p></div>";
                    } 
                    else 
                    {
                        echo "Nenhum resultado encontrado.";
                    }
                }

                if ($bacon != 0)
                {
                    $sql = "SELECT id, sabor, Tamanho, valor from pizzas where `id` = '".$bacon."'";
                    $resultado = mysqli_query($conexao,$sql);

                    $id = 0;
                    $contador['sabor'] = "";
                    $contador['Tamanho'] = "";
                    $contador['valor'] = 0;
                    foreach ($resultado as $contador) 
                    {
                    $id = $contador['id'];
                    }

                    if ($id > 0) 
                    {
                        $item07 = $contador['sabor']; 
                        $tamanho07 = $contador['Tamanho'];
                        $valor07 = $contador['valor'];
                        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item07. " " .$tamanho07. "</p></div>";
                    } 
                    else 
                    {
                        echo "Nenhum resultado encontrado.";
                    }
                }

                if ($chocomorango != 0)
                {
                    $sql = "SELECT id, sabor, Tamanho, valor from pizzas where `id` = '".$chocomorango."'";
                    $resultado = mysqli_query($conexao,$sql);

                    $id = 0;
                    $contador['sabor'] = "";
                    $contador['Tamanho'] = "";
                    $contador['valor'] = 0;
                    foreach ($resultado as $contador) 
                    {
                    $id = $contador['id'];
                    }

                    if ($id > 0) 
                    {
                        $item08 = $contador['sabor']; 
                        $tamanho08 = $contador['Tamanho'];
                        $valor08 = $contador['valor'];
                        echo "<div  style='text-align:left;font-size:18px;padding:5px;font-family:calibri,sans-serif;'> <p> Uma Pizza de " .$item08. " " .$tamanho08. "</p></div>";
                    } 
                    else 
                    {
                        echo "Nenhum resultado encontrado.";
                    }
                }


                error_reporting(0);
                $pedido = $item01. " " .$tamanho01. "    " .$item02. " " .$tamanho02. "    " .$item03. " " .$tamanho03. "    " .$item04. " " .$tamanho04. "     "
                .$item05. " " .$tamanho05. "     " .$item06. " " .$tamanho06. "     " .$item07. " " .$tamanho07. "     " .$item08. " " .$tamanho08. "     ";
                $valortotal = $valor01 + $valor02 + $valor03 + $valor04 + $valor05 + $valor06 + $valor07 + $valor08 + $frete;

                if ($cupom != "")
                {
                    $sql = "SELECT valor, tipo from cupons where `codigo` = '".$cupom."'";
                    $result = mysqli_query($conexao,$sql);
                    


                    foreach ($result as $contador) 
                    {
                    $desconto = $contador['valor'];
                    $tipo = $contador['tipo'];
                    }


                    if($tipo == 'porcentagem')
                    {
                        $valordescontar = ($desconto / 100) * $valortotal;
                    }
                    else if($tipo == "fixo")
                    {
                        $valordescontar = $desconto;

                        if($valordescontar > $valortotal)
                        {
                            $valordescontar = $valortotal;
                        }
                    }
                    else if($tipo == "Compra Minima")
                    {
                        $valordescontar = $desconto;
                        $desconto = $desconto * 10;
                        
                        if($desconto > $valortotal)
                        {
                            $valordescontar = 0;
                            echo('<script> alert("Cupom não atinge requisitos!!!");</script>');
                        }
                    }
                    else if($tipo == "frete gratis")
                    {
                        $valordescontar = 10;
                    }
                    else if($tipo == "primeira compra")
                    {
                        $valordescontar = $valortotal / $desconto;
                    }
                    else
                    {
                        echo('<script> alert("Cupom foi digitado errado ou não existente!!!");</script>');
                    }
                }


                echo "<br><br>";
                echo "<p>Valor do frete é de: R$" .$frete."</p>";
                echo "<br><br>";
                echo "<p>O valor sem frete: R$" .($valortotal - 10)."</p>";
                echo "<br><br>";
                echo "<p>O valor com frete: R$" .$valortotal."</p>";
                echo "<br><br>";
                if($cupom != "")
                {
                    $valortotal = $valortotal - $valordescontar;
                    echo "Valor com cupom: R$" .$valortotal;
                    echo "<br><br>";        
                }


                ?>


                <form  method="POST"  action="confirmacao_endereco.php" class="carrinho_formulario">
                    <div class="dropdown">
                        <label> Selecione a Forma de Pagamento </label>
                        <select  name="pagamento"  class="dropbtn">
                            <div id="myDropdown" name="pagamento"  class="dropdown-content">
                                <option value="debito"> Débito </option>
                                <option value="credito"> Credito </option>
                                <option value="dinheiro"> Dinheiro </option>    
                        </select>
                            </div>
                    </div>
                    <div>
                        <br><br>
                        <label> Qual vai ser a forma de entrega? </label> 
                        <br>
                        <input type="radio"  name="entrega"  value="entrega"  checked>
                        <label><b> Entrega </b></label> <br>
                        <input type="radio"  name="entrega"  value="retirar">
                        <label><b> Retirar </b></label> <br><br>
                    </div>
                    <input type="hidden" name="valortotal" value="<?php echo $valortotal ?>">
                    <input type="hidden" name="pedido" value="<?php echo $pedido ?>">
                    <input type="submit"  name="submit"  id="submit" value="Confirmar">        
                </form>

            <?php

            }
            else
            {
                echo('<script> alert("Não foi possível concluir ação!!");</script>');
                echo('<script> window.location.replace("index.php") </script>');
            }
        ?>  
        
<script>
document.getElementById("myBtn").onclick = function() {myFunction()};
function myFunction() 
{
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>

</body>
</html>