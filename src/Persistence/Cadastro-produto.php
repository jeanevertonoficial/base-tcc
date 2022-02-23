<?php

require_once __DIR__ . './../../vendor/autoload.php';

// Entity gerenciador de entidades

use src\doctrine\Entity\Produtos;
use src\doctrine\Helper\EntityManegeFactory;

$entitymanegerFactory = new EntityManegeFactory();
$entityManeger = $entitymanegerFactory->getEntityManege();


$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$titulo_produto = $_POST['titulo_produto'];
$imagem_produto = $_FILES['imagem_produto'];
$categoria = $_POST['categoria'];
$subcategoria = $_POST['subcategoria'];
$desconto = $_POST['desconto'];
$marcas = $_POST['marca'];


$produto = new Produtos(
    $argv[1] = 'nome',
    $argv[2] = 'descricao',
    $argv[3] = '15',
    $argv[4] = 'titulo_produto',
    $argv[5] = 'imagem_produto',
    $argv[6] = 'categoria',
    $argv[7] = 'subcategoria',
    $argv[8] = '1.0',
    $argv[9] = 'marcas'
);


$entityManeger->persist($produto);

$entityManeger->flush();
