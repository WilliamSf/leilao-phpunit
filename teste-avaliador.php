<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

$leiao = new Leilao('Fiat 147 0KM');

$maria = new Usuario('Maria');
$joao  = new Usuario('João');

$leiao->recebeLance(new Lance($joao, 2000));
$leiao->recebeLance(new Lance($maria, 2500));

$leiloeiro =  new Avaliador();
$leiloeiro->avalia($leiao);

$maiorValor = $leiloeiro->getMaiorValor();

echo $maiorValor;