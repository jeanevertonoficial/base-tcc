<?php

namespace src\doctrine\Repository;



use src\doctrine\infra\MysqlConnect;

class PromocaoCardMeio
{
    public function cardMeio()
    {
        $caminho = '../img/arquivos/';

        $mysql = (new MysqlConnect())->conect();

        $dql = "SELECT * FROM produtos WHERE `posicao_destaque` LIKE '%meio%' limit 1";
        $dql = mysqli_query($mysql, $dql);
        if (($dql) and ($dql->num_rows != 0)):
            while ($rows = mysqli_fetch_object($dql)): $img = $caminho . $rows->nome;
                $id = $rows->id; ?>
                <h5 class="card-title desconto"><?= $rows->desconto?>% DESCONTO</h5>
        <img src="<?= $img ?>" class="card-img-top" alt="<?= $rows->nome ?>">
        <div class="card-body">
            <p class="card-text"><?= $rows->titulo_produto ?></p>
            <button href="#" class="btn btn-comprar">COMPRAR AGORA</button>
        </div>
        <?php endwhile; endif;
    }
}