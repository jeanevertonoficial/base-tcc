<?php

namespace src\doctrine\Controller\cadastrar;

use src\doctrine\Controller\InterfaceProcessaRequisicao;
use src\doctrine\Entity\ProdutoBanner;
use src\doctrine\infra\EntityManegeFactory;

class BannerCarrossel implements InterfaceProcessaRequisicao
{

    public function __construct()
    {
        $this->entityManeger = (new EntityManegeFactory())
            ->getEntityManege();

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $titulo_banner = filter_input(INPUT_POST, 'titulo_banner', FILTER_SANITIZE_STRING);
        $posicao = filter_input(INPUT_POST, 'posicao', FILTER_SANITIZE_NUMBER_INT);
        $imagem = $_FILES['imagem_banner'];

        date_default_timezone_set('America/Sao_Paulo');
        $create = date('d-m-Y H:i');

        //var_dump($DataDeCriacao); exit();

        if ($imagem != null) {

            preg_match("/\.(jpg|png|jpeg|jfif){1}$/i", $imagem['name'], $ext);

            if ($ext == true) {

                $novo = date('d-m-Y');

                $nomeAtt = $nome . '_' . $novo;

                $caminho_arquivo = "img/banner/";

                move_uploaded_file($_FILES['imagem_banner']["tmp_name"], $caminho_arquivo . $nomeAtt);

                $banner = new ProdutoBanner();

                $banner->setNome($nomeAtt);
                $banner->setDescricao($descricao);
                $banner->setTituloBanner($titulo_banner);
                $banner->setImagemBanner($imagem);
                $banner->setPosicao($posicao);
                $banner->setDataDeCriacao($create);

                $this->entityManeger->persist($banner);

              //  var_dump($banner); exit();
                $this->entityManeger->flush();

            } else {
                echo 'Erro ao tentar cadastrar';
            }
        } else {
            echo 'Imagem Null, imagem inválida.';
        }
    }

    public function processaRequisicao(): void
    {
        header('Location: \dashboard');
    }
}