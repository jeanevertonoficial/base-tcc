<?php

namespace src\doctrine\Repository;


use src\doctrine\Entity\Produtos;

class ProdutosRepository
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function produtos(): array
    {
        $sql = 'SELECT * FROM produtos';
        $stm = $this->pdo->query($sql);

        return $stm->fetchAll(\PDO::FETCH_CLASS, Produtos::class);
    }

    public function buscarProdutos()
    {
        $query = $this->createQueryBuilder('a')
            ->join('a.produtos', 'p')
            ->addSelect('t')
            ->getQuery();

        return $query->getResult();
    }
}