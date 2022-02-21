<?php

namespace Src\Arquitetura\Model;

class Vestuario extends Categoria
{
    private string $genero;
    private string $nome_produto;
    private float $preco_produto;

    public function __construct($nome_categoria, $posicao_prod, $nivel, $cor_categoria, $estoque_produto, $genero, $nome_produto, $preco_produto)
    {
        parent::__construct($nome_categoria, $posicao_prod, $nivel, $cor_categoria, $estoque_produto);
        $this->genero = $genero;
        $this->nome_produto = $nome_produto;
        $this->preco_produto = $preco_produto;
    }
}