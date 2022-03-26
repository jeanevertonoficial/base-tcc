<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 *
 */
class Cliente extends Pessoa
{

    /**
     * @column(type="integer")
     */
    private int $indentificacao;

    /**
     * @return int
     */
    public function getIndentificacao(): int
    {
        return $this->indentificacao;
    }

    /**
     * @param int $indentificacao
     * @return Cliente
     */
    public function setIndentificacao(int $indentificacao): Cliente
    {
        $this->indentificacao = $indentificacao;
        return $this;
    }

    public function __construct($nome, $sobrenome, $cpf, $rg, $indentificacao, Endereco $endereco)
  {
      parent::__construct($nome, $sobrenome, $cpf, $rg, $endereco);

      $this->indentificacao = $indentificacao;
  }

    public function recuperaNcp()
    {
        return $this->numregistro;
    }
}