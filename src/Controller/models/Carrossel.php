<?php

namespace src\doctrine\Controller\models;

use src\doctrine\infra\MysqlConnect;

class Carrossel
{
    public function __construct()
    {
        $this->mysql = (
        new MysqlConnect())
            ->conect();

        return $this->mysql;
    }
    public function chamaCarrossel()
    {
        $dql = $this->mysql->query('SELECT * FROM produtobanner');
        return $dql;
    }

    public function chamaContadorCarrossel()
    {
        return $contador = $this->mysql->query('SELECT COUNT(id) FROM produtobanner');
    }
}