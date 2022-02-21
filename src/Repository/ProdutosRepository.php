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

    public function persist(Produtos $produtos): bool
    {
        $sql = 'INSERT INTO produtos (
                      nome, 
                      descricao, 
                      preco, 
                      titulo_produto, 
                      preco_desc,
                      imagem_produto, 
                      categoria, 
                      subcategoria, 
                      marcas, 
                      ) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, ':nome');
        $stm->bindValue(2, ':descricao');
        $stm->bindValue(3, ':preco');
        $stm->bindValue(4, ':titulo_produto');
        $stm->bindValue(5, ':categoria');
        $stm->bindValue(6, ':subcategoria');
        $stm->bindValue(7, ':marca');
        $stm->bindValue(8, ':imagem_produto');

        return $stm->execute();
    }

    public function findAll(): array
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