<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use src\doctrine\Helper\EntityManegeFactory;

// Require o autoload
require_once './vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManagerFactory = new EntityManegeFactory();
$entityManager = $entityManagerFactory->getEntityManege();

return ConsoleRunner::createHelperSet($entityManager);