<?php

namespace Src\Arquitetura\Model;

class Newsletters
{
    private string $email;

    public function __construct($email)
    {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function recueraEmail(): string
    {
        return $this->email;
    }

}