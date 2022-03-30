<?php

namespace src\doctrine\Controller\cadastrar;

use Aws\Api\Validator;
use GuzzleHttp\Psr7\Response;
use src\doctrine\Controller\InterfaceProcessaRequisicao;
use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

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
        $destaque = $_POST['destaque'];
        $posisao_destaque = $_POST['posicao_destaque'];
        $desc = $_POST['desconto'];
        $marcas = $_POST['marca'];

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
                $produto->setDataDeCriacao($dataCreate);

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
            <script>alert('Falha ao cadastrar Produto!')</script>
            <?php
        }
    }

    public function processaRequisicao(): void
    {
        header('Location: \dashboard');
    }

}