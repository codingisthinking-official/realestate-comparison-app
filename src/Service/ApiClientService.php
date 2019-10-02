<?php

namespace App\Service;

use App\ValueObject\Cms\Page;
use JMS\Serializer\SerializerInterface;
use GuzzleHttp\Client;

class ApiClientService
{
    const KEY_CACHE_PRICE_PARAMETERS = 'cache-price-parameters';
    const KEY_CACHE_TYPES_OF_BUILDING = 'cache-types-of-building';

    protected $serializer;
    protected $client;
    protected $redis;

    public function __construct(
        SerializerInterface $serializer, Client $client, \Predis\Client $redis
    )
    {
        $this->serializer = $serializer;
        $this->client = $client;
        $this->redis = $redis;
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

    public function findOnePageByTitle(string $title)
    {
        $response = $this->client->get('pages/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (pages)');
        }
        $pageList = $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\Page>', 'json');
        foreach ($pageList as $page) {
            if ($page->getTitle() == $title) {
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

    public function getBillTypes()
    {
        $response = $this->client->get('price_parameters/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (price parameters)');
        }

        $billTypes = $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\BillTypes>', 'json');

        return $this->sortByPosition($billTypes);
    }

    public function getPriceParameterBySlug(string $slug)
    {
        if ($this->redis->exists(static::KEY_CACHE_PRICE_PARAMETERS)) {
            $priceParameters = $this->serializer->deserialize(
                $this->redis->get(static::KEY_CACHE_PRICE_PARAMETERS),
                'array<App\ValueObject\Cms\BillTypes>',
                'json'
            );
        } else {
            $response = $this->client->get('price_parameters/');

            if ($response->getStatusCode() != 200) {
                throw new \RuntimeException('Can not connect to the API (price parameters)');
            }

            $this->redis->set(static::KEY_CACHE_PRICE_PARAMETERS, $response->getBody(), 'EX', 3600 * 24);

            $priceParameters = $this->serializer->deserialize(
                $response->getBody(),
                'array<App\ValueObject\Cms\BillTypes>',
                'json'
            );
        }

        foreach ($priceParameters as $billType) {
            if ($billType->getSlug() == $slug) {
                return $billType;
            }
        }

        return null;
    }

    public function findTitleOfBillTypeBySlug(string $slug)
    {
        if ($this->redis->exists(static::KEY_CACHE_PRICE_PARAMETERS)) {
            $priceParameters = $this->serializer->deserialize(
                $this->redis->get(static::KEY_CACHE_PRICE_PARAMETERS),
                'array<App\ValueObject\Cms\BillTypes>',
                'json'
            );
        } else {
            $response = $this->client->get('price_parameters/');

            if ($response->getStatusCode() != 200) {
                throw new \RuntimeException('Can not connect to the API (price parameters)');
            }

            $this->redis->set(static::KEY_CACHE_PRICE_PARAMETERS, $response->getBody(), 'EX', 3600 * 24);

            $priceParameters = $this->serializer->deserialize(
                $response->getBody(),
                'array<App\ValueObject\Cms\BillTypes>',
                'json'
            );
        }

        foreach ($priceParameters as $billType) {
            if ($billType->getSlug() == $slug) {
                return $billType->getTitle();
            }
        }

        return $slug;
    }

    public function findTitleOfFlatTypeById(string $id)
    {
        if ($this->redis->exists(static::KEY_CACHE_TYPES_OF_BUILDING)) {
            $flatTypes = $this->serializer->deserialize(
                $this->redis->get(static::KEY_CACHE_TYPES_OF_BUILDING),
                'array<App\ValueObject\Cms\FlatTypes>',
                'json'
            );
        } else {
            $response = $this->client->get('type_of_buildings/');
            if ($response->getStatusCode() != 200) {
                throw new \RuntimeException('Can not connect to the API (type of buildings)');
            }

            $this->redis->set(static::KEY_CACHE_TYPES_OF_BUILDING, $response->getBody(), 'EX', 3600 * 24);
            $flatTypes = $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\FlatTypes>', 'json');
        }

        foreach ($flatTypes as $flatType) {
            if ($flatType->getId() == $id) {
                return $flatType->getTitle();
            }
        }

        return $id;
    }

    public function getFlatTypes(): array
    {
        $response = $this->client->get('type_of_buildings/');
        if ($response->getStatusCode() != 200) {
            throw new \RuntimeException('Can not connect to the API (type of buildings)');
        }

        $flatTypes = $this->serializer->deserialize($response->getBody(), 'array<App\ValueObject\Cms\FlatTypes>', 'json');

        return $flatTypes;
    }

    public function sortByPosition(array $array): array
    {
        $sortedArray = [];
        $lengthOfArray = sizeof($array);
        for ($x = 0; $x < $lengthOfArray; $x++) {
            $min = 0;
            for ($y = 0; $y < sizeof($array); $y++) {
                if ($array[$min]->getPosition() > $array[$y]->getPosition()) {
                    $min = $y;
                }
            }
            array_push($sortedArray, $array[$min]);
            array_splice($array, $min, 1);
        }

        return $sortedArray;
    }
}
