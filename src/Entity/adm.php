<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 *
 */
class adm
{
    /**
     * @Id
     * @GeneratedValue
     * @column (type="integer")
     */
    private int $id;
    /**
     * @column (type="string")
     */
    private string $nome;
    /**
     * @column (type="string")
     */
    private string $usuario;
    /**
     * @column (type="string")
     */
    private string $email;
    /**
     * @column (type="string")
     */
    private string $senha;
    /**
     * @column (type="string")
     */
    private string $horaCadastro;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return adm
     */
    public function setId(int $Id): adm
    {
        $this->Id = $Id;
        return $this;
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
     * @return adm
     */
    public function setNome(string $nome): adm
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsuario(): string
    {
        return $this->usuario;
    }

    /**
     * @param string $usuario
     * @return adm
     */
    public function setUsuario(string $usuario): adm
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return adm
     */
    public function setEmail(string $email): adm
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * @param string $senha
     * @return adm
     */
    public function setSenha(string $senha): adm
    {
        $this->senha = $senha;
        return $this;
    }

    /**
     * @return string
     */
    public function getHoraCadastro(): string
    {
        return $this->horaCadastro;
    }

    /**
     * @param string $horaCadastro
     */
    public function setHoraCadastro(string $horaCadastro): void
    {
        $this->horaCadastro = $horaCadastro;
    }


}