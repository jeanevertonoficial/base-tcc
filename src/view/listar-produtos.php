<?php

use src\doctrine\Controller\Tools;
use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;
use src\doctrine\infra\MysqlConnect;
use src\doctrine\Repository\ProdutosRepository;

;
$this->caminho = (new Tools())->rotaImagemArquivo();
$this->entityManeger = (new EntityManegeFactory())->getEntityManege();
$mysql = (new MysqlConnect())->conect();
$this->repositorioDeProdutos = $this->entityManeger->getRepository(Produtos::class);


// filter para limpar e apontar para a variavel sem lixo
$nomeBusca = filter_input(
    INPUT_GET,
    'busca',
    FILTER_SANITIZE_STRING
);

$dqlpadrao = "SELECT * FROM produtos";

$dql = "SELECT * FROM produtos 
         where `nome` LIKE '%$nomeBusca%' 
            or `descricao` LIKE '%$nomeBusca%'
            or `titulo_produto` LIKE '%$nomeBusca%'";


//var_dump($produtoslist); exit();

if ($nomeBusca == 'undefined' || $nomeBusca == '') {
    $produto = mysqli_query($mysql, $dqlpadrao);
} else {
    // header('Location: /dashbord');
    $produto = mysqli_query($mysql, $dql);
}
if (($produto) and ($produto->num_rows != 0)):

    while ($rows = mysqli_fetch_object($produto)) : $img = $this->caminho . $rows->nome;

    if ($rows->desconto >= 5) {
        $mostrar_desconto = $rows->desconto;
        $mostrar = "block";
    } else {
        $mostrar_desconto = '';
        $mostrar = 'none';
    }

    ?>

    <div class="cards">
        <div class="over-desconto">
            <span class="span-desconto" style="display: <?= $mostrar ?>">
                <div class="div-desc"> <?= $mostrar_desconto ?>%</div>
                <div class="div-desc"> de <br>desconto</div>
            </span>
            <div class="imagem zoom">
                <img class="imagem-produto" src="<?= $img ?>" alt="foto">
            </div>
        </div>

        <h2 class="titulo-produto"><?= $rows->titulo_produto ?>
        </h2>
        <div class="preco">Preço $
            <div class="valor"><br></div>
            <div class="valor"><?= $rows->preco ?></div>
        </div>

        <a class="link-compra" href="/loja-compra?id=<?= $rows->id ?>">
            <button class="button-produto">
                Comprar
            </button>
        </a>
        <p class="codigo">Codigo: <?= $rows->id ?></p>
    </div>

<?php endwhile; ?>
<?php endif; ?>