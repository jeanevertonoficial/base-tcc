<?php

namespace src\doctrine\Controller;


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
        include_once '../../view/newsletters.php';

        $news = $_POST['newsletters'];

        $newsletters = new Newsletters();
        $newsletters->setEmail($news);

        $this
            ->entityManeger
            ->persist($newsletters);

    }

    public function processaRequisicao(): void
    {
        $this
            ->entityManeger
            ->flush();
        ?>
        <script> alert('Email cadastrado com sucesso!.')</script>
        <?php
        header('Location: /dashboard');


    }
}
