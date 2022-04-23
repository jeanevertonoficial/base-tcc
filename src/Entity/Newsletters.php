<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 */
class Newsletters
{
    /**
     * @Id
     * @GeneratedValue
     * @column (type="integer")
     */
    private $Id;
    /**
     * @column (type= "string")
     */
    private string $email;

    public function getEmail():string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
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
     */
    public function setId($Id): void
    {
        $this->Id = $Id;
    }
}