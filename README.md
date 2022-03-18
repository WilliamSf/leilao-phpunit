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

* Começa com o nome da classe que está sendo testada e usa o sufixo Test, por exemplo: AvaliadorTest, em geral ClasseASerTestadaTest
* A classe de teste deve estender a classe TestCase
* O método de teste deve começar com test
* O método de teste deve ter um nome que diz o que estamos testando

## Formas de sabermos o que testar e quando parar

* Análise de valores de fronteira: Utilizando esta técnica, além de identificar as classes de equivalência, testamos os valores exatamente na borda de cada uma delas. Você pode conferir mais detalhes neste [link](https://testwarequality.blogspot.com/p/tenicas-de-teste.html), sob o título "Análise de valor limite".
* Classes de equivalência: Podemos identificar classes de equivalência para entender quais dados deverão ser utilizados para montar os cenários de teste. Você pode conferir mais detalhes neste [link](https://testwarequality.blogspot.com/p/tenicas-de-teste.html), sob o título "Particionamento de Equivalência".