<?php

namespace src\doctrine\Controller;

use Aws\Resource\Aws;
use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;

class CadastrarProdutos implements InterfaceProcessaRequisicao
{

    public function __construct()
    {

        $this->entityManeger = (new EntityManegeFactory())
            ->getEntityManege();

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $titulo = $_POST['titulo_produto'];
        $imagem = $_FILES['imagem_produto'];
        $categoria = $_POST['categoria'];
        $subcat = $_POST['subcategoria'];
        $desc = $_POST['desconto'];
        $marcas = $_POST['marca'];

        if ($imagem != null) {

            preg_match("/\.(jpg|png|jpeg|jfif){1}$/i", $imagem['name'], $ext);

            if ($ext == true) {

                $caminho_arquivo = "../arquivos/";

                move_uploaded_file($_FILES['imagem_produto']["tmp_name"], $caminho_arquivo . $nome);

                $produto = new Produtos();

                $produto->setNome($nome);
                $produto->setDescricao($descricao);
                $produto->setPreco($preco);
                $produto->setTituloProduto($titulo);
                $produto->setImagemProduto($imagem);
                $produto->setCategoria($categoria);
                $produto->setSubcategoria($subcat);
                $produto->setDesconto($desc);
                $produto->setMarcas($marcas);

                $this->entityManeger->persist($produto);
                $this->entityManeger->flush();

            } else {
                ?>
                <script>
                    alert("Extensão inválida.");
                </script> <?php
            }
        } else {
            ?>
            <script>alert('Falha ao cadastrar Produto!.')</script>
            <?php
        }
    }

    public function processaRequisicao(): void
    {
        header('Location: /excluir-produto');
    }

}