<?php

namespace Zoho\Http;

use Zoho\Contract\FactoryInterface;

class Factory implements FactoryInterface
{
    public function createResponse($xml, $module, $method)
    {
        return new \Zoho\Http\Response($xml, $module, $method);
    }
}