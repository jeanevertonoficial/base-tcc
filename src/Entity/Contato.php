<?php

namespace src\doctrine\Entity;
/**
 * @Entity
 */
class Contato
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $Celular;

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->Celular;
    }

    /**
     * @param mixed $Celular
     * @return Contato
     */
    public function setCelular($Celular)
    {
        $this->Celular = $Celular;
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
     * @return Contato
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFixo()
    {
        return $this->Fixo;
    }

    /**
     * @param mixed $Fixo
     * @return Contato
     */
    public function setFixo($Fixo)
    {
        $this->Fixo = $Fixo;
        return $this;
    }

    /**
     * @Column(type="string")
     */
    private $email;

    /**
     * @Column(type="string")
     */
    private $Fixo;


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

}