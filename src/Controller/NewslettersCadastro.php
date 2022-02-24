<?php

namespace src\doctrine\Controller;

use src\doctrine\Entity\Newsletters;
use src\doctrine\Helper\RenderizadorDeHtmlTrait;
use src\doctrine\infra\EntityManegeFactory;

class NewslettersCadastro implements InterfaceProcessaRequisicao
{
    use RenderizadorDeHtmlTrait;

    public function __construct()
    {
        $this->entityManeger = (new EntityManegeFactory())
            ->getEntityManege();
    }

    public function processaRequisicao(): void
    {
        $newsletters = new Newsletters();
        $newsletters->setEmail($_POST['newsletters']);
        $this->entityManeger->persist($newsletters);
        $this->entityManeger->flush();

        $news = $this->renderizaHtml('/loja.php');
    }
}