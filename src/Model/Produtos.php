<?php

class Produtos
{
    private mysqli $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionarProduto(
        $nome,
        $descricao,
        $preco,
        $preco_desc,
        $titulo_produto,
        $imagem_produto
    ): void {

        $preco_desc = $preco - ($preco * $preco_desc) / 100;

        if ($imagem_produto != null) {

            preg_match("/\.(jpg|png|jpeg|jfif){1}$/i", $imagem_produto['name'], $ext);

            if ($ext == true) {

                $caminho_arquivo = "arquivos/" . $nome;

                move_uploaded_file($imagem_produto["tmp_name"], $caminho_arquivo);

                $cadastro = $this->mysql->prepare('INSERT INTO `produtos` (nome, descricao, preco, titulo_produto, preco_desc, imagem_produto) VALUES (?, ?, ?, ?, ?, ?)');
                $cadastro->bind_param('ssssss', $nome, $descricao, $preco, $titulo_produto, $preco_desc, $imagem_produto);
                if ($cadastro->execute()) {
                    echo 'Cadastro feito com sucesso!';
                } else {
                    echo 'Falha ao Cadastrar!';
                }
            }
    }

} }