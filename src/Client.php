<?php
/**
 * Created by PhpStorm.
 * User: patrik
 * Date: 2018-10-31
 * Time: 15:22
 */

namespace patrikpihlstrom\Tempo;

class Client extends \GuzzleHttp\Client
{
	public function __construct(array $config = [])
	{
		if ($config == [])
		{
			$config = include __DIR__ . '/../api.php';
		}
		parent::__construct($config);
	}

	/**
	 * @param $parameters
	 * @return \Psr\Http\Message\ResponseInterface
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getWorklogs($parameters)
	{
		return $this->request('GET', 'worklogs?' . http_build_query($parameters));
	}
}
