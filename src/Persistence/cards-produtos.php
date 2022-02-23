<?php

require_once __DIR__ . './../../vendor/autoload.php';

use src\doctrine\Entity\Produtos;
use src\doctrine\Helper\EntityManegeFactory;

$entitymanegerFactory = new EntityManegeFactory();
$entityManeger = $entitymanegerFactory->getEntityManege();

$produtosRepository = $entityManeger->getRepository(Produtos::class);

$produtos = $produtosRepository->findAll();

foreach ($produtos as $produto):
    echo ' <div class="card">
                  <img class="imagem-produto" src="" alt="carrinho">
             <h2 class="titulo-produto">Titulo</h2>
              <div class="preco">Preço $
             <div class="valor">$produto</div>
             </div>
             <a class="link-compra" href="/loja-compra.php?id=$id">
             <button class="button-produto">
                Comprar
             </button>
             </a>
            </div>';
endforeach;



