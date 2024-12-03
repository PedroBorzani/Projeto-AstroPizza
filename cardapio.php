<!DOCTYPE html>
<html lang = "pt-BR">
<head>
    <meta charset = "utf-8">
    <title> Cardápio </title>
    <link rel = "stylesheet"  type = "text/css"  href = "estilo.css">
</head> 

<body>
<form action = "carrinho.php"  method = "POST">
<div class = "pizza_opcoes">
<select  id = "mussarela"   name = "mussarela" class = "btn_pizza"> 
	<div  class = "pizzaopcoes_conteudo">
	<option  value = 0> Adicionar </option>
	<option  id = "4pedacos"  value = 1> Brotinho </option>
	<option  id = "8pedacos"  value = 2> 8 pedaços </option>
	</div>
</select>


<select  id = "calabresa"   name = "calabresa" class = "btn_pizza"> 
	<div  class = "pizzaopcoes_conteudo">
	<option  value = 0> Adicionar </option>
	<option  id = "4pedacos"  value = 3> Brotinho </option>
	<option  id = "8pedacos"  value = 4> 8 pedaços </option>
	</div>
</select>


<select  id = "frgcatupy"   name = "frgcatupy" class = "btn_pizza"> 
	<div  class = "pizzaopcoes_conteudo">
	<option  value = 0> Adicionar </option>
	<option  id = "4pedacos"  value = 5> Brotinho </option>
	<option  id = "8pedacos"  value = 6> 8 pedaços </option>
	</div>
</select>


<select  id = "margerita"   name = "margerita" class = "btn_pizza"> 
	<div  class = "pizzaopcoes_conteudo">
	<option  value = 0> Adicionar </option>
	<option  id = "4pedacos"  value = 7> Brotinho </option>
	<option  id = "8pedacos"  value = 8> 8 pedaços </option>
	</div>
</select>


<select  id = "portuguesa"   name = "portuguesa" class = "btn_pizza"> 
	<div  class = "pizzaopcoes_conteudo">
	<option  value = 0> Adicionar </option>
	<option  id = "4pedacos"  value = 9> Brotinho </option>
	<option  id = "8pedacos"  value = 10> 8 pedaços </option>
	</div>
</select>


<select  id = "quatro_queijos"   name = "quatro_queijos" class = "btn_pizza"> 
	<div  class = "pizzaopcoes_conteudo">
	<option  value = 0> Adicionar </option>
	<option  id = "4pedacos"  value = 11> Brotinho </option>
	<option  id = "8pedacos"  value = 12> 8 pedaços </option>
	</div>
</select>


<select  id = "bacon"   name = "bacon" class = "btn_pizza"> 
	<div  class = "pizzaopcoes_conteudo">
	<option  value = 0> Adicionar </option>
	<option  id = "4pedacos"  value = 13> Brotinho </option>
	<option  id = "8pedacos"  value = 14> 8 pedaços </option>
	</div>
</select>


<select  id = "chocomorango"   name = "chocomorango" class = "btn_pizza"> 
	<div  class = "pizzaopcoes_conteudo">
	<option  value = 0> Adicionar </option>
	<option  id = "4pedacos"  value = 15> Brotinho </option>
	<option  id = "8pedacos"  value = 16> 8 pedaços </option>
	</div>
</select>

<input  type = "submit"  value = "Concluir Pedido">

<script>
document.getElementById("myBtn").onclick = function() {myFunction()};

function myFunction() 
{
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>
</form>
</body>
</html>