<?php

namespace Zoho;

use Zoho\Contract\HttpClientInterface;
use Zoho\Contract\FactoryInterface;
use Zoho\Http\HttpClient;
use Zoho\Http\Factory;

class Zoho
{
	/**
     * Token used for session of request
     *
     * @var string
     */
    protected $auth_token;

	/**
     * Format selected for get request
     *
     * @var string
     */
	protected $format;

	/**
     * Module selected for get request
     *
     * @var string
     */
    protected $module;

    /** Base URI for selected domain
     *
     * @var string
     */
    protected $base_uri;

	/**
     * Instance of the factory
     *
     * @var FactoryInterface
     */
    protected $factory;

	/**
     * Instance of the client
     *
     * @var HttpClientInterface
     */
    protected $client;

	/**
     * Construct
     *
     * @param string $auth_token Token for connection
     * @param HttpClientInterface $client HttpClient for connection [optional]
     * @param FactotoryInterface $factory [optional]
     */
    public function __construct($auth_token, $format, $base_uri, HttpClientInterface $client = null, FactoryInterface $factory = null)
    {
        $this->auth_token = $auth_token;
        $this->format = $format;
        $this->client = $client ?: new HttpClient();
        $this->factory = $factory ?: new Factory();
        $this->base_uri = $base_uri;
    }

    /**
     * Set the model
     *
     * @param string $module Module to use
     */
    public function setModule($module)
    {
        $this->module = $module;
    }

    /**
     * Get the current request uri
     *
     * @param string $command Command for get uri
     * @return string
     */
    protected function getRequestURI($command)
    {
        if (empty($this->module)) {
            throw new \RuntimeException('Zoho CRM module is not set.');
        }
        $parts = array($this->base_uri, $this->format, $this->module, $command);
        return implode('/', $parts);
    }

    /**
     * Get the body of the request
     *
     * @param array $params Params
     * @param Object $data Data
     * @return string
     */
    protected function getRequestBody($params, $data, $options)
    {
        $params['scope'] = 'recruitapi';
        $params['authtoken'] = $this->auth_token;
        $params += array('newFormat' => 1); //'version' => 2,
        if (!empty($data)) {
            $params['xmlData'] = (isset($options['map']) && $options['map']) ? $this->toXML($data) : $data;
        }

        if (!isset($params['content'])) {
            return http_build_query($params, '', '&');
        }

        return $params;
    }

    /**
     * Make the call using the client
     *
     * @param string $command Command to call
     * @param string $params Options
     * @param array $data Data to send [optional]
     * @param array $options Options to add for configurations [optional]
     * @return Response
     */
    protected function call($command, $params, $data = array(), $options = array())
    {
        $uri = $this->getRequestURI($command);
        $body = $this->getRequestBody($params, $data, $options);
        $xml = $this->client->post($uri, $body);

        return $this->factory->createResponse($xml, $this->module, $command);
    }

    /**
     * Implements getRecords API method.
     *
     * @param array $params   request parameters
     *                        selectColumns     String  Module(optional columns) i.e, leads(Last Name,Website,Email) OR All
     *                        fromIndex            Integer    Default value 1
     *                        toIndex              Integer    Default value 20
     *                                                  Maximum value 200
     *                        sortColumnString    String    If you use the sortColumnString parameter, by default data is sorted in ascending order.
     *                        sortOrderString      String    Default value - asc
     *                                          if you want to sort in descending order, then you have to pass sortOrderString=desc.
     *                        lastModifiedTime    DateTime    Default value: null
     *                                          If you specify the time, modified data will be fetched after the configured time.
     *                        newFormat         Integer    1 (default) - exclude fields with null values in the response
     *                                                  2 - include fields with null values in the response
     *                        version           Integer    1 (default) - use earlier API implementation
     *                                                  2 - use latest API implementation
     * @param array $options Options to add for configurations [optional]
     * @return Response The Response object
     */
    public function getRecords($params = array(), $options = array())
    {
        return $this->call('getRecords', $params);
    }

    /**
     * Implements insertRecords API method.
     *
     * @param array $data     xmlData represented as an array
     *                        array will be converted into XML before sending the request
     * @param array $params   request parameters
     *                        wfTrigger          Boolean    Set value as true to trigger the workflow rule
     *                                          while inserting record into CRM account. By default, this parameter is false.
     *                        duplicateCheck    Integer    Set value as "1" to check the duplicate records and throw an
     *                                                error response or "2" to check the duplicate records, if exists, update the same.
     *                        isApproval        Boolean    By default, records are inserted directly . To keep the records in approval mode,
     *                                                set value as true. You can use this parameters for Leads, Contacts, and Cases module.
     *                        newFormat       Integer    1 (default) - exclude fields with null values in the response
     *                                                2 - include fields with null values in the response
     *                        version         Integer    1 (default) - use earlier API implementation
     *                                                2 - use latest API implementation
     *                                                4 - enable duplicate check functionality for multiple records.
     *                                                It's recommended to use version 4 for inserting multiple records
     *                                                even when duplicate check is turned off.
     *
     * @param array $options Options to add for configurations [optional]
     * @return Response The Response object
     * @todo
    - Make default value for duplicateCheck configurable
     */
    public function insertRecords($data, $params = array(), $options = array())
    {
        // if (!isset($params['duplicateCheck'])) {
        //     $params['duplicateCheck'] = 1;
        // }
        if (!isset($params['version']) && isset($data['records']) && count($data['records']) > 1) {
            $params['version'] = 4;
        }

        return $this->call('insertRecords', $params, $data, $options);
    }
}
