<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use JMS\Serializer\SerializerInterface;
use App\Entity\Flat;
use App\Entity\Postcode;

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
            $flatList = $repository->findBy(['city' => $page->getTitle(), 'type' => $type, 'state' => 1]);

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
        $postcode = $this->entityManager->getRepository(Postcode::class)->findOneBy(['postcode' => $code]);

        return $postcode ->getCity();
    }

    public function createBillsTabByCity(object $city, $repository, string $type): array
    {
        $billTypes = $this->apiClientService->getBillTypes();

        foreach ($billTypes as $billType) {
            if ($billType->getType() == 'chart') {
                $minPrice = 0;
                $sumPrice = 0;
                $quantity = 0;
                $maxPrice = 0;

                $bills = $repository->findBy([
                    'city' => $city->getTitle(),
                    'flatType' => $type,
                    'billType' => $billType->getSlug()
                ]);

                foreach ($bills as $bill) {
                    $flat = $this->entityManager->getRepository(Flat::class)->findOneBy([
                        'uuid' => $bill->getUuid()
                    ]);
                    if ($flat->getState() == 1) {
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
                }

                $billType->setMinPrice($minPrice);

                if ($quantity != 0) {
                    $billType->setAvgPrice($sumPrice / $quantity);
                } else {
                    $billType->setAvgPrice($sumPrice);
                }

                $billType->setMaxPrice($maxPrice);
            }
        }

        return $billTypes;
    }
}