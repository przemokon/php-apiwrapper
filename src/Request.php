<?php

namespace Prz\Apiwrapper;

use GuzzleHttp\Client;

class Request
{
    private $client;

    private $baseUrl;

    private $response;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = 'https://jsonplaceholder.typicode.com';
        $this->response = new Response();
    }

    public function get(string $endpoint, array $options = [])
    {
        $request = $this->request('get', $this->baseUrl . '/' . $endpoint, $options);

        return $this->response->toJson($request);
    }

    public function request(string $method, string $endpoint, array $options = [])
    {
        return $this->client->request($method, $endpoint, $options);
    }
}
