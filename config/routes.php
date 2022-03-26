<?php

use src\doctrine\Controller\{cad_newsletters,
    cad_prod,
    cadastrar\CadastrarProdutos,
    Login,
    Loginadm,
    NewslettersCadastro};


return [
    '/dashboard' => include_once './../view/loja.php',
    '/realiza-cadastro' => CadastrarProdutos::class,
    '/cadastrar-produtos' => cad_prod::class,
    '/salvar-newsletters' => NewslettersCadastro::class,
    '/cadastrar-newsletters' => cad_newsletters::class,
    '/logar' => Login::class,
    '/realizar-login' => Loginadm::class

];

/*
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
    default:
        $controlador = new Loja();
        $controlador->processaRequisicao();
        break;
}*/