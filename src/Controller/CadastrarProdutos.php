<?php

namespace src\doctrine\Controller;

use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

class CadastrarProdutos implements InterfaceProcessaRequisicao
{
    public function __construct()
    {
        $this->entityManeger = (new EntityManegeFactory())
            ->getEntityManege();

    }

    public function processaRequisicao():void
    {
        $produto = new Produtos();
        $produto->setNome($_POST['nome']);
        $produto->setDescricao($_POST['descricao']);
        $produto->setPreco($_POST['preco']);
        $produto->setTituloProduto($_POST['titulo_produto']);
        $produto->setImagemProduto($_POST['imagem_produto']);
        $produto->setCategoria($_POST['categoria']);
        $produto->setSubcategoria($_POST['subcategoria']);
        $produto->setDesconto($_POST['desconto']);
        $produto->setMarcas($_POST['marcas']);

        $this->entityManeger->persist($produto);
        $this->entityManeger->flush();

        require_once __DIR__ . './../../Application/layouts/components/cadastrar-produtos.phtml';
    }

}