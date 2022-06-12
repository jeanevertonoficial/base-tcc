<?php

use src\doctrine\Controller\{cad_adm,
    cad_newsletters,
    cad_prod,
    CadastrarBanner,
    DashboardAdm,
    ExcluirProduto,
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
    Sair};
use src\doctrine\Entity\Newsletters;


return [
   // '/dashboard' => include_once './../view/loja.php',
    '/realiza-cadastro' => CadastrarProdutos::class,
    '/cadastrar-produtos' => cad_prod::class,
    '/salvar-newsletters' => NewslettersCadastro::class,
    '/cadastrar-newsletters' => cad_newsletters::class,
    '/logar' => Login::class,
    '/realizar-login' => Loginadm::class,
    '/realiza-cadastro-administrador' => CadastrarAdm::class,
    '/dashboard' => Loja::class,
    '/exluir-produto' => ExcluirProduto::class,
    '/banner' => CadastrarBanner::class,
    '/banner-cadastro' => BannerCarrossel::class,
    '/sair' => Sair::class,
    '/realizar-compra' => realizarCompra::class,
    '/lista-newsletters' => Newsletters::class,
    '/relatorio-produtos' => RelatorioProdutos::class,
    '/perfil' => PerfilAdm::class

];
