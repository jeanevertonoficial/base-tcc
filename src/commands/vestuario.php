<?php

use Src\Arquitetura\Model\Vestuario;

require_once __DIR__. '/../../vendor/autoload.php';

$vestuario = new Vestuario(
    'roupa',
    '1',
    '15',
    'rosa',
    '20',
    'feminino',
    'Calça jeans',
    '149'
);

var_dump($vestuario);