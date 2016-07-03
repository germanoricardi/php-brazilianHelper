[![Latest Stable Version](https://poser.pugx.org/germanoricardi/brazilian-helper/v/stable)](https://packagist.org/packages/germanoricardi/brazilian-helper) [![Total Downloads](https://poser.pugx.org/germanoricardi/brazilian-helper/downloads)](https://packagist.org/packages/germanoricardi/brazilian-helper) [![Latest Unstable Version](https://poser.pugx.org/germanoricardi/brazilian-helper/v/unstable)](https://packagist.org/packages/germanoricardi/brazilian-helper) [![License](https://poser.pugx.org/germanoricardi/brazilian-helper/license)](https://packagist.org/packages/germanoricardi/brazilian-helper)

# brazilian-helper
Classe com estados brasileiros (sigla e nome), formatação de CEP, CNPJ e CPF;

## Recursos
 - Estados brasileiros com sigla e nome: Exemplo: ['MT' => 'Mato Grosso'];
 - Formata qualquer string e inteiro para CEP, CNPJ e CPF;

## Instalação

A maneira recomendada para instalar esta extensão é através do [composer](http://getcomposer.org/download/).

### Instalando

Rode o comando abaixo no terminal

```
$ php composer require germanoricardi/brazilian-helper "*"
```

ou adicione a linha abaixo

```
"germanoricardi/brazilian-helper": "*"
```

na sessão ```require``` do seu arquivo `composer.json`.

## Como utilizar

```ssh
use germanoricardi\helpers\BrazilianHelper;

BrazilianHelper::states(); 
Retorna um array com todos os estados. [['MT' => 'Mato Grosso'], ['MS' => 'Mato Grosso do Sul'], ...];
 
echo BrazilianHelper::states($string); 
Retorna o nome do estado se o parâmetro passado for uma UF válida;

echo BrazilianHelper::asCep($string); 
Retorna string formatada no padrão 00000-000 || Retorna NULL se o número de caracteres inteiros for maior que 8;
 
echo BrazilianHelper::asCnpj($string); 
Retorna string formatada no padrão 00.000.000/0000-00 || Retorna NULL se o número de caracteres inteiros for maior que 14;
 
echo BrazilianHelper::asCpf($string); 
Retorna string formatada no padrão 000.000.000-00 || Retorna NULL se o número de caracteres inteiros for maior que 11;
```

Licença
----

[![License](https://poser.pugx.org/germanoricardi/brazilian-helper/license)](https://packagist.org/packages/germanoricardi/brazilian-helper)