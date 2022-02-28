<?php

use src\doctrine\Controller\{
    ListarProdutos,
    Loja};

return [
    '/cadastrar-produtos' => ListarProdutos::class,
    '/home' => Loja::class,
    '/dashborad' => Loja::class,

];