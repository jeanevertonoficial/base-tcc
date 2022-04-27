<?php

namespace src\doctrine\Controller;

class cad_adm implements InterfaceProcessaRequisicao
{

    public function processaRequisicao(): void
    {
        require __DIR__ . './../view/cadastrar-adm.php';
    }
}