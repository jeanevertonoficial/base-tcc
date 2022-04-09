<?php

namespace src\doctrine\Controller;

class Sair
{
    public function __construct()
    {
        session_start();
        unset($_SESSION['id'], $_SESSION['usuario'], $_SESSION['senha']);

        $_SESSION['msg'] = "Deslogado com sucesso";
        header("Location: /logar");
    }

}