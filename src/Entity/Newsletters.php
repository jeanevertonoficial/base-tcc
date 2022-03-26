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
}