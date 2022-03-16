<?php

namespace src\doctrine\Controller;

class CadastroPartQuatro implements InterfaceProcessaRequisicao
{
    public function processaRequisicao(): void
    {
        // TODO: Implement processaRequisicao() method.
        require_once __DIR__.'./../../view/cadastrar-teceira.php';
    }

}