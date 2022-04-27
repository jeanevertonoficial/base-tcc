<?php

namespace src\doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 */

abstract class  Pessoa
{
    /**
     * @Id
     * @GeneratedValue
     * @column (type="integer")
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
     * @OneToMany(targetEntity="Endereco", mappedBy="Pessoa")
     */
    private Endereco $endereco;
    /**
     * @var Contato
     *
     * @ManyToMany(targetEntity="Contato", mappedBy="Pessoa", cascade={"remove", "persist"}, fetch="EAGER")
     */
    private Contato $contato;

    public function __construct($nome, $sobrenome, $cpf, $rg, Endereco $endereco, Contato $contato)
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
        $this->contato = new ArrayCollection();
        $this->endereco = new ArrayCollection();
    }

    public function addContato(Contato $contato)
    {
        $this->contato->add($contato);
        $contato->setPessoa($this);

        return $this;
    }

    /**
     * @return Contato[]
     */
    public function getConato(): Collection
    {
        return $this->contato;
    }

    public function addEndereco(Endereco $endereco): self
    {
        if ($this->endereco->contains($endereco)) {
            return $this;
        }

        $this->endereco->add($endereco);
        $endereco->addPessoa($this);

        return $this;
    }

    /**
     * @return Endereco[]
     */
    public function getEndereco(): Collection
    {
        return $this->endereco;
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