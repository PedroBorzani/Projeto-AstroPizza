<html>
    <head>
    <link rel="stylesheet" type="text/css" href="site.css">
    </head>
        
        <div class="login_geral">

            <div class="formulario_login">
                <form method="POST" action="login_acao.php" class="login">
                    <h2>Acessar minha conta</h2>
                    <h3>Preencha seus dados para fazer login</h3>
                    <h4>Qual o nome de usuário?</h4>
                    <input id="nome" type="text"  name="nome" placeholder="Informe o seu usuário" size="60">
                    <h4>Qual sua senha?</h4>
                    <input id="senha" type="password"  name="senha" placeholder="Digite a sua senha" size="60">
                    <h4>Qual seu telefone?</h4>
                    <input id="telefone" type="tel"  name="telefone" placeholder="Digite seu número" size="60"  required>

                    <button type="submit" name="submit"  value="enviar"  id="login_btn_logar">LOGAR</button>
                    <button type="reset">LIMPAR</button><br><br>       
                </form>
            </div>

        </div>

</html>