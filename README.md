# leilao-phpunit

Curso de PHP  e TDD: testes com PHPUnit

## Comando para rodar PHPUnit

``` bash
vendor/bin/phpunit --colors tests
```

## Assertions

``` link
https://phpunit.readthedocs.io/en/8.5/assertions.html
```

## Uma classe de teste segue algumas regras

* Começa com o nome da classe que está sendo testada e usa o sufixo Test, por exemplo: AvaliadorTest, em geral ```ClasseASerTestadaTest```
* A classe de teste deve estender a classe TestCase
* O método de teste deve começar com ```test```
* O método de teste deve ter um nome que diz o que estamos testando

## Formas de sabermos o que testar e quando parar

* Análise de valores de fronteira: Utilizando esta técnica, além de identificar as classes de equivalência, testamos os valores exatamente na borda de cada uma delas. Você pode conferir mais detalhes neste [link](https://testwarequality.blogspot.com/p/tenicas-de-teste.html), sob o título "Análise de valor limite".
* Classes de equivalência: Podemos identificar classes de equivalência para entender quais dados deverão ser utilizados para montar os cenários de teste. Você pode conferir mais detalhes neste [link](https://testwarequality.blogspot.com/p/tenicas-de-teste.html), sob o título "Particionamento de Equivalência".

## Para executar código antes ou depois de testes, o PHPUnit nos fornece as fixtures. São métodos que vão ser executados em momentos específicos

* ```public static function setUpBeforeClass(): void``` - Método executado uma vez só, antes de todos os testes da classe
* ```public function setUp(): void``` - Método executado antes de cada teste da classe
* ```public function tearDown(): void``` - Método executado após cada teste da classe
* ```public static function tearDownAfterClass(): void``` - Método executado uma vez só, após todos os testes da classe

## Configuração XML phpunit

[Link da documentação](https://phpunit.readthedocs.io/pt_BR/latest/configuration.html)

## TDD (Test Driven Development), ou desenvolvimento guiado a testes

Um material sobre o assunto pode ser encontrado nesta [página](https://tdd.caelum.com.br/) da Caelum.
Livro: [Test-Driven Development](https://www.casadocodigo.com.br/pages/sumario-tdd-php)
