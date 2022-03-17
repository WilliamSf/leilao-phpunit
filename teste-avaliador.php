<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

/**
 * Padrão Arrange-Act-Assert
 * @link http://wiki.c2.com/?ArrangeActAssert
 * 
 * Padrão Given-When-Then
 * @link https://martinfowler.com/bliki/GivenWhenThen.html
*/

// Arrange - Given / Preparamos o cenário do teste
$leiao = new Leilao('Fiat 147 0KM');

$maria = new Usuario('Maria');
$joao  = new Usuario('João');

$leiao->recebeLance(new Lance($joao, 2000));
$leiao->recebeLance(new Lance($maria, 2500));

// Act - When / Executamos o código a ser testado
$leiloeiro =  new Avaliador();
$leiloeiro->avalia($leiao);

// Assert - Then / Verificamos se a saída é a esperada
$valorEsperado = 2500;
$maiorValor = $leiloeiro->getMaiorValor();

if ($valorEsperado == $maiorValor) {
    echo 'Teste ok';
} else {
    echo 'Resultado não esperado';
}