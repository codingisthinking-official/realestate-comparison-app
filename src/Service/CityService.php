<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use JMS\Serializer\SerializerInterface;
use App\Entity\Bill;
use App\Service\ApiClientService;

class CityService
{
    private $entityManager;
    private $serializer;
    private $apiClientService;

    public function __construct(EntityManagerInterface $entityManager, SerializerInterface $serializer, ApiClientService $apiClientService)
    {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
        $this->apiClientService = $apiClientService;
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

    public function createBillsTabByCity(object $city, $repository, string $type): array
    {
        $billTypes = $this->apiClientService->getBillTypes();
        foreach ($billTypes as $billType) {
            $minPrice = 0;
            $sumPrice = 0;
            $quantity = 0;
            $maxPrice = 0;
            $bills = $repository->findBy(['city' => $city->getTitle(), 'flatType' => $type, 'billType' => $billType->getId()]);

            foreach ($bills as $bill) {
                $price = $bill->getValue();
                if ($price >= $maxPrice) {
                    $maxPrice = $price;
                }
                if ($price < $minPrice or $minPrice == 0) {
                    $minPrice = $price;
                }
                $quantity++;
                $sumPrice += $price;
            }

            $billType->minPrice = $minPrice;
            if ($quantity != 0) {
                $billType->avgPrice = $sumPrice / $quantity;
            } else {
                $billType->avgPrice = $sumPrice;
            }
            $billType->maxPrice = $maxPrice;
        }

        return $billTypes;
    }
}