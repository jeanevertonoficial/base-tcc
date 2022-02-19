<?php

namespace src\doctrine\Model;

use Doctrine\Common\Collections\ArrayCollection;

class Produtos
{
    /**
     * @column(type="string")
     */
    private $nome;
    /**
     * @column(type="string")
     */
    private $descricao;
    /**
     * @column(type="float")
     */
    private $preco;
    /**
     * @column(type="string")
     */
    private $titulo_produto;
    /**
     * @column(type="string")
     */
    private $imagem_produto;
    /**
     * @column(type="string")
     */
    private $categoria;
    /**
     * @column(type="string")
     */
    private $subcategoria;
    /**
     * @column(type="string")
     */
    private $marca;

    /**
     * @column(type="float")
     */
    private $desconto;

    /**
     * @return mixed
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * @param mixed $desconto
     */
    public function setDesconto($desconto): void
    {
        $this->desconto = $desconto;
    }


    public function __construct()
    {
        $this->produtos = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getTituloProduto()
    {
        return $this->titulo_produto;
    }

    /**
     * @param mixed $titulo_produto
     */
    public function setTituloProduto($titulo_produto): void
    {
        $this->titulo_produto = $titulo_produto;
    }

    /**
     * @return mixed
     */
    public function getPrecoDesc()
    {
        return $this->preco_desc;
    }

    /**
     * @param mixed $preco_desc
     */
    public function setPrecoDesc($preco_desc): void
    {
        $this->preco_desc = $preco_desc;
    }

    /**
     * @return mixed
     */
    public function getImagemProduto()
    {
        return $this->imagem_produto;
    }

    /**
     * @param mixed $imagem_produto
     */
    public function setImagemProduto($imagem_produto): void
    {
        $this->imagem_produto = $imagem_produto;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria): void
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getSubcategoria()
    {
        return $this->subcategoria;
    }

    /**
     * @param mixed $subcategoria
     */
    public function setSubcategoria($subcategoria): void
    {
        $this->subcategoria = $subcategoria;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }
}
