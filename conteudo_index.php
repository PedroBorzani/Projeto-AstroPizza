<?php
session_start(); // Inicia a sessão
?>
<!-- inicio Login/Registro -->
<div id="criar_conta_ou_logar" class="<?php echo isset($_SESSION['Id']) ? 'hidden' : ''; ?>">
    <div class="criar_conta">
        <p>Para ofertas exclusivas</p>
        <a href="cadastro.php"><button>Criar conta</button></a>
    </div>
    <div class="entrar_na_conta">
        <p>Já tem uma conta?</p>
        <a href="login.php"><button>Entrar</button></a>
    </div>
</div>
<!-- Fim Login/Registro -->

<!-- /////////////////////////////////////////////////// -->

<!-- Inicio Banner grande no começo -->
<div class="banner_1">
    <a href="conteudo_cupons.php"><img src="imagens/Cupom_Astro20.png"></a>
</div>
<!-- Fim Banner grande no começo -->

<!-- /////////////////////////////////////////////////// -->

<!-- Inicio promoções -->
<div class="title_index_promocoes">
    <h2>Cupons</h2>
    <a href="conteudo_cupons.php">Ver todas</a>
</div>

<div class="promocoes">
    
    <div class="banners">
        <div class="bn_1">
            <a href="conteudo_cupons.php"><img src="imagens/Cupom_Querodesconto10.jpg" alt=""></a>
        </div>

        <div class="bn_1">
            <a href="conteudo_cupons.php"><img src="imagens/Cupom_Pizza50 1.jpg" alt=""></a>
        </div>

        <div class="bn_1">
            <a href="conteudo_cupons.php"><img src="imagens/Cupom_Querodesconto20.jpg" alt=""></a>
        </div>
    </div>
</div>
<!-- Fim promoções -->

<!-- /////////////////////////////////////////////////// -->

<!-- Inicio Cardápio -->
<div class="title_index_pizzas"><h2>Pizzas</h2></div>


    <div class="index_pizzas">
        
            <div class="index_p1">
                <div id="conteudo_principal">            
                    <div class="postagens">
                        <img src="imagens/mussarela.webp" class="imagem">
                    <h2 class="titulos">MUSSARELA</h2>                              
                    </div> 
                </div> 
            </div>

        <div class="index_p1">
            <div id="conteudo_principal">            
                <div class="postagens">
                <img src="imagens/portuguesa.jpeg" class="imagem">
                <h2 class="titulos">PORTUGUESA</h2>                
                </div> 
            </div>
        </div>
            
        <div class="index_p1">
            <div id="conteudo_principal">            
                <div class="postagens">
                <img src="imagens/calabresa.jpg" class="imagem">
                <h2 class="titulos">CALABRESA</h2>                
                </div> 
            </div>
        </div>
    </div>

<!-- Fim Cardápio -->

<!-- /////////////////////////////////////////////////// -->

<!-- Inicio Link para a página cardápio -->
<div class="index_to_cardapio">
        <a href="cardapio.php">Ver cardápio completo</a>
</div>
<!-- Fim Link para a página cardápio -->

<!-- /////////////////////////////////////////////////// -->
