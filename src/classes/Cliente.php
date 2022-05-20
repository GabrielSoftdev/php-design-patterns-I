<?php

namespace Alura\Classes;

class Cliente
{
    private string $nome;
    private CPF $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = new CPF($cpf);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCPF(): string
    {
        return $this->cpf->getNumero();
    }
}
