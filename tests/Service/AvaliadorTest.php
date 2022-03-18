<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use PHPUnit\Framework\TestCase;
use Alura\Leilao\Service\Avaliador;

class AvaliadorTest extends TestCase
{
    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente()
    {
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

        self::assertEquals($valorEsperado, $maiorValor);
    }

    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDecrescente()
    {
        // Arrange - Given / Preparamos o cenário do teste
        $leilao = new Leilao('Fiat 147 0km');

        $maria = new Usuario('Maria');
        $joao = new Usuario('Joao');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();

        // Act - When / Executamos o código a ser testado
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        // Assert - Then / Verificamos se a saída é a esperada
        $valorEsperado = 2500;

        self::assertEquals($valorEsperado, $maiorValor);
    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemDecrescente()
    {
        // Arrange - Given / Preparamos o cenário do teste
        $leilao = new Leilao('Fiat 147 0km');

        $maria = new Usuario('Maria');
        $joao = new Usuario('Joao');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));


        $leiloeiro = new Avaliador();

        // Act - When / Executamos o código a ser testado
        $leiloeiro->avalia($leilao);

        $valorEsperado = 2000;
        $menorValor = $leiloeiro->getMenorValor();

        // Assert - Then / Verificamos se a saída é a esperada
        self::assertEquals($valorEsperado, $menorValor);
    }

    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemCrescente()
    {
        // Arrange - Given / Preparamos o cenário do teste
        $leilao = new Leilao('Fiat 147 0km');

        $maria = new Usuario('Maria');
        $joao = new Usuario('Joao');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();

        // Act - When / Executamos o código a ser testado
        $leiloeiro->avalia($leilao);

        $valorEsperado = 2000;
        $menorValor = $leiloeiro->getMenorValor();

        // Assert - Then / Verificamos se a saída é a esperada
        self::assertEquals($valorEsperado, $menorValor);
    }
}