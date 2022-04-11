<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 *
 */
class ProdutoBanner
{
    /**
     * @Id
     * @GeneratedValue
     * @column(type="integer")
     */
   private $Id;
    /**
     *
     * @column(type="string")
     */
    private $nome;
    /**
     * @column(type="string")
     */
    private $descricao;
    /**
     * @column(type="string")
     */
    private  $imagem_banner;
    /**
     * @column(type="string")
     */
    private  $titulo_banner;
    /**
     * @column(type="string")
     */
    private  $posicao;
    /**
     * @column(type="string")
     */
    private  $linksbanner;

    /**
     * @return mixed
     */
    public function getLinksbanner()
    {
        return $this->linksbanner;
    }

    /**
     * @param mixed $linksbanner
     * @return ProdutoBanner
     */
    public function setLinksbanner($linksbanner)
    {
        $this->linksbanner = $linksbanner;
        return $this;
    }
    /**
     * @column(type="string")
     */
    private  $DataDeCriacao;

    /**
     * @return mixed
     */
    public function getTituloBanner()
    {
        return $this->titulo_banner;
    }

    /**
     * @param mixed $titulo_banner
     * @return ProdutoBanner
     */
    public function setTituloBanner($titulo_banner)
    {
        $this->titulo_banner = $titulo_banner;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return ProdutoBanner
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
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
     * @return ProdutoBanner
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
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
     * @return ProdutoBanner
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImagemBanner()
    {
        return $this->imagem_banner;
    }

    /**
     * @param mixed $imagem_banner
     * @return ProdutoBanner
     */
    public function setImagemBanner($imagem_banner)
    {
        $this->imagem_banner = $imagem_banner;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getPosicao()
    {
        return $this->posicao;
    }

    /**
     * @param mixed $posicao
     * @return ProdutoBanner
     */
    public function setPosicao($posicao)
    {
        $this->posicao = $posicao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataDeCriacao()
    {
        return $this->DataDeCriacao;
    }

    /**
     * @param mixed $DataDeCriacao
     * @return ProdutoBanner
     */
    public function setDataDeCriacao($DataDeCriacao)
    {
        $this->DataDeCriacao = $DataDeCriacao;
        return $this;
    }


}