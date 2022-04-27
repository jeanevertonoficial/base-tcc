<?php

namespace src\doctrine\Controller\resource;

use src\doctrine\Controller\InterfaceProcessaRequisicao;
use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

class CadastrarProdutos implements InterfaceProcessaRequisicao
{

    public function __construct()
    {

        $this->entityManeger = (new EntityManegeFactory())
            ->getEntityManege();

        $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST,'descricao', FILTER_SANITIZE_STRING);
        $preco = filter_input(INPUT_POST,'preco', FILTER_SANITIZE_NUMBER_FLOAT);
        $titulo = filter_input(INPUT_POST,'titulo_produto', FILTER_SANITIZE_STRING);
        $categoria = filter_input(INPUT_POST,'categoria', FILTER_SANITIZE_STRING);
        $subcat = filter_input(INPUT_POST,'subcategoria', FILTER_SANITIZE_STRING);
        $destaque = filter_input(INPUT_POST,'destaque', FILTER_SANITIZE_NUMBER_INT);
        $posisao_destaque = filter_input(INPUT_POST,'posicao_destaque', FILTER_SANITIZE_STRING);
        $desc = filter_input(INPUT_POST,'desconto', FILTER_SANITIZE_NUMBER_FLOAT);
        $QtdEstoque = filter_input(INPUT_POST,'QtdEstoque', FILTER_SANITIZE_NUMBER_INT);
        $marcas = filter_input(INPUT_POST,'marca', FILTER_SANITIZE_STRING);
        $superdestaque = filter_input(INPUT_POST,'super_destaque', FILTER_SANITIZE_STRING);
        $imagem = $_FILES['imagem_produto'];


        // manipulação da data
        date_default_timezone_set('America/Sao_Paulo');
        $create = date('d-m-Y H:i');

        $dataCreate = $create;

        if ($imagem != null) {

            preg_match("/\.(jpg|png|jpeg|jfif){1}$/i", $imagem['name'], $ext);

            if ($ext == true) {

                $novo = date('d.m.Y.h.s');

                $nomeAtt = $nome . '_' . $novo;

                $caminho_arquivo = "img/arquivos/";

                move_uploaded_file($_FILES['imagem_produto']["tmp_name"], $caminho_arquivo . $nomeAtt);

                $produto = new Produtos();
                $produto->setNome($nomeAtt);
                $produto->setDescricao($descricao);
                $produto->setPreco($preco);
                $produto->setTituloProduto($titulo);
                $produto->setImagemProduto($imagem);
                $produto->setCategoria($categoria);
                $produto->setSubcategoria($subcat);
                $produto->setDesconto($desc);
                $produto->setMarcas($marcas);
                $produto->setPosicaodestaque($posisao_destaque);
                $produto->setEhdestaque($destaque);
                $produto->setQtdEstoque($QtdEstoque);
                $produto->setDataDeCriacao($dataCreate);
                $produto->setEhsuperdestaque($superdestaque);

                $this->entityManeger->persist($produto);
                $_SESSION['msgcad'] = "Produto cadastrado com Sucesso";
                $this->entityManeger->flush();

            } else {
                ?>
                <script>
                    alert("Extensão inválida.");
                </script> <?php
            }
        } else {
            ?>
            <script>alert('Falha ao cadastrar Produto!')</script>
            <?php
        }
    }

    public function processaRequisicao(): void
    {
        $_SESSION['msgcad'] = "Produto cadastrado com Sucesso";
        header('Location: \cadastrar-produtos');
    }

}