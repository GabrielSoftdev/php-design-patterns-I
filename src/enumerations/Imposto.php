<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

enum Imposto
{
    case ISS;
    case ICMS;

    public function porcentual(): float
    {
        return match ($this) {
            Imposto::ISS => 0.01,
            Imposto::ICMS =>  0.06,
        };
    }
}
