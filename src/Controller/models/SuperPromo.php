<?php

namespace src\doctrine\Controller\models;


use src\doctrine\infra\MysqlConnect;

class SuperPromo
{
    public function __construct()
    {
        $this->mysql = (
        new MysqlConnect())
            ->conect();

        return $this->mysql;
    }

    public function chamaSuperPromocaoEsquerdo()
    {
        $dql = $this->mysql->query("SELECT * FROM produtos WHERE `posicao_destaque` LIKE '%esquerdo%' limit 1");
        return $dql;
    }

    public function chamaSuperPromocaoMeio()
    {
        $dql = $this->mysql->query("SELECT * FROM produtos WHERE `posicao_destaque` LIKE '%meio%' limit 1 ");
        return $dql;
    }

    public function chamaSuperPromocaoDireito()
    {
        $dql = $this->mysql->query("SELECT * FROM produtos WHERE `posicao_destaque` LIKE '%direito%' limit 1 ");
        return $dql;
    }

    public function chamaSuperPromocaoDireitoVestuario()
    {
        $dql = $this->mysql->query("SELECT * FROM produtos WHERE `posicao_destaque` LIKE '%direito%' and `categoria` LIKE '%vestuario%' limit 1 ");
        return $dql;
    }

    public function chamaSuperPromocaoMeioVestuario()
    {
        $dql = $this->mysql->query("SELECT * FROM produtos WHERE `posicao_destaque` LIKE '%meio%' and `categoria` LIKE '%vestuario%' limit 1");
        return $dql;
    }

    public function chamaSuperPromocaoEsquerdoVestuario()
    {
        $dql = $this->mysql->query("SELECT * FROM produtos WHERE `posicao_destaque` LIKE '%esquerdo%' and `categoria` LIKE '%vestuario%' limit 1 ");
        return $dql;
    }

}