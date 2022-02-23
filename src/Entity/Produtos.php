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

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;

    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }

    public function getTituloProduto(): string
    {
        return $this->titulo_produto;
    }

    public function setTituloProduto(string $titulo_produto)
    {
        $this->titulo_produto = $titulo_produto;
    }

    public function getImagemProduto()
    {
        return $this->imagem_produto;
    }

    public function setImagemProduto($imagem_produto)
    {
        $this->imagem_produto = $imagem_produto;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria)
    {
        $this->categoria = $categoria;
    }

    public function getSubcategoria(): string
    {
        return $this->subcategoria;
    }

    public function setSubcategoria(string $subcategoria)
    {
        $this->subcategoria = $subcategoria;
    }

    public function getDesconto(): float
    {
        return $this->desconto;
    }

    public function setDesconto(float $desconto)
    {
        $this->desconto = $desconto;
    }

    public function getMarcas(): string
    {
        return $this->marcas;
    }

    public function setMarcas(string $marcas)
    {
        $this->marcas = $marcas;
    }


}
