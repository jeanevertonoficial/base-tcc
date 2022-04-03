<?php

namespace src\doctrine\Controller;

use src\doctrine\infra\EntityManegeFactory;

class Loginadm implements InterfaceProcessaRequisicao
{

    public function __construct()
    {
        session_start(); // start da sessão
        $this->entitymaneger = (new EntityManegeFactory())->getEntityManege();

        // recebe o click do botão do formulario login de acesso do administrador
        $btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
        if ($btnLogin) {
            // recebendo os campo input do formulario de cadastro do adm
            $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

            if ((!empty($usuario)) AND (!empty($senha))) {
                $usuario = mysqli_real_escape_string($this->entitymaneger, $_POST['usuario']); //funcao protege mysql injection
                $senha = mysqli_real_escape_string($this->entitymaneger, $_POST['senha']);

                // recebendo e passando para a vareavel resultados os dados do banco de dados
                $resultado = "SELECT * FROM adm WHERE usuario='$usuario' LIMIT 3;";
                $result = mysqli_query($this->entitymaneger, $resultado);
                 // var_dump($result); exit();

                if (mysqli_num_rows($result)) {
                    //	var_dump($result);
                    if ($row = mysqli_fetch_assoc($result)) {
                        //var_dump($row);
                        if (password_verify($senha, $row['senha'])) {
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['nome'] = $row['nome'];
                            $_SESSION['usuario'] = $row['usuario'];
                            $_SESSION['email'] = $row['email'];
                            header('Location: /cadastrar-produtos');

                        }} else {
                        $_SESSION['msgcad'] = "Login ou/ senha incorreta, tente nomamente primeiro!";
                        header("Location: /logar");
                        header("Refresh:0");
                    }} else {
                    $_SESSION['msgcad'] = "Login ou/ senha incorreta, tente nomamente segundo!";
                    header("Location: /logar");
                    header("Refresh:0");
                }} else {
                $_SESSION['msgcad'] = "Login ou/ senha incorreta, tente nomamente terceiro!";
                header("Location: /logar");
                header("Refresh:0");
            }} else {
            $_SESSION['msgcad'] = "Login ou/ senha incorreta, tente nomamente ultimo if!";
            header("Location: /logar");
            header("Refresh:0");
        }
        mysqli_close($this->entitymaneger);
    }

    public function processaRequisicao(): void
    {

        include_once __DIR__. './../../view/login.php';
    }
}