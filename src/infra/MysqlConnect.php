<?php

namespace src\doctrine\infra;

use mysqli;

class MysqlConnect
{
    public function conect(){

        $mysql = new mysqli('localhost', 'root', 'Jean9882', 'lojabase') or die ("Não foi possível conectar com o banco de dados!");
        //$mysql = new mysqli('localhost', 'root', '', 'barbeariadonmister')  or die ("Não foi possível conectar com o banco de dados!");
        $mysql->set_charset('utf8');

        if ($mysql == false) {
            echo "Erro na conexão";
        }
// conectando ao banco de dados

        return $mysql;
    }
}