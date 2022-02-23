<?php

namespace  src\doctrine\Helper;

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

        // Dados para a conexão do banco
        $connection = [
            'driver' => 'pdo_mysql',
            'rost' => 'localhost',
            'dbname' => 'lojaBase',
            'user' => 'root',
            'password' => ''
        ];
        return EntityManager::create($connection, $config);
    }
}
