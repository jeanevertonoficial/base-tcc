<?php

namespace src\doctrine\Controller\models;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use src\doctrine\Entity\ProdutoBanner;
use src\doctrine\infra\EntityManegeFactory;

class Carrossel
{
    /**
     * @ORM\Column(type="string")
     */
    private EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this->entityManager = (
        new EntityManegeFactory())
            ->getEntityManege();

        return $this->entityManager;
    }

    public function repositorioBanner(): EntityRepository
    {
        $dql = $this->entityManager
            ->getRepository(ProdutoBanner::class);
        return $dql;
    }

    public function chamaContadorCarrossel(): array
    {
        $banner = $this->repositorioBanner()
            ->findAll();
       // dd($banner);
        return $banner;
    }
}