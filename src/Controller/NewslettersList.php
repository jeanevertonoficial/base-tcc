<?php

namespace src\doctrine\Controller;


class NewslettersList
{

    public function processaRequisicao(): void
    {

        $titulo = "Lista de Newsletters";
        require_once __DIR__ . './../../application/custom/components/lista-newsletters.phtml';
    }
}