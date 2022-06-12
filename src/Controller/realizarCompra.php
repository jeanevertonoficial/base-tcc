<?php

namespace src\doctrine\Controller;

class realizarCompra implements InterfaceProcessaRequisicao
{
    public function processaRequisicao(): void
    {
        include_once __DIR__ . './../../view/formulario-compra-produto.php';
    }
}