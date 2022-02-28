<?php

namespace src\doctrine\Controller;

use Doctrine\ORM\EntityManagerInterface;
use src\doctrine\Entity\Funcionario;

class Loginadm implements InterfaceProcessaRequisicao
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeUsuarios = $entityManager
            ->getRepository(Funcionario::class);

        $email = filter_var(
            $this->getParsedBody()['email'],
            FILTER_VALIDATE_EMAIL
        );

    }

    public function processaRequisicao(): void
    {

        // TODO: Implement processaRequisicao() method.
    }
}