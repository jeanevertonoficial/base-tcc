<?php

use src\doctrine\Controller\CadastrarProdutos;

require_once __DIR__. './../vendor/autoload.php';

switch ($_SERVER['PATH_INFO']) {
    case '/cadastrar-produtos':
        $controlador = new CadastrarProdutos();
        $controlador->processaRequisicao();
        break;
    default:
        echo "Erro 404";
        break;
}