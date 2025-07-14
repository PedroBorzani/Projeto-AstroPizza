<html>
    <head>
    <link rel="stylesheet" type="text/css" href="site.css">
    </head>
    <form method="POST" action="cad_contato.php" id="form_contato">
        
        <span>Nome: </span>
        <input type="text" require name="nome" placeholder="Preencha seu nome" size="60"><br><br>
        <span>Email: </span>
        <input type="email" require name="email" placeholder="Preencha seu Email" size="60"><br><br>
        <span>Assunto: </span>
        <input type="text" require name="assunto" placeholder="Informe o assunto" size="60"><br><br>
        <span>Conteudo:</span><br>
        <textarea name="comentarios" cols="30" rows="5" maxlength=140 placeholder="Digite no máximo 140 caracteres"></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</html>