<?php

namespace Zoho;

use Zoho\Zoho;
use Zoho\Contract\HttpClientInterface;
use Zoho\Contract\FactoryInterface;

class ZohoRecruit extends Zoho
{
	public function __construct($auth_token, $format = 'xml', $base_uri = 'https://recruit.zoho.com/recruit/private', HttpClientInterface $client = null, FactoryInterface $factory = null)
	{
		parent::__construct($auth_token, $format, $base_uri, $client, $factory);
	}
}