<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor;

    public function avalia(Leilao $leiao): void
    {
        $lances = $leiao->getLances();
        $ultimoLance = $lances[count($lances) - 1];
        $this->maiorValor = $ultimoLance->getValor();
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }
}
