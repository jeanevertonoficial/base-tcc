<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 */
class Produtos
{
    /**
     * @Id
     * @GeneratedValue
     * @column(type="integer")
     */
    private int $id;
    /**
     * @column(type="string")
     */
    private string $nome;
    /**
     * @column(type="string")
     */
    private string $descricao;
    /**
     * @column(type="float")
     */
    private float $preco;
    /**
     * @column(type="string")
     */
    private string $titulo_produto;
    /**
     * @column(type="string")
     */
    private  $imagem_produto;
    /**
     * @column(type="string")
     */
    private string $categoria;
    /**
     * @column(type="string")
     */
    private string $subcategoria;

    /**
     * @column(type="float")
     */
    private float $desconto;
    /**
     * @column (type='string')
     */
    private string $marcas;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco):self
    {
        $this->preco = $preco;
        return $this;
    }


    public function getTituloProduto(): string
    {
        return $this->titulo_produto;
    }

    public function setTituloProduto(string $titulo_produto): self
    {
        $this->titulo_produto = $titulo_produto;
        return $this;
    }

    public function getImagemProduto()
    {
        return $this->imagem_produto;
    }

    public function setImagemProduto($imagem_produto): self
    {
        $this->imagem_produto = $imagem_produto;
        return $this;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria( string  $categoria):self
    {
        $this->categoria = $categoria;
        return $this;
    }

    public function getSubcategoria(): string
    {
        return $this->subcategoria;
    }

    public function setSubcategoria(string $subcategoria): self
    {
        $this->subcategoria = $subcategoria;
        return $this;
    }

    public function getDesconto(): float
    {
        return $this->desconto;
    }

    public function setDesconto(float $desconto): self
    {
        $this->desconto = $desconto;
        return $this;
    }


    public function getMarcas(): string
    {
        return $this->marcas;
    }


    public function setMarcas(string $marcas):self
    {
        $this->marcas = $marcas;
        return $this;
    }

}
