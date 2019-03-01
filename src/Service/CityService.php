<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use JMS\Serializer\SerializerInterface;

class CityService
{
    private $entityManager;
    private $serializer;

    public function __construct(EntityManagerInterface $entityManager, SerializerInterface $serializer)
    {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
    }

    public function addPriceValues(array $pageList, $repository, string $type): array
    {
        foreach ($pageList as $page) {
            $minPrice = 0;
            $sumPrice = 0;
            $quantity = 0;
            $maxPrice = 0;
            $flatList = $repository->findBy(['city' => $page->getTitle(), 'type' => $type]);

            foreach ($flatList as $flat) {
                $pricePerSquareMeter = ($flat->getCost()) / ($flat->getSurface());
                if ($pricePerSquareMeter >= $maxPrice) {
                    $maxPrice = $pricePerSquareMeter;
                }
                if ($pricePerSquareMeter < $minPrice or $minPrice == 0) {
                    $minPrice = $pricePerSquareMeter;
                }
                $quantity++;
                $sumPrice += $pricePerSquareMeter;
            }

            $page->minPrice = $minPrice;
            if ($quantity != 0) {
                $page->avgPrice = $sumPrice / $quantity;
            } else {
                $page->avgPrice = $sumPrice;
            }
            $page->maxPrice = $maxPrice;
        }

        return $pageList;
    }

    public function getFlatTypes($repository): array
    {
        $flatTypes = [];
        $flatList = $repository->findAll();

        foreach ($flatList as $flat) {
            $isUnique = true;
            foreach ($flatTypes as $type) {
                if ($type == $flat->getType()) {
                    $isUnique = false;
                }
            }
            if ($isUnique == true) {
                array_push($flatTypes, $flat->getType());
            }
        }

        return $flatTypes;
    }

    public function getCityByPostcode(string $code): string
    {
        $response = file_get_contents('postcode.json');
        $postcodeList = $this->serializer->deserialize($response, 'array<App\ValueObject\Cms\Postcode>', 'json');
        foreach ($postcodeList as $postcode) {
            if ($postcode->getPostcode() == $code) {
                return $postcode->getCity();
            }
        }
        return $code;
    }

}