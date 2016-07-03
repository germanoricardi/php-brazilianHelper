<?php

/**
 * @author Germano Ricardi <germanoricardi7@gmail.com>
 */

namespace germanoricardi\helpers;

/*
 * To use it is very easy, see examples:
 * BrazilianHelper::states(); Return array with all states
 * echo BrazilianHelper::states($string); Return string with state name if exists
 * echo BrazilianHelper::asCep($string); Return string formatted || NULL if number of characters is greater than 8
 * echo BrazilianHelper::asCnpj($string); Return string formatted || NULL if number of characters is greater than 14
 * echo BrazilianHelper::asCpf($string); Return string formatted || NULL if number of characters is greater than 11
 */

class BrazilianHelper {

	/**
	 * @var array Private with states
	 */
	private static $states = [
		'AC' => 'Acre',
		'AL' => 'Alagoas',
		'AP' => 'Amapá',
		'AM' => 'Amazonas',
		'BA' => 'Bahia',
		'CE' => 'Ceará',
		'DF' => 'Distrito Federal',
		'ES' => 'Espírito Santo',
		'GO' => 'Goiás',
		'MA' => 'Maranhão',
		'MT' => 'Mato Grosso',
		'MS' => 'Mato Grosso do Sul',
		'MG' => 'Minas Gerais',
		'PA' => 'Pará',
		'PB' => 'Paraíba',
		'PR' => 'Paraná',
		'PE' => 'Pernambuco',
		'PI' => 'Piauí',
		'RJ' => 'Rio de Janeiro',
		'RN' => 'Rio Grande do Norte',
		'RS' => 'Rio Grande do Sul',
		'RO' => 'Rondônia',
		'RR' => 'Roraima',
		'SC' => 'Santa Catarina',
		'SP' => 'São Paulo',
		'SE' => 'Sergipe',
		'TO' => 'Tocantins'
	];

	/**
	 * @var string $state if provided is used to return the state name.
	 * @return mixed Array || String || NULL
	 */
	public function states($state = NULL)
	{
		if(! is_null($state))
		{
			return self::States()[$state];
		}

		return self::$states;
	}

	/**
	 * @var string $cep
	 * @return mixed String formatted as 00000-000 || NULL
	 */
	public function asCep($cep)
	{
		$numbers = self::onlyNumbers($cep);
		
		if(strlen($numbers) == 8)
			return preg_replace('/^(\d{5})(\d{3})$/', '${1}-${2}', self::onlyNumbers($numbers));

		return NULL;
	}

	/**
	 * @var string $cnpj
	 * @return mixed String formatted as 00.000.000/0000-00 || NULL
	 */
	public function asCnpj($cnpj)
	{
		$numbers = self::onlyNumbers($cnpj);
		
		if(strlen($numbers) == 14)
			return preg_replace('/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/', '${1}.${2}.${3}/${4}-${5}', self::onlyNumbers($numbers));

		return NULL;
	}

	/**
	 * @var string $cpf
	 * @return mixed String formatted as 000.000.000-00 || NULL
	 */
	public function asCpf($cpf)
	{
		$numbers = self::onlyNumbers($cpf);
		
		if(strlen($numbers) == 11)
			return preg_replace('/^(\d{3})(\d{3})(\d{3})(\d{2})$/', '${1}.${2}.${3}-${4}', self::onlyNumbers($numbers));

		return NULL;
	}

	/**
	 * @var string $toClean
	 * @return integer
	 */
	private static function onlyNumbers($toClean)
	{
		return preg_replace('/[^0-9]/', '', $toClean);
	}
}