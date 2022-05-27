<?php

namespace src\doctrine\Controller;

class PerfilAdm implements InterfaceProcessaRequisicao
{
    public function processaRequisicao(): void
    {
        require_once __DIR__ . "./../../view/perfil-adm.php";
    }
}