<?php

namespace  src\doctrine\infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManegeFactory
{
    /** @return EntityManagerInterface */
    public function getEntityManege(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src'],
            true
        );

        // Dados para a conexão do lojabase
        $connection = [
            'driver' => 'pdo_mysql',
            'rost' => 'localhost',
            'dbname' => 'lojabase',
            'user' => 'root',
            'password' => ''
        ];
        return EntityManager::create($connection, $config);
    }
}
