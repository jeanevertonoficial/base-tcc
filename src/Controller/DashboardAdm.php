<?php

namespace src\doctrine\Controller;

use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

class DashboardAdm implements InterfaceProcessaRequisicao
{

    public function __construct()
    {
        $entityManegerFactory = new EntityManegeFactory();
        $entityManeger = $entityManegerFactory->getEntityManege();

        // Buscando o repositorio de alunos pelo Entity
        $produtosRepository = $entityManeger->getRepository(Produtos::class);


        /** @var Produtos[] $alunos */
        $produtos = $produtosRepository->findAll();

    }

    public function processaRequisicao(): void
    {

        $titulo = "Lista de produtos";
        require_once __DIR__ . './../../Application/custom/components/lista-produto-adm.phtml';
    }
}