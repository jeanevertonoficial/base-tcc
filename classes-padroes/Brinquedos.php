<?php

namespace Src\Arquitetura\Model;

class Brinquedos extends Categoria
{
    private string $modalidade;
    private string $categoria;
    private ?int $nivel_de_idade;
    private string $genero;
    private $estoque_produto;

    /**
     * @param $nome_categoria
     * @param $posicao_prod
     * @param $nivel
     * @param $cor_categoria
     * @param $estoque_produto
     * @param $modalidade
     * @param $nivel_de_idade
     * @param $genero
     * @param $categoria
     */
    public function __construct($nome_categoria, $posicao_prod, $nivel, $cor_categoria, $estoque_produto, $modalidade, $nivel_de_idade, $genero, $categoria)
    {
        parent::__construct($nome_categoria, $posicao_prod, $nivel, $cor_categoria, $estoque_produto);
        $this->modalidade = $modalidade;
        $this->nivel_de_idade = $nivel_de_idade;
        $this->genero = $genero;
        $this->categoria = $categoria;
        $this->estoque_produto = $estoque_produto;
    }

    /**
     * @return string
     */
    public function recuperaModalidade(): string
    {
        return $this->modalidade;
    }

    /**
     * @return string
     */
    public function recuperaCategoria(): string
    {
        return $this->categoria;
    }

    /**
     * @return int|null
     */
    public function recuperaNivelDeIdade(): ?int
    {
        return $this->nivel_de_idade;
    }

    /**
     * @return string
     */
    public function recuperaGenero(): string
    {
        return $this->genero;
    }

}