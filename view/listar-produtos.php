<?php

use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

$entityManeger = (new EntityManegeFactory())
    ->getEntityManege();
$this->repositorioDeProdutos = $entityManeger
    ->getRepository(Produtos::class);


$caminho_arquivo = 'C:/Users/jean/Documents/TudoSobrePHP/loja-ecommerce-digital/src/arquivos/';


// filter para limpar e apontar para a variavel sem lixo
$nome = filter_input(
        INPUT_GET,
        'pesquisa',
        FILTER_SANITIZE_STRING
);

if ($nome == 'undefined' || $nome == '') {
    $produtoslist = $this->repositorioDeProdutos->findAll();
} else {
    $produtoslist = $this->repositorioDeProdutos->findBy([
        'nome' => $nome
    ]);

}


foreach ($produtoslist as $produto):

    if ($produto->getDesconto() >= 5){
        $mostrar_desconto = $produto->getDesconto();
        $mostrar = "block";
    } else {
        $mostrar_desconto = '';
        $mostrar = 'none';
    }

    ?>

    <div class="card">
        <div class="over-desconto">
            <span class="span-desconto" style="display: <?= $mostrar ?>">
                <div class="div-desc"> <?= $mostrar_desconto ?>%</div>
                <div class="div-desc"> de <br>desconto</div>
            </span>
        <img class="imagem-produto" src="<?= $caminho_arquivo . $produto->getNome() ?>" alt="foto">
        </div>
        <h2 class="titulo-produto"><?= $produto->getTituloProduto() ?>
        </h2>
        <span class="span-descricao"><b class="descricao"> Descrição do produto,</b> <?= $produto->getDescricao()?></span>
        <div class="preco">Preço $
            <div class="valor"><?= $produto->getPreco() ?></div>
        </div>

        <a class="link-compra" href="/loja-compra?id=<?= $produto->getId() ?>">
            <button class="button-produto">
                Comprar
            </button>
        </a>
        <p class="codigo">Codigo: <?= $produto->getId() ?></p>
    </div>

<?php endforeach; ?>
