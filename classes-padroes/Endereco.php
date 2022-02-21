<?php

namespace Src\Arquitetura;

class Endereco
{
    private string $numero;
    private string $cidade;
    private string $rua;
    private string $bairro;
    private $estado;
    private string $ceep;

    public function __construct($numero, $cidade, $rua, $bairro, $estado, $ceep)
    {
        $this->numero = $numero;
        $this->rua = $rua;
        $this->bairro = $bairro;

        $ceep = filter_var($ceep, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{5}\-[0-9]{3}$/'
            ]
        ]);

        if ($ceep === false) {
            echo 'Ceep inválido.';
            exit();
        }

       $this->ceep = $ceep;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    /**
     * @return string
     */
    public function recuperaNumero()
    {
        return $this->numero;
    }

    /**
     * @return string
     */
    public function recuperaCidade()
    {
        return $this->cidade;
    }


    /**
     * @return string
     */
    public function recuperaRua()
    {
        return $this->rua;
    }

    /**
     * @return string
     */
    public function recuperaBairro()
    {
        return $this->bairro;
    }

    /**
     * @return string
     */
    public function recuperaCeep()
    {
        return $this->ceep;
    }

    /**
     * @return mixed
     */
    public function recuperaEstado()
    {
        return $this->estado;
    }


}