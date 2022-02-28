<?php

namespace src\doctrine\Controller;

class Login implements InterfaceProcessaRequisicao
{

    public function processaRequisicao(): void
    {
        include_once __DIR__. './../../view/login.php';
    }
}