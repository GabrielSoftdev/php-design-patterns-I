<?php

namespace Alura\App\Enumenations;

use Alura\Classes\Impostos\ICMS;
use Alura\Classes\Impostos\ICPP;
use Alura\Classes\Impostos\IKCV;
use Alura\Classes\Impostos\Imposto as Impostos;
use Alura\Classes\Impostos\ISS;
use Alura\Classes\Orcamento;

/**
 * O padrão "Template Method" foi aplicado aos tipos ICCP e IKCV. 
 * Pois se assemelhavam em sua lógica de cálculo de imposto que se baseiam em 
 * valores e/ou quantidade de itens para aplicação de taxa máxima ou mínima.
 * 
 * Antes: 
 * return match ($this) {
 *     Imposto::ISS => $orcamento->valor * 0.01,
 *     Imposto::ICMS =>  $orcamento->valor * .06,
 *     Imposto::ICPP =>  $orcamento->valor * ($orcamento->valor > 500) ? 0.03 : 0.02,
 *     Imposto::ICMS =>  $orcamento->valor * ($orcamento->valor > 300 &&  $orcamento->quantidadeItens > 3) ?  0.04 : 0.025
 * }
 * 
 */

enum Imposto
{
    case ISS;
    case ICMS;
    case ICPP;
    case IKCV;

    public function calcularImposto(Orcamento $orcamento): float
    {
        return match ($this) {
            Imposto::ISS => ISS::calcular($orcamento),
            Imposto::ICMS =>  ICMS::calcular($orcamento),
            Imposto::ICPP => ICPP::calcular($orcamento),
            Imposto::IKCV =>  IKCV::calcular($orcamento),
        };
    }
}
