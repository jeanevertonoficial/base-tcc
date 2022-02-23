<?php

namespace src\doctrine\Controller;

use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

class ListarProdutos implements InterfaceProcessaRequisicao
{
    public function __construct()
    {
        $entityManeger = (new EntityManegeFactory())
            ->getEntityManege();
        $this->repositorioDeProdutos = $entityManeger
            ->getRepository(Produtos::class);

    }

    public function processaRequisicao(): void
    {
        $produtos = $this->repositorioDeProdutos->findAll();
        require_once __DIR__. './../../view/listar-produtos.php';
    }


}