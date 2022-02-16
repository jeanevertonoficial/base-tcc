<?php

class Produtos
{
    private mysqli $mysql;


    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionarProduto(
        string $nome,
        string $descricao,
        float  $preco,
        string $titulo_produto,
        float  $preco_desc,
        string $imagem_produto
    ): void
    {
        /*
                var_dump($nome);
                var_dump($descricao);
                var_dump($preco);
                var_dump($preco_desc);
                var_dump($titulo_produto);
                var_dump($imagem_produto);
                exit();*/

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $titulo_produto = $_POST['titulo_produto'];
        $preco_desc = $_POST['preco_desc'];
        $imagem_produto = $_FILES['imagem_produto'];

        $preco_desc = $preco - ($preco * $preco_desc) / 100;

        if ($imagem_produto != null) {

            preg_match("/\.(jpg|png|jpeg|jfif){1}$/i", $imagem_produto['name'], $ext);

            if ($ext == true) {

                $caminho_arquivo = "arquivos/" . $titulo_produto;

                move_uploaded_file($imagem_produto["tmp_name"], $caminho_arquivo);

                $cadastro = $this->mysql->prepare('INSERT INTO `produtos` (nome, descricao, preco, titulo_produto, preco_desc, imagem_produto) VALUES (?, ?, ?, ?, ?, ?)');
                $cadastro->bind_param('ssssss', $nome, $descricao, $preco, $titulo_produto, $preco_desc, $imagem_produto);
                if ($cadastro->execute()) {
                    echo 'Cadastro feito com sucesso!';
                } else {
                    echo " 
                            <script class='alerta' type=\"text/javascript\">
                                alert(\"Extensão inválida.\");
                            </script>
                        ";
                }
                echo " 
                            <script class='alerta' type=\"text/javascript\">
                                alert(\"Imagem cadastrada com sucesso.\");
                            </script>
                        ";
                header("Location: loja-itens-adm.php");

            } else {
                echo " 
                        <script class='alerta' type=\"text/javascript\">
                            alert(\"Não foi possivel salvar imagem.\");
                        </script>
                    ";
            }

        } else {
            echo " 
                    <script class='alerta' type=\"text/javascript\">
                        alert(\"Não foi possivel salvar imagem, arquivo null.\");
                    </script>
                ";

        }
    }
}
