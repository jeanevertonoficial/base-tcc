<?php

namespace src\doctrine\Controller;

class CadastrarBanner implements InterfaceProcessaRequisicao
{
    public function processaRequisicao(): void
    {
        require_once __DIR__ . './../view/cadastrar-banner.php';
    }
}