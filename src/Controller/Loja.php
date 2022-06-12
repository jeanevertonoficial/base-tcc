<?php

namespace src\doctrine\Controller;


class Loja implements InterfaceProcessaRequisicao
{

    public function processaRequisicao(): void
    {
        include_once __DIR__ . './../../view/loja.php';
    }
}