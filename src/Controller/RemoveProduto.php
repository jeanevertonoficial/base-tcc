<?php

namespace src\doctrine\Controller;

class RemoveProduto implements InterfaceProcessaRequisicao
{
    public function processaRequisicao(): void
    {
        require_once __DIR__. './../../view/remover-produto.php';
    }
}