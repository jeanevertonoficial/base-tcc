<?php

use src\doctrine\Entity\Newsletters;
use src\doctrine\infra\EntityManegeFactory;

require_once __DIR__. './../../vendor/autoload.php';

$entitymanege = new EntityManegeFactory();
$entitymaneger = $entitymanege->getEntityManege();

//$newslatter = new Newsletters();
//$newslatter->setEmail($argv[1]);

//$entitymaneger->persist($newslatter);

$entitymaneger->flush();

