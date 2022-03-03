<?php

use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

$entityManeger = (new EntityManegeFactory())
    ->getEntityManege();
$this->repositorioDeProdutos = $entityManeger
    ->getRepository(Produtos::class);

$produtoslist = $this->repositorioDeProdutos->findAll();

$caminho_arquivo = __DIR__. '\arquivos\\';

foreach ($produtoslist as $produto): $produto->getId(); ?>
    <div class="card">

        <img class="imagem-produto" src="<?= $caminho_arquivo.$produto->getNome()?>" alt="imagem_produto">
        <h2 class="titulo-produto"><?= $produto->getTituloProduto() ?></h2>
        <div class="preco">Preço $
            <div class="valor"> <?= $produto->getPreco() ?></div>
        </div>

        <a class="link-compra" href="/loja-compra?id=<?= $produto->getId() ?>">
            <button class="button-produto">
                Comprar
            </button>
        </a>
        <p class="codigo">Codigo: <?= $produto->getId() ?></p>
    </div>
<?php endforeach; ?>