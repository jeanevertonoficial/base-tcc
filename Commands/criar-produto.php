<?php

use src\doctrine\Model\Produtos;
use src\doctrine\Persistence\EntityManegeFactory;

require_once __DIR__.'./../vendor/autoload.php';

//Entity gerenciador de entidades
$entitymanegeFactory = new EntityManegeFactory();
$entitymanege = $entitymanegeFactory->getEntityManege();

//criando o produto
$produto = new Produtos();
$produto->setNome($argv[1]);
$produto->setDescricao($argv[2]);
$produto->setCategoria($argv[3]);
$produto->setPreco($argv[4]);
$produto->setSubcategoria($argv[5]);
$produto->setTituloProduto($argv[6]);
$produto->setImagemProduto($argv[7]);
$produto->setDesconto($argv[8]);

$entitymanege->persist($produto);
$entitymanege->flush();

var_dump($produto);
