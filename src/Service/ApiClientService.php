<?php

namespace App\Service;

use App\ValueObject\Cms\Page;
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

        $sortedPages = [];
        $response = $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\Page>', 'json');
        for ($x = 0; $x < sizeOf($response); $x++) {
            if ($response[$x]->getPosition()) {
                $sortedPages[$response[$x]->getPosition()] = $response[$x];
            }
        }

        return $sortedPages;
    }

    public function getOneCityByTitle($city): object
    {
        $response = $this->client->get('pages/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (pages)');
        }

        $response = $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\Page>', 'json');
        for ($x = 0; $x < sizeOf($response); $x++) {
            if ($response[$x]->getTitle() == $city) {
                return $response[$x];
            }
        }
        $page = new Page();
        $page = $page->setTitle($city);

        return $page;
    }

    public function getWordings(): array
    {
        $response = $this->client->get('wording/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (wording)');
        }
        return $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\Wording>', 'json');
    }

    public function findOnePageBySlug(string $slug)
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

    public function getBillTypes(): array
    {
        $response = file_get_contents('bill_types.json');
        $billTypes = $this->serializer->deserialize($response, 'array<App\ValueObject\Cms\BillTypes>', 'json');

        return $billTypes;
    }
}