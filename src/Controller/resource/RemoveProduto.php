<?php

namespace src\doctrine\Controller\resource;


use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use src\doctrine\Controller\InterfaceProcessaRequisicao;
use src\doctrine\Entity\Produtos;
use src\doctrine\infra\EntityManegeFactory;
use src\doctrine\Helper\FlashMessageTrait;


class RemoveProduto
{
    use FlashMessageTrait;

    /**
     *
     */
    private $entityManeger;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        try {



        $id = filter_var(
            $request->getQueryParams()['id'],
            FILTER_VALIDATE_INT
        );

            $resposta = new Response(302, ['Location' => '/dashboard-administrativo']);
            if (is_null($id) || $id === false) {
                $this
                    ->definirMensagem(
                    'danger', 'Curso inexistente'
                );
                return $resposta;
            }

            $prod = $this->entityManager->getReference(
                Produtos::class,
                $id
            );
            $this->entityManager
                ->remove($prod);
            $this->entityManager
                ->flush();
            $this
                ->definirMensagem(
                    'success', 'Curso excluído com sucesso'
                );

            return $resposta;
        } catch (\RuntimeException $exception){
            echo 'Erro ao tentar Excluir o Produto!'. $exception;
        }

    }


}