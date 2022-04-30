<?php

use src\doctrine\Controller\{cad_newsletters,
    cad_prod,
    resource\CadastrarProdutos,
    resource\NewslettersCadastro,
    Login,
    Loginadm};


return [
    '/dashboard' => include_once './../view/loja.php',
    '/realiza-cadastro' => CadastrarProdutos::class,
    '/cadastrar-produtos' => cad_prod::class,
    '/salvar-newsletters' => NewslettersCadastro::class,
    '/cadastrar-newsletters' => cad_newsletters::class,
    '/logar' => Login::class,
    '/realizar-login' => Loginadm::class

];
