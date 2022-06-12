<?php

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    \Doctrine\ORM\EntityManagerInterface::class => function () {
        return (new  src\doctrine\infra\EntityManegeFactory())
            ->getEntityManager();
    }
]);
$container = $builder->build();

return $container;

