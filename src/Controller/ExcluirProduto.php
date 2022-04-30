<?php

namespace src\doctrine\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use src\doctrine\Entity\Produtos;
use src\doctrine\Helper\FlashMessageTrait;

class ExcluirProduto
{

    use FlashMessageTrait;

    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $id = filter_var(
            $request->getQueryParams()['id'],
            FILTER_VALIDATE_INT
        );

        $resposta = new Response(302, ['Location' => '/dashboard-administrativo']);
        if (is_null($id) || $id === false) {
            $this->definirMensagem('danger', 'Produto inexistente');
            return $resposta;
        }

        $prod = $this->entityManager->getReference(
            Produtos::class,
            $id
        );
        $this->entityManager->remove($prod);
        $this->entityManager->flush();
        $this->definirMensagem('success', 'Produto excluído com sucesso');

        return $resposta;
    }

}