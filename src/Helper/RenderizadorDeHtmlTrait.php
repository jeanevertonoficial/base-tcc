<?php

namespace src\doctrine\Helper;

trait RenderizadorDeHtmlTrait
{
    public function renderizaHtml(string $caminhoTemplate, array $dados): string
    {
        extract($dados);
        ob_start();
        require __DIR__ . '/../../Application/' . $caminhoTemplate;
        $html = ob_get_clean();

        return $html;
    }
}