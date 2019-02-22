<?php

namespace App\Service;

use JMS\Serializer\SerializerInterface;
use GuzzleHttp\Client;

class ApiClientService
{
    protected $serializer;
    protected $client;

    public function __construct(SerializerInterface $serializer, Client $client)
    {
        $this->serializer = $serializer;
        $this->client = $client;
    }

    public function getPages(): array
    {
        $response = $this->client->get('pages/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (pages)');
        }
        return $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\Page>', 'json');
    }

    public function getSortPages(): array
    {
        $response = $this->client->get('pages/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (pages)');
        }

        return $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\Page>', 'json');
    }

    public function getWordings(): array
    {
        $response = $this->client->get('wording/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (pages)');
        }
        return $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\Wording>', 'json');
    }

    public function findOneBySlug(string $slug)
    {
        $response = $this->client->get('pages/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (pages)');
        }
        $pageList = $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\Page>', 'json');
        foreach ($pageList as $page) {
            if ($page->getSlug() == $slug) {
                return $page;
            }
        }
    }

    public function findWordingByKey(string $key)
    {
        $wordingList = $this->getWordings();
        foreach ($wordingList as $wording) {
            if ($key == $wording->getTitle()) {
                return $wording;
            }
        }
    }
}