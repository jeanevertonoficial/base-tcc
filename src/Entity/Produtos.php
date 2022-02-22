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

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getTituloProduto(): string
    {
        return $this->titulo_produto;
    }

    public function getImagemProduto()
    {
        return $this->imagem_produto;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function getSubcategoria(): string
    {
        return $this->subcategoria;
    }

    public function getDesconto(): float
    {
        return $this->desconto;
    }

    public function getMarcas(): string
    {
        return $this->marcas;
    }

    /**
     * @param string $nome
     * @return Produtos
     */
    public function setNome(string $nome): Produtos
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param string $descricao
     * @return Produtos
     */
    public function setDescricao(string $descricao): Produtos
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @param float $preco
     * @return Produtos
     */
    public function setPreco(float $preco): Produtos
    {
        $this->preco = $preco;
        return $this;
    }

    /**
     * @param string $titulo_produto
     * @return Produtos
     */
    public function setTituloProduto(string $titulo_produto): Produtos
    {
        $this->titulo_produto = $titulo_produto;
        return $this;
    }

    /**
     * @param mixed $imagem_produto
     * @return Produtos
     */
    public function setImagemProduto($imagem_produto)
    {
        $this->imagem_produto = $imagem_produto;
        return $this;
    }

    /**
     * @param string $categoria
     * @return Produtos
     */
    public function setCategoria(string $categoria): Produtos
    {
        $this->categoria = $categoria;
        return $this;
    }

    /**
     * @param string $subcategoria
     * @return Produtos
     */
    public function setSubcategoria(string $subcategoria): Produtos
    {
        $this->subcategoria = $subcategoria;
        return $this;
    }

    /**
     * @param float $desconto
     * @return Produtos
     */
    public function setDesconto(float $desconto): Produtos
    {
        $this->desconto = $desconto;
        return $this;
    }

    /**
     * @param string $marcas
     * @return Produtos
     */
    public function setMarcas(string $marcas): Produtos
    {
        $this->marcas = $marcas;
        return $this;
    }


}
