<?php

namespace src\doctrine\Controller\resource;

use src\doctrine\Controller\InterfaceProcessaRequisicao;
use src\doctrine\Entity\adm;
use src\doctrine\infra\EntityManegeFactory;

class CadastrarAdm implements InterfaceProcessaRequisicao
{

    public function __construct()
    {
        $this->entitymeneger = (new EntityManegeFactory())->getEntityManege();


        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        // var_dump($dados); exit();

        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

        date_default_timezone_set('America/Sao_Paulo');
        $create = date('d-m-Y H:i');

        $dataCreate = $create;

                $adm = new adm();
                $adm->setNome($dados['nome']);
                $adm->setUsuario($dados['usuario']);
                $adm->setEmail($dados['email']);
                $adm->setSenha($dados['senha']);
                $adm->setHoraCadastro($dataCreate);


                $this->entitymeneger->persist($adm);
                $this->entitymeneger->flush();


    }

    public function processaRequisicao(): void
    {
        if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)and (!isset ($_SESSION['id']) == true))
        {
            unset($_SESSION['id']);
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('location: /logar');
        }
    }
}