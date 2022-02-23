<?php

use src\doctrine\Controller\CadastrarProdutos;
use src\doctrine\Entity\Produtos;

require_once __DIR__. './../vendor/autoload.php';

switch ($_SERVER['PATH_INFO']) {
    case '/cadastrar-produtos':
        $controlador = new CadastrarProdutos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso':
        $controlador = new FormularioDeInsercao();
        $controlador->processaRequisicao();
        break;
    default:
        echo "Erro 404";
        break;
}