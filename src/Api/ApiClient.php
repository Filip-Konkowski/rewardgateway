<?php

namespace App\Api;


use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class ApiClient
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var array
     */
    private $authentication;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @param string $user
     * @param string $password
     */
    public function __construct(string $user, string $password)
    {
        $this->client = new Client();
        $this->authentication = [$user, $password];
        $this->baseUri = 'http://hiring.rewardgateway.net/';
    }

    /**
     * @param string $uri
     * @return ResponseInterface
     */
    public function get(string $uri): ResponseInterface
    {
        return $this->client->get($this->baseUri . $uri, ['auth' => $this->authentication]);
    }

}