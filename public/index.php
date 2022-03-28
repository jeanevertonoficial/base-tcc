<?php

use src\doctrine\Controller\{cad_newsletters,
    cad_prod,
    cadastrar\BannerCarrossel,
    cadastrar\CadastrarProdutos,
    cadastrar\CadastroSucesso,
    CadastrarBanner,
    Login,
    Loginadm,
    Loja,
    NewslettersCadastro,
    RemoveProduto};

require_once __DIR__. './../vendor/autoload.php';

switch ($_SERVER['PATH_INFO']) {
    case '/realiza-cadastro':
        $controlador = new CadastrarProdutos();
        $controlador->processaRequisicao();
        break;
    case '/cadastrar-produtos':
        $controlador = new cad_prod();
        $controlador->processaRequisicao();
        break;
    case '/salvar-newsletters':
        $controlador = new NewslettersCadastro();
        $controlador->processaRequisicao();
        break;
    case '/cadastrar-newsletters':
        $controlador = new cad_newsletters();
        $controlador->processaRequisicao();
        break;
    case '/dashboard':
        $controlador = new Loja();
        $controlador->processaRequisicao();
        break;
    case '/logar':
        $controlador = new Login();
        $controlador->processaRequisicao();
        break;
    case '/realizar-login':
        $controlador = new LoginAdm();
        $controlador->processaRequisicao();
        break;
    case '/cadastrado-com-sucesso':
        $controlador = new CadastroSucesso();
        $controlador->processaRequisicao();
        break;
    case '/excluir-produto':
        $controlador = new RemoveProduto();
        $controlador->processaRequisicao();
        break;
    case '/banner':
        $controlador = new CadastrarBanner();
        $controlador->processaRequisicao();
        break;
    case '/banner-cadastro':
        $controlador = new BannerCarrossel();
        $controlador->processaRequisicao();
        break;
    default:
        $controlador = new Loja();
        $controlador->processaRequisicao();
        break;
}
/*
session_start();

$ehRotaDeLogin = stripos($caminho, 'login');
if (!isset($_SESSION['logado']) && $ehRotaDeLogin === false) {
    header('Location: /login');
    exit();
}


*/