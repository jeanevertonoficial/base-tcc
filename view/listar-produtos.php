<?php

use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

$entityManeger = (new EntityManegeFactory())
    ->getEntityManege();
$this->repositorioDeProdutos = $entityManeger
    ->getRepository(Produtos::class);

$produtoslist = $this->repositorioDeProdutos->findAll();

$img = './src/arquivos/';

foreach ($produtoslist as $produto): $produto->getId() ?>
        <div class="card">

             <img class="imagem-produto" src="" alt="carrinho">
             <h2 class="titulo-produto"><?= $produto->getTituloProduto()?></h2>
              <div class="preco">Preço $
             <div class="valor"> <?= $produto->getPreco()?></div>
             </div>
             <a class="link-compra" href="/loja-compra">
             <button class="button-produto">
                Comprar
             </button>
             </a>
            <p class="codigo">Codigo: <?= $produto->getId()?></p>
            </div>
 <?php endforeach; ?>