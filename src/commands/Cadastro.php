<?php

use Src\Arquitetura\Cliente;
use Src\Arquitetura\Endereco;

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
    '001',
    $endereco
);

echo $cliente->recuperaNome(). PHP_EOL;
echo $cliente->recuperaSobrenome(). PHP_EOL;
echo $cliente->recuperaCpf(). PHP_EOL;

?>
<pre>
    <?php

    var_dump($cliente);

    ?>
</pre>


