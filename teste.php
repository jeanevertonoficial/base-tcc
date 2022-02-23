<?php

use src\doctrine\infra\EntityManegeFactory;

require_once __DIR__. '/vendor/autoload.php';


$entityManegeFactory = new EntityManegeFactory();
$entitymanege = $entityManegeFactory->getEntityManege();

var_dump($entitymanege->getConnection());