<?php

use src\doctrine\Controller\{cad_adm,
    cad_newsletters,
    cad_prod,
    CadastrarBanner,
    DashboardAdm,
    Login,
    Loginadm,
    Loja,
    NewslettersList,
    PerfilAdm,
    realizarCompra,
    resource\BannerCarrossel,
    resource\CadastrarAdm,
    resource\CadastrarProdutos,
    resource\CadastroSucesso,
    resource\NewslettersCadastro,
    resource\RelatorioProdutos,
    resource\RemoveProduto,
    Sair};

require_once __DIR__. './../vendor/autoload.php';

switch ($_SERVER['PATH_INFO']) {
    case '/realiza-cadastro':
        $controlador = new CadastrarProdutos();
        $controlador->processaRequisicao();
        break;
    case '/realiza-cadastro-administrador':
        $controlador = new CadastrarAdm();
        $controlador->processaRequisicao();
        break;
    case '/cadastrar-novo-administrador':
        $controlador = new cad_adm();
        $controlador->processaRequisicao();
        break;
    case '/cadastrar-produtos':
        $controlador = new cad_prod();
        $controlador->processaRequisicao();
        break;
    case '/salvar-newsletters':
        $controlador = new NewslettersCadastro();
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
    case '/exluir-produto':
        $controlador = new RemoveProduto();
        break;
    case '/banner':
        $controlador = new CadastrarBanner();
        $controlador->processaRequisicao();
        break;
    case '/realizar-compra':
        $controlador = new realizarCompra();
        $controlador->processaRequisicao();
        break;
    case '/banner-cadastro':
        $controlador = new BannerCarrossel();
        $controlador->processaRequisicao();
        break;
    case '/sair':
        $controlador = new Sair();
        break;
    case '/dashboard-administrativo':
        $controlador = new DashboardAdm();
        $controlador->processaRequisicao();
        break;
    case '/lista-newsletters':
        $controlador = new NewslettersList();
        $controlador->processaRequisicao();
        break;
    case '/relatorio-produtos':
        $controlador = new RelatorioProdutos();
        $controlador->processaRequisicao();
        break;
    case '/perfil':
        $controlador = new PerfilAdm();
        $controlador->processaRequisicao();
        break;
    default:
        $controlador = new Loja();
        $controlador->processaRequisicao();
        break;
}