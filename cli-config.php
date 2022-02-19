<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use src\doctrine\Persistence\EntityManegeFactory;

// replace with file to your own project bootstrap
require_once './vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManagerFactory = new EntityManegeFactory();
$entityManager = $entityManagerFactory->getEntityManege();

return ConsoleRunner::createHelperSet($entityManager);
