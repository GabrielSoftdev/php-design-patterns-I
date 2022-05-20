<?php

namespace Alura\Classes;

use Exception;

class CPF
{

    public ?string $numero;

    public function __construct(string $value)
    {
        try {
            $value =  $this->validaCPF($value);
            $this->numero = $value;
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
            exit();
        }
    }

    private function validaCPF($value)
    {
        $value = preg_replace('/[^0-9]/i', '', $value);

        if (strlen($value) !== 11)
            throw new Exception('CPF inválido');

        return $value;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }
}
