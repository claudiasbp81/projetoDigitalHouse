<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "head.html" ?>
    <title>Home</title>
</head>
<body>
    <?php require "header.php" ?>

    
    <div id="conteudo" class="container my-4">
         
         <div class="container">
             <div class="row">
                 <div class="col-4 text-left">
                     <h1 class="text-left">Produtos</h1>
                 </div>
                 <div class="col-4">
                     <form action="">
                         <label for="filtroFavorito">Ordenar por:</label>
                         <select name="filtroFavorito" id="">
                             <option value="" disabled selected>Ordenar por...</option>
                             <option value="menorValor">Menor Valor</option>
                             <option value="maiorValor">Maior Valor</option>
                             <option value="maisPopular">Mais Popular</option>
                             <option value="melhorAvaliado">Melhor Avaliado</option>
                         </select>
                     </form>
                 <div>
             </div>
         </div>

         <hr>

         <div class="row">
             <div class="col-6">
                 <form action="" method="get">
                 <p><br>Categorias</p>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="furniture" id="furniture">
                     <label class="form-check-label" for="furniture">
                         Móveis
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="decoration" id="decoration">
                     <label class="form-check-label" for="decoration">
                         Decoração
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="enviroment" id="enviroment">
                     <label class="form-check-label" for="enviroment">
                         Ambientes
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="releases" id="releases">
                     <label class="form-check-label" for="releases">
                         Novidades
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="discount" id="discount">
                     <label class="form-check-label" for="discount">
                         Promoções
                     </label>
                 </div>  

                 <p><br>Material</p>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="wood" id="wood">
                     <label class="form-check-label" for="wood">
                         Madeira de demolição
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="cartonbox" id="cartonbox">
                     <label class="form-check-label" for="cartonbox">
                         Caixotes
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="tire" id="tire">
                     <label class="form-check-label" for="tire">
                         Pneus
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="pallet" id="pallet">
                     <label class="form-check-label" for="pallet">
                         Pallets
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="metal" id="metal">
                     <label class="form-check-label" for="metal">
                         Latas/Barris
                     </label>
                 </div>        
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="other" id="other">
                     <label class="form-check-label" for="other">
                         Outros
                     </label>
                 </div>

                 <p><br>Valor</p>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="lowestprice" id="lowestprice">
                     <label class="form-check-label" for="lowestprice">
                         Até R$ 200,00
                     </label>
                 </div>        
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="lowprice" id="lowprice">
                     <label class="form-check-label" for="lowprice">
                         De R$ 200,00 até R$ 400,00
                     </label>
                 </div>        
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="midprice" id="midprice">
                     <label class="form-check-label" for="midprice">
                         De R$ 400,00 até R$ 600,00
                     </label>
                 </div>        
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="highprice" id="highprice">
                     <label class="form-check-label" for="highprice">
                         Acima de R$ 600,00
                     </label>
                 </div>

                 <p><br>Cor</p>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="natural-color" id="natural-color">
                     <label class="form-check-label" for="natural-color">
                         Natural
                     </label>
                 </div>        
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="colorful" id="colorful">
                     <label class="form-check-label" for="colorful">
                         Colorido
                     </label>
                 </div>
                 <label class="chkvermelho">
                     <input type="checkbox" name="chk-vermelhor" />
                     <span></span>
                 </label>
                 <label class="chkamarelo">
                     <input type="checkbox" name="chk-amarelo" />
                     <span></span>
                 </label>
                 <label class="chkazul">
                     <input type="checkbox" name="chk-azul" />
                     <span></span>
                 </label>
                 <label class="chkmarrom">
                     <input type="checkbox" name="chk-marrom" />
                     <span></span>
                 </label>
                 </form>
             </div>

             <div class="col-6">
                 <div class="card border-light mb-3" style="width: 15rem;">
                     <div>   
                         <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid" style="position:absolute;left:70%; top:325px;">
                         <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid" style="position:absolute;left:85%; top:325px;">
                         <img class="card-img-top img-fluid" src="Imagens\Produtos\LatasBarris\berçobarril (1).jpg" alt="Card image cap">
                     </div>
                 
                     <div class="card-body">
                     <h5 class="card-title">Nome do produto</h5>
                     <h6 class="card-text">Valor</h6>
                     <h6 class="card-text">Parcelamento</h6>
                     <a href="#" class="btn btn-success">Comprar</a>
                     </div>
                 </div>
                 <div class="card border-light mb-3" style="width: 15rem;">
                     <div>   
                         <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid" style="position:absolute;left:70%; top:325px;">
                         <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid" style="position:absolute;left:85%; top:325px;">
                         <img class="card-img-top img-fluid" src="Imagens/Produtos/Caixotes/abre-pallets-viram-moveis-768x661.jpeg" alt="Card image cap">
                     </div>
                 
                     <div class="card-body">
                     <h5 class="card-title">Nome do produto</h5>
                     <h6 class="card-text">Valor</h6>
                     <h6 class="card-text">Parcelamento</h6>
                     <a href="#" class="btn btn-success">Comprar</a>
                     </div>
                 </div>
                 <div class="card border-light mb-3" style="width: 15rem;">
                     <div>   
                         <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid" style="position:absolute;left:70%; top:325px;">
                         <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid" style="position:absolute;left:85%; top:325px;">
                         <img class="card-img-top img-fluid" src="Imagens\Produtos\Pneus\puff-de-pneu-floral-bau.jpg" alt="Card image cap">
                     </div>
                 
                     <div class="card-body">
                     <h5 class="card-title">Nome do produto</h5>
                     <h6 class="card-text">Valor</h6>
                     <h6 class="card-text">Parcelamento</h6>
                     <a href="#" class="btn btn-success">Comprar</a>
                     </div>
                 </div>
             </div>

         </div>
      
         <div class="col-6">
            <div class="card border-light mb-3" style="width: 15rem;">
                <div>   
                    <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid" style="position:absolute;left:70%; top:325px;">
                    <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid" style="position:absolute;left:85%; top:325px;">
                    <img class="card-img-top img-fluid" src="Imagens\Produtos\Outros\moveis-reciclados-confira-ideias-originais-e-criativas-14.jpg" alt="Card image cap">
                </div>
            
                <div class="card-body">
                <h5 class="card-title">Nome do produto</h5>
                <h6 class="card-text">Valor</h6>
                <h6 class="card-text">Parcelamento</h6>
                <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="card border-light mb-3" style="width: 15rem;">
                <div>   
                    <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid" style="position:absolute;left:70%; top:325px;">
                    <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid" style="position:absolute;left:85%; top:325px;">
                    <img class="card-img-top img-fluid" src="Imagens\Produtos\Caixotes\mesinha-de-canto-rústica-feita-com-caixote-de-feira.jpg" alt="Card image cap">
                </div>
            
                <div class="card-body">
                <h5 class="card-title">Nome do produto</h5>
                <h6 class="card-text">Valor</h6>
                <h6 class="card-text">Parcelamento</h6>
                <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="card border-light mb-3" style="width: 15rem;">
                <div>   
                    <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid" style="position:absolute;left:70%; top:325px;">
                    <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid" style="position:absolute;left:85%; top:325px;">
                    <img class="card-img-top img-fluid" src="Imagens\Produtos\Palets\modelo-de-sofá-de-pallets-com-futon.jpg" alt="Card image cap">
                </div>
            
                <div class="card-body">
                <h5 class="card-title">Nome do produto</h5>
                <h6 class="card-text">Valor</h6>
                <h6 class="card-text">Parcelamento</h6>
                <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>

    </div>


    <?php require "footer.php" ?>
    
</body>
</html>