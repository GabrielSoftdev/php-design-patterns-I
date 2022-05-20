<?php

namespace Alura\Classes;

abstract class Imposto
{
    protected abstract static function calcular(Orcamento $orcamento): float;
}
