<?php

use Src\Arquitetura\Cliente;
use Src\Arquitetura\Endereco;
use Src\Arquitetura\Model\Vestuario;

require_once '../../vendor/autoload.php';


$endereco = new Endereco(
    '8480',
    'paiçandu',
    'Rua teste',
    'Bairro Teste',
    'Paraná',
    '87540-000'
);

$cliente = new Cliente(
    'Jean',
    'Everton',
    '089-555-555-00',
    '089845454',
    '1',
    $endereco
);

$vestuario = new Vestuario(
    'Calça',
    '10',
    '1',
    'Verde',
    '20',
    'feminino',
    'Vestido para meninas',
    '250'
);

echo $cliente->recuperaNome(). PHP_EOL;
echo $cliente->recuperaSobrenome(). PHP_EOL;
echo $cliente->recuperaCpf(). PHP_EOL;
echo $endereco->recuperaCidade(). PHP_EOL;
echo $vestuario->recuperaNomeCategoria(). PHP_EOL;
echo $vestuario->recuperaCorCategoria(). PHP_EOL;


?>



