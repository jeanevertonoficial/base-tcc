<?php

use src\doctrine\Controller\{
    CadastrarProdutos,
    Loja
};

require_once __DIR__. './../vendor/autoload.php';

switch ($_SERVER['PATH_INFO']) {
    case '/cadastrar-produtos':
        $controlador = new CadastrarProdutos();
        $controlador->processaRequisicao();
        break;
    case '/dashboard':
        $controlador = new Loja();
        $controlador->processaRequisicao();
    default:
        $controlador = new Loja();
        $controlador->processaRequisicao();
        break;
}