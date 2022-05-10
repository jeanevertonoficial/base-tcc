<?php

namespace src\doctrine\Controller\models;

use src\doctrine\infra\MysqlConnect;


class SuperDestaque
{
    public function __construct()
    {
        $this->mysql = (
        new MysqlConnect())
            ->conect();

        return $this->mysql;
    }

    public function chamaSelectCima()
    {
        $dql = $this->mysql->query("SELECT * FROM produtos WHERE `ehsuperdestaque` LIKE '%simcima%' limit 1");
        return $dql;
    }

    public function chamaSelectBaixo()
    {
        $dql =  $dql = $this->mysql->query("SELECT * FROM produtos WHERE `ehsuperdestaque` LIKE '%simbaixo%' limit 1");
        return $dql;
    }
}