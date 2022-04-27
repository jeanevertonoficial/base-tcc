<?php

namespace src\doctrine\Controller;


class NewslettersList
{

    public function processaRequisicao(): void
    {

        $titulo = "Lista de Newsletters";
        require_once __DIR__ . './../../Application/custom/components/lista-newsletters.phtml';
    }
}