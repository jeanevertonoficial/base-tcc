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
        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => $rootDir . './var/data/banco.sqlite'
        ];
        /*
        $connetion = [
            'driver' => 'pdo_mysql',
            'rost' => 'localhost',
            'dbname' => 'curso_doctrine',
            'user' => 'root',
            'password' => ''
        ]; */
        return EntityManager::create($connection, $config);
    }
}
