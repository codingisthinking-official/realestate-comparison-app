<?php

namespace App\Service;

use JMS\Serializer\SerializerInterface;
use GuzzleHttp\Client;


class ApiClientService
{
    protected $apiUrl;
    protected $serializer;
    protected $client;

    public function __construct(SerializerInterface $serializer, $apiUrl)
    {
        $this->serializer = $serializer;
        $this->client = new Client(['base_uri' => 'http://realestate.wiseweb.pl/api/']);
        $this->apiUrl = $apiUrl;
    }

    public function getPages(): array
    {
        // $response = file_get_contents('http://realestate.wiseweb.pl/api/pages/');
        $response = $this->client->request('GET', 'pages/');
        $response = $response->getBody();
        return $this->serializer->deserialize($response, 'array<App\ValueObject\Cms\Page>', 'json');
    }

    public function getWordings(): array
    {
        // $response = file_get_contents('http://realestate.wiseweb.pl/api/wording/');
        $response = $this->client->request('GET', 'wording/');
        $response = $response->getBody();
        return $this->serializer->deserialize($response, 'array<App\ValueObject\Cms\Wording>', 'json');
    }
}