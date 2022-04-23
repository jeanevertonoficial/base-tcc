<?php

namespace src\doctrine\Controller;

class RelatorioProdutos implements InterfaceProcessaRequisicao
{

    public function processaRequisicao(): void
    {
        require_once __DIR__. './../../Application/layouts/components/relatorio-produtos.phtml';
    }
}