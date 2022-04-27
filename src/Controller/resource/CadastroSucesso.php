<?php

namespace src\doctrine\Controller\resource;

use src\doctrine\Controller\InterfaceProcessaRequisicao;

class CadastroSucesso implements InterfaceProcessaRequisicao
{
    public function processaRequisicao(): void
    {
        // TODO: Implement processaRequisicao() method.
        require_once __DIR__ . './../../view/remover-produto.php';
    }

}