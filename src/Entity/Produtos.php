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
     * @column (type="string")
     */
    private string $marcas;


     public function __construct($nome, $descricao, $preco, $titulo_produto, $imagem_produto, $categoria, $subcategoria, $desconto, $marcas)
     {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->titulo_produto = $titulo_produto;
        $this->imagem_produto = $imagem_produto;
        $this->categoria = $categoria;
        $this->subcategoria = $subcategoria;
        $this->desconto = $desconto;
        $this->marcas = $marcas;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return string
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     * @return string
     */
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * @param float $preco
     * @return string
     */
    public function setPreco(float $preco)
    {
        $this->preco = $preco;
        return $this;
    }

    /**
     * @return string
     */
    public function getTituloProduto(): string
    {
        return $this->titulo_produto;
    }

    /**
     * @param string $titulo_produto
     * @return string
     */
    public function setTituloProduto(string $titulo_produto)
    {
        $this->titulo_produto = $titulo_produto;
        return $this;
    }

    /**
     * @return string
     */
    public function getImagemProduto()
    {
        return $this->imagem_produto;
    }

    /**
     * @param  $imagem_produto
     * @return self
     */
    public function setImagemProduto($imagem_produto)
    {
        $this->imagem_produto = $imagem_produto;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoria(): string
    {
        return $this->categoria;
    }

    /**
     * @param string $categoria
     * @return string
     */
    public function setCategoria(string $categoria)
    {
        $this->categoria = $categoria;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubcategoria(): string
    {
        return $this->subcategoria;
    }

    /**
     * @param string $subcategoria
     * @return string
     */
    public function setSubcategoria(string $subcategoria)
    {
        $this->subcategoria = $subcategoria;
        return $this;
    }

    /**
     * @return float
     */
    public function getDesconto(): float
    {
        return $this->desconto;
    }

    /**
     * @param float $desconto
     * @return float
     */
    public function setDesconto(float $desconto)
    {
        $this->desconto = $desconto;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarcas(): string
    {
        return $this->marcas;
    }

    /**
     * @param string $marcas
     * @return string
     */
    public function setMarcas(string $marcas)
    {
        $this->marcas = $marcas;
        return $this;
    }


}
