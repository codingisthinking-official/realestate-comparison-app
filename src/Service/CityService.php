<?php

namespace App\Service;

use App\ValueObject\Cms\BillTypes;
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

    public function calculateAverageValueForCityAndTypeAndSlug($repository, string $city, string $type, string $slug)
    {
        $results = array_map(function($result) {
            return $result->getValue();
        }, $repository->findBy(['city' => $city, 'flatType' => $type, 'billType' => $slug,]));

        if (count($results) === 0) {
            return false;
        }

        return array_sum($results) / count($results);
    }

    public function addPriceValuesByZipCode(string $postcode, $repository, string $type)
    {
        $minPrice = 0;
        $sumPrice = 0;
        $quantity = 0;
        $maxPrice = 0;

        $flatList = $repository->findBy(['postcode' => $postcode, 'type' => $type, 'state' => 1]);

        if (count($flatList) < 20) {
            return false;
        }

        $page = new \stdClass();
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

        return [$page];
    }

    public function addPriceValues(array $pageList, $repository, string $type): array
    {
        foreach ($pageList as $page) {
            $minPrice = 0;
            $sumPrice = 0;
            $quantity = 0;
            $maxPrice = 0;
            $flatList = $repository->findBy(['city' => $page->getTitle(), 'type' => $type, 'state' => 1]);

            if (count($flatList) < 20) {
                $flatList = $repository->findBy(['type' => $type, 'state' => 1]);
            }

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

        return $postcode->getCity();
    }

    public function createBillsTabByCity(object $city, $repository, string $type): array
    {
        $billTypes = $this->apiClientService->getBillTypes();

        /** @var BillTypes $billType */
        foreach ($billTypes as $billType) {
            if ($billType->getType() == 'text' && $billType->getAutocomplete()) {
                $bills = $repository->findBy([
                    'city' => $city->getTitle(),
                    'flatType' => $type,
                    'billType' => $billType->getSlug()
                ]);

                $values = array_unique(array_map(function($val) {
                    return $val->getValue();
                }, $bills));

                $billType->setAutoCompleteOptions($values);
            }
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

                if (count($bills) < 20) {
                    $bills = $repository->findBy([
                        'flatType' => $type,
                        'billType' => $billType->getSlug()
                    ]);
                }

                $billType->setAutoCompleteOptions(['test', '123']);

                foreach ($bills as $bill) {
                    $flat = $this->entityManager->getRepository(Flat::class)->findOneBy([
                        'uuid' => $bill->getUuid(),
                        'state' => 1,
                    ]);

                    if (!$flat) {
                        continue;
                    }

                    $price = (float) str_replace(',', '.', $bill->getValue());
                    if ($price >= $maxPrice) {
                        $maxPrice = $price;
                    }
                    if ($price < $minPrice or $minPrice == 0) {
                        $minPrice = $price;
                    }
                    $quantity++;
                    $sumPrice += $price;
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
