<?php

namespace src\doctrine\Controller;

class cad_prod implements InterfaceProcessaRequisicao
{
    // função que monta o cadastro
    public function processaRequisicao(): void
    {
        require_once __DIR__ . './../../view/cadastrar-produto.php';
    }
}