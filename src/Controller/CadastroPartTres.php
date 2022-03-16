<?php

namespace src\doctrine\Controller;

class CadastroPartTres implements InterfaceProcessaRequisicao
{
    public function processaRequisicao(): void
    {
        // TODO: Implement processaRequisicao() method.
        require_once __DIR__.'./../../view/cadastrar-terceira.php';
    }

}