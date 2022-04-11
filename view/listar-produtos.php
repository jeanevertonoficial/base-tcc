<?php

use src\doctrine\infra\MysqlConnect;

$this->entityManeger = (new MysqlConnect())
    ->conect();


$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//Selecionar todos os cursos da tabela
$result_produtos = "SELECT * FROM produtos;";
$resultado = mysqli_query($this->entityManeger, $result_produtos);

//Contar o total de cursos
$total_produtos = mysqli_num_rows($resultado);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 10;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_produtos / $quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg * $pagina) - $quantidade_pg;

$valor_a_buscar = filter_input(
    INPUT_GET,
    'pesquisa',
    FILTER_SANITIZE_STRING
);

$result_produtos = "SELECT * FROM `produtos`
WHERE 'nome' LIKE '%$valor_a_buscar%'
OR 'categoria' LIKE '%$valor_a_buscar%'
OR 'subcategoria' LIKE '%$valor_a_buscar%'
OR 'marcas' LIKE '%$valor_a_buscar%'
OR 'preco' LIKE '%$valor_a_buscar%'
OR 'decricao' LIKE '%$valor_a_buscar%'
OR 'desconto' LIKE '%$valor_a_buscar%'
OR 'titulo_produto' LIKE '%$valor_a_buscar%'";;

$resultado = mysqli_query($this->entityManeger, $result_produtos);
$produtos = mysqli_num_rows($resultado);
//var_dump($produtos); exit();
/*
if ($resultado = !true) {
} else {
    echo 'Nenhum produto encontrado!';
     header("Location: /dashboard");

    //  die();
}*/


$caminho = '../img/arquivos/';


if (($produtos) and ($resultado = !true)):


    while ($rows = mysqli_fetch_object($produtos)) : $img = $caminho . $rows['nome'];
        $id = $rows['id'];

        $img = $caminho . $rows['nome'];

        ?>

        <div class="cards">
                <div class="over-desconto">
            <span class="span-desconto" style="display: block">
                <div class="div-desc"> %</div>
                <div class="div-desc"> de <br>desconto</div>
            </span>
                    <div class="imagem">
                        <img class="imagem-produto" src="<?= $img ?>" alt="<?php echo $rows['titulo_produto'] ?>">
                    </div>
                </div>

                <h2 class="titulo-produto"><?php echo $rows['titulo_produto'] ?>
                </h2>
                <div class="preco">Preço $
                    <div class="valor"><br></div>
                    <div class="valor"><?php echo $rows['preco'] ?></div>
                </div>

                <a class="link-compra" href="/realizar-compra?id=<?php echo $rows['id'] ?>">
                    <button class="button-produto">
                        Comprar
                    </button>
                </a>
                <p class="codigo">Codigo: <?php echo $rows['id'] ?></p>
        </div>

    <?php
    endwhile;
endif;


//Verificar a pagina anterior e posterior
$pagina_anterior = $pagina - 1;
$pagina_posterior = $pagina + 1;
?>

</section>
<div>
    <ul class="pagination">
        <li>
            <?php
            if ($pagina_anterior != 0) { ?>
                <a href="/dashboard"<?php echo $pagina_anterior; ?>" aria-label=" Previous">
                <span aria-hidden="true">&laquo;</span>
                </a>
            <?php } else { ?>
                <span aria-hidden="true">&laquo;</span>
            <?php } ?>
        </li>
        <?php
        //Apresentar a paginacao
        for ($i = 1; $i < $num_pagina + 1; $i++) { ?>
            <li><a href="/dashboard<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php } ?>
        <li>
            <?php
            if ($pagina_posterior <= $num_pagina) { ?>
                <a href="/dashboard<?php echo $pagina_posterior; ?>" aria-label="Previous">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            <?php } else { ?>
                <span aria-hidden="true">&raquo;</span>
            <?php } ?>
        </li>
    </ul>
</div>
</div>
