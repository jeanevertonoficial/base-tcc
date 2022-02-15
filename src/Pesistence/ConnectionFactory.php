<?php

$mysql = new mysqli('localhost', 'root', 'Donmisterjan10', 'lojabase') or die ("Não foi possível conectar com o banco de dados!");

$mysql->set_charset('utf8');

if ($mysql == false) {
    echo "Erro na conexão";
};