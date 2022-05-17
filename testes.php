<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Classes\Orcamento;
use Alura\DesignPattern\Impostos\Imposto;

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
