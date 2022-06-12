<?php

namespace src\doctrine\Helper;

trait RenderizadorDeHtmlTrait
{
    public function renderizaHtml(string $caminhoTemplate): string
    {
        ob_start();
        require_once __DIR__ . './../../view' . $caminhoTemplate;
        $html = ob_get_clean();

        return $html;
    }
}