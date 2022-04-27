<?php

namespace src\doctrine\Controller\resource;

use src\doctrine\Controller\InterfaceProcessaRequisicao;
use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

class Remove_Produto implements InterfaceProcessaRequisicao
{
    public function __construct()
    {
        $entityManeger = new EntityManegeFactory();
        $this->entityManege = $entityManeger
            ->getEntityManege()
        ->getRepository(Produtos::class);


        $id = $this->entityManege->getId();

        $produto = $this->entityManege->getReference(Produtos::class, $id);

        $this->entityManege->remove($produto);
    }


    public function processaRequisicao(): void
    {
        $this->entityManege->flush();
        // TODO: Implement processaRequisicao() method.
    }
}