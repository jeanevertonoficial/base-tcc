<?php

namespace src\doctrine\Controller;

use src\doctrine\Entity\Produtos;
use src\doctrine\Helper\RenderizadorDeHtmlTrait;
use src\doctrine\infra\EntityManegeFactory;

class ListarProdutos implements InterfaceProcessaRequisicao
{
    use RenderizadorDeHtmlTrait;
    public function __construct()
    {

        $entityManeger = (new EntityManegeFactory())
            ->getEntityManege();
        $this->repositorioDeProdutos = $entityManeger
            ->getRepository(Produtos::class);


    }

    public function processaRequisicao(): void
    {
        $produtoslist = $this->repositorioDeProdutos->findAll();
        $this->renderizaHtml('/listar-produtos.php');
    }
}