<?php

namespace src\doctrine\Controller\cadastrar;


use src\doctrine\Controller\InterfaceProcessaRequisicao;
use src\doctrine\Entity\Newsletters;
use src\doctrine\infra\EntityManegeFactory;

class NewslettersCadastro implements InterfaceProcessaRequisicao
{

    public function __construct()
    {
        // Entity gerenciador de entidades
        $this->entityManeger = (
        new EntityManegeFactory())
            ->getEntityManege();

        $news = filter_input(
                INPUT_POST,
                'newsletter',
                FILTER_SANITIZE_EMAIL
        );

        $newsletters = new Newsletters();
        $newsletters->setEmail($news);

        $this->entityManeger->persist($newsletters);
        $this->entityManeger->flush();

    }

    public function processaRequisicao(): void
    {
        header('Location: /dashboard');
    }
}
