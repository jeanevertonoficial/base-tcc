<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 */
class Endereco
{
    /**
     * @Id
     * @GeneratedValue
     *@column (type="integer")
     */
    private $Id;
    /**
     * @column (type="string")
     */
    private string $numero;
    /**
     * @column (type="string")
     */
    private string $cidade;
    /**
     * @column (type="string")
     */
    private string $rua;
    /**
     * @column (type="string")
     */
    private string $bairro;
    /**
     * @column (type="string")
     */
    private string $estado;
    /**
     * @column (type="string")
     */
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

    public function recuperaNumero()
    {
        return $this->numero;
    }

    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function recuperaRua()
    {
        return $this->rua;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function recuperaCeep()
    {
        return $this->ceep;
    }

    public function recuperaEstado()
    {
        return $this->estado;
    }


}