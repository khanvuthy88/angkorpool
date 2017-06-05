<?php

namespace Zoho\Contract;

interface FactoryInterface
{

    /**
     * Creates Response object
     *
     */
    function createResponse($xml, $module, $method);

}