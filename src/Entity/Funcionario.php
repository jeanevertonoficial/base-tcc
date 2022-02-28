<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 */
class Funcionario
{
    /**
     * @Id
     * @GeneratedValue
     * @column (type="integer")
     */
    private $Id;
    /**
     * @column (type="string")
     */
    private $email;
    /**
     * @column (type="string")
     *
     */
    private $senha;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return Funcionario
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Funcionario
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     * @return Funcionario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

}