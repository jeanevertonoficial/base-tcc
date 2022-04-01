<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 */
class Produtos
{
    /**
     * @id
     * @GeneratedValue
     * @column(type="integer")
     */
    private $id;
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
    private  $preco;
    /**
     * @column(type="string")
     */
    private $titulo_produto;
    /**
     * @column(type="string")
     */
    private  $imagem_produto;
    /**
     * @column(type="string")
     */
    private $categoria;
    /**
     * @column(type="string")
     */
    private $subcategoria;
    /**
     * @column(type="float")
     */
    private $desconto;
    /**
     * @column (type="string")
     */
    private $marcas;
    /**
     * @column (type="string")
     */
    private $posicao_destaque;

    /**
     * @column  (type="integer")
     */
    private $ehdestaque;

    /**
     * @return mixed
     */
    public function getEhsuperdestaque()
    {
        return $this->ehsuperdestaque;
    }

    /**
     * @param mixed $ehsuperdestaque
     * @return Produtos
     */
    public function setEhsuperdestaque($ehsuperdestaque)
    {
        $this->ehsuperdestaque = $ehsuperdestaque;
        return $this;
    }
    /**
     * @column  (type="string")
     */
    private $ehsuperdestaque;

    /**
     * @column (type="string")
     */
    private $DataDeCriacao;


    /**
     * @return mixed
     */
    public function getPosicaodestaque()
    {
        return $this->posicao_destaque;
    }

    /**
     * @return mixed
     */
    public function getDataDeCriacao()
    {
        return $this->DataDeCriacao;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $posicao_destaque
     */
    public function setPosicaodestaque($posicao_destaque): void
    {
        $this->posicao_destaque = $posicao_destaque;
    }

    /**
     * @return mixed
     */
    public function getEhdestaque()
    {
        return $this->ehdestaque;
    }

    /**
     * @param mixed $ehdestaque
     * @return Produtos
     */
    public function setEhdestaque($ehdestaque)
    {
        $this->ehdestaque = $ehdestaque;
        return $this;
    }

    /**
     * @param mixed $DataDeCriacao
     */
    public function setDataDeCriacao($DataDeCriacao): void
    {
        $this->DataDeCriacao = $DataDeCriacao;
    }


    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;

    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function getTituloProduto(): string
    {
        return $this->titulo_produto;
    }

    public function setTituloProduto(string $titulo_produto): void
    {
        $this->titulo_produto = $titulo_produto;
    }

    public function getImagemProduto()
    {
        return $this->imagem_produto;
    }

    public function setImagemProduto($imagem_produto): void
    {
        $this->imagem_produto = $imagem_produto;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function getSubcategoria(): string
    {
        return $this->subcategoria;
    }

    public function setSubcategoria(string $subcategoria): void
    {
        $this->subcategoria = $subcategoria;
    }

    public function getDesconto(): float
    {
        return $this->desconto;
    }

    public function setDesconto(float $desconto): void
    {
        $this->desconto = $desconto;
    }

    public function getMarcas(): string
    {
        return $this->marcas;
    }

    public function setMarcas(string $marcas): void
    {
        $this->marcas = $marcas;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
