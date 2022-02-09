<?php

use Src\Arquitetura\Model\{ Brinquedos} ;

require_once __DIR__ . '/../../vendor/autoload.php';

$brinquedo = new Brinquedos(
    '01',
    'Infantil',
    '2',
    '10',
    'green',
    '150',
    'Carrinho',
    '12',
    'masculino',
);

var_dump($brinquedo);