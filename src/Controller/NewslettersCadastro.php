<?php

namespace src\doctrine\Controller;


use src\doctrine\Entity\Newsletters;
use src\doctrine\infra\EntityManegeFactory;

class NewslettersCadastro implements InterfaceProcessaRequisicao
{
    public function __construct()
    {


        $this->entityManeger = (
        new EntityManegeFactory()
        )->getEntityManege();

        include_once __DIR__ . './../../view/loja.php';

    //    $news = filter_input(INPUT_POST, 'newsletters', FILTER_VALIDATE_EMAIL);
        $news = $_POST['newsletters'];
        $newsletters = new Newsletters();

        $newsletters
            ->setEmail($news);

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

    }
}