<?php

namespace Src\Arquitetura;

/**
 * @Entity
 */
class Newsletters
{
    /**
     * @id
     * @GeneratedValue
     * @column(type= "integer")
     */
    private int $id;
    /**
     * @column (type= "string")
     */
    private string $email;

    public function __construct($email)
    {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function recuperaEmail(): string
    {
        return $this->email;
    }

}