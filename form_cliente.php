<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
    <title>Cadastro de Cliente</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>	
	<div  id = "questionario">
		<form method="POST"    action="cadastro_cliente.php">
		
			<label class = "labels"> Nome Completo </label>
			<input type="text"      class = "caixas"  name="Nome"      placeholder ="Seu nome" size="40"   required    maxlength="100"><br><br>
      
			<label class = "labels"> Senha </label>
			<input type="password"  class = "caixas"  name="Senha"     placeholder ="Senha"    size="40"   required    maxlength="20" ><br><br>
 
			<label class = "labels"> Email </label>
			<input type="email"     class = "caixas"  name="Email"     placeholder ="Email"    size="40"   maxlength="150" ><br><br>

			<label class = "labels"> Telefone (11) </label>
			<input type="tel"       class = "caixas"  name="Telefone"  placeholder ="Telefone" size="40"   required    maxlength="20" ><br><br>

			<label class = "labels"> Endereço </label>
			<input type="text"      class = "caixas"  name="Endereco"  placeholder = "Informe seu endereço com número e complemento" size="40"  required  maxlength="250" ><br><br>

        	<input  type="submit"   value = "Cadastro">
        	<input  type="reset"    value = "Limpar">
		</form>
	</div>
</body>
</html>