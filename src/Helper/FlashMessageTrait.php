<?php

namespace src\doctrine\Helper;

trait FlashMessageTrait
{
    public function definirMensagem(string $tipo, string $mensagem): void
    {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipo_mensagem'] = $tipo;
    }
}