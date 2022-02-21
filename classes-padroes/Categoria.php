<?php

namespace Src\Arquitetura\Model;

abstract class Categoria
{
    private string $nome_categoria;
    private string $posicao_prod;
    private string $nivel;
    private string $cor_categoria;
    private int $estoque_produto;

    public function __construct($nome_categoria, $posicao_prod, $nivel, $cor_categoria, $estoque_produto)
    {
        $this->nome_categoria = $nome_categoria;
        $this->posicao_prod = $posicao_prod;
        $this->nivel = $nivel;
        $this->cor_categoria = $cor_categoria;
        $this->estoque_produto = $estoque_produto;
    }

    /**
     * @return int
     */
    public function recuperaEstoqueProduto(): int
    {
        return $this->estoque_produto;
    }

    /**
     * @return string
     */
    public function recuperaNomeCategoria(): string
    {
        return $this->nome_categoria;
    }

    /**
     * @return string
     */
    public function recuperaPosicaoProd(): string
    {
        return $this->posicao_prod;
    }

    /**
     * @return string
     */
    public function recuperaNivel(): string
    {
        return $this->nivel;
    }

    /**
     * @return string
     */
    public function recuperaCorCategoria(): string
    {
        return $this->cor_categoria;
    }
}