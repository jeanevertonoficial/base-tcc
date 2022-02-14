<?php

namespace Src\Arquitetura;

class Cliente extends Pessoa
{
    private static $numregistro;

    public function __construct($nome, $sobrenome, $cpf, $rg, $numregistro, Endereco $endereco)
  {
      parent::__construct($nome, $sobrenome, $cpf, $rg, $endereco);

      self::$numregistro++;
  }

    /**
     * @return mixed
     */
    public function recuperaNcp()
    {
        return $this->numregistro;
    }
}