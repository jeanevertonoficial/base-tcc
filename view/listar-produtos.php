<?php
include_once __DIR__. './../Application/layouts/header';
include_once __DIR__. './../Application/layouts/menu/menu-lateral.phtml';
?>

    <?php foreach ($produtos as $produto): ?>
    <div class="card">
                  <img class="imagem-produto" src="" alt="carrinho">
             <h2 class="titulo-produto"><?= $produto->getTituloProduto()?></h2>
              <div class="preco">Preço $
             <div class="valor"><?= $produto->getPreco()?></div>
             </div>
             <a class="link-compra" href="/loja-compra">
             <button class="button-produto">
                Comprar
             </button>
             </a>
            </div>';
    <?php endforeach; ?>

<?php include_once __DIR__. './../Application/layouts/footer/FooterBase.phtml'?>
