<?php

namespace src\doctrine\Entity;

/**
 * @Entity
 */

abstract class  Pessoa
{
    /**
     * @Id
     * @GeneratedValue
     *@column (type="integer")
     */
    private int $id;
    /**
     * @column (type="string")
     */
    private string $nome;
    /**
     * @column (type="string")
     */
    private string $sobrenome;
    /**
     * @column (type="string")
     */
    private string $rg;
    /**
     * @column (type="string")
     */
    private string $cpf;
    /**
     * @var Endereco
     */
    private Endereco $endereco;

    public function __construct($nome, $sobrenome, $cpf, $rg, Endereco $endereco)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->rg = $rg;

        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($cpf === false) {
            echo 'CPF inválido.';
            exit();
        }

        $this->cpf = $cpf;
        $this->endereco = $endereco;

        self::$numeroDePessoas++;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        self::$numeroDePessoas--;
    }

    /**
     * @return string
     */
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function recuperaSobrenome(): string
    {
        return $this->sobrenome;
    }

    /**
     * @return string
     */
    public function recuperaRg(): string
    {
        return $this->rg;
    }

    /**
     * @return string
     */
    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

}