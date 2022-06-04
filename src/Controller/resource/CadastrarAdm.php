<?php

namespace src\doctrine\Controller\resource;

use mysql_xdevapi\Exception;
use src\doctrine\Controller\InterfaceProcessaRequisicao;
use src\doctrine\Entity\adm;
use src\doctrine\infra\EntityManegeFactory;

class CadastrarAdm implements InterfaceProcessaRequisicao
{

    public function __construct()
    {
        $this->entitymeneger = (new EntityManegeFactory())->getEntityManege();


        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $imagem = $_FILES['foto_perfil'];

        date_default_timezone_set('America/Sao_Paulo');
        $create = date('d-m-Y H:i');

        $dataCreate = $create;

        try {

            if ($imagem != null) {
                $caminho_arquivo = "img/fotoPerfilAdm/";

                preg_match("/\.(jpg|png|jpeg){1}$/i", $imagem['name'], $ext);

                if ($ext == true) {
                    $imagem['name'] = rand(1, 1000) .'_'. $imagem['name'];
                    move_uploaded_file($_FILES['foto_perfil']["tmp_name"], $caminho_arquivo . $imagem['name']);

                    $adm = new adm();
                    $adm->setNome($dados['nome']);
                    $adm->setUsuario($dados['usuario']);
                    $adm->setEmail($dados['email']);
                    $adm->setSenha($dados['senha']);
                    $adm->setPermissao($dados['permissao']);
                    $adm->setTipoPermissao($dados['tipo_permissao']);
                    $adm->setFotoPerfil($imagem['name']);
                    $adm->setHoraCadastro($dataCreate);

                    $this->entitymeneger->persist($adm);
                    $this->entitymeneger->flush();

                }
            }
        } catch (Exception $exception) {
            ?>
            <script>
                alert("Extensão inválida.");
            </script> <?php
        }

    }

    public function processaRequisicao(): void
    {
        if ((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['id']) == true)) {
            $_SESSION['msgcad'] = "Olá bem vindo, acesse sua conta!";
            unset($_SESSION['id']);
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('location: /logar');
        }
    }
}