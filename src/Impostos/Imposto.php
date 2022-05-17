<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

enum Imposto
{
    case ISS;
    case ICMS;

    public function valorImpostoCalculado(Orcamento $orcamento): float
    {
        return match ($this) {
            Imposto::ISS => $orcamento->valor * 0.01,
            Imposto::ICMS => $orcamento->valor * 0.06,
        };
    }
}
