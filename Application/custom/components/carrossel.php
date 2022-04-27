<?php

use src\doctrine\Entity\ProdutoBanner;
use src\doctrine\infra\EntityManegeFactory;

$entityManeger = (new EntityManegeFactory())
    ->getEntityManege();
$this->repositorioDeProdutos = $entityManeger
    ->getRepository(ProdutoBanner::class);

$produtoslist = $this->repositorioDeProdutos->findAll();

$caminho = '../img/banner/';

$banner = ProdutoBanner::class;

// buscar total de banner cadastrado
$dql = "SELECT COUNT(a) FROM $banner a";
$dql = $entityManeger->createQuery($dql);
$totalDeBanner = $dql->getSingleScalarResult();
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php
        $qnt_slide = $totalDeBanner;
            $active = "";
        $cont_marc = 0;
        while ($cont_marc < $qnt_slide) {
            if ($cont_marc != 0) {
                $active = "active";
            }
            echo '<button 
                    type="button" 
                    data-bs-target="#carouselExampleIndicators"  class="active"
                    data-bs-slide-to="$qnt_slide" 
                    aria-current="true">
                </button>';

            $cont_marc++;
        }
        ?>
    </div>
    <div class="carousel-inner">
        <?php
        $cont_slide = 0;
        foreach ($produtoslist as $produto): $img = $caminho . $produto->getNome();

            $active = "";

            if ($cont_slide == 0) {
                $active = "active";
            }
            ?>
            <div class="carousel-item <?= $active ?>">
                <a href="<?= $produto->getLinksBanner() ?>">
                    <img src="<?= $img ?>" class="d-block w-100" alt="<?= $produto->getNome() ?>">
                </a>
            </div>
            <?php
            $cont_slide++;
        endforeach;
        ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">
            </span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
