<?php

use Alura\Classes\CalculadoraDeDescontos;
use Alura\Classes\Orcamento;

require 'vendor/autoload.php';

// $calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, Imposto::ICMS);

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 5;
$orcamento->valor = 650;

$calculadora->calculaDescontos($orcamento);
