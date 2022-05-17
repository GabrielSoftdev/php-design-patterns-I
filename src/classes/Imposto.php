<?php

namespace Alura\Classes;

abstract class Imposto
{
    public abstract static function calcular(Orcamento $orcamento): float;
}
