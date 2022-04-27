<?php

namespace src\doctrine\Controller;

class cad_newsletters implements InterfaceProcessaRequisicao
{
    public function processaRequisicao(): void
    {
        require_once __DIR__ . './../view/loja.php';
    }
}