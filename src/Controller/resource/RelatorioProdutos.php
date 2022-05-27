<?php

namespace src\doctrine\Controller\resource;

use src\doctrine\Controller\InterfaceProcessaRequisicao;

class RelatorioProdutos implements InterfaceProcessaRequisicao
{

    public function processaRequisicao(): void
    {
        require_once __DIR__ . './../../../application/custom/components/relatorio-produtos.phtml';
    }
}