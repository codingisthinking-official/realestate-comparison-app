<?php

namespace App\Service;

use JMS\Serializer\SerializerInterface;
use GuzzleHttp\Client;
use Doctrine\ORM\EntityManagerInterface;

class PageService
{
    private  $entityManager;

    public function __construct(EntityManagerInterface $em) {
        $this->entityManager = $em;
    }

    public function addPriceValues($pageList, $repository, $type): array
    {
        foreach ($pageList as $page) {
            $minPrice=0;
            $sumPrice=0;
            $quantity=0;
            $maxPrice=0;
            $flatList = $repository->findBy(['city' => $page->getTitle(),'type' => $type]);

            foreach ($flatList as $flat){
                $pricePerSquareMeter = ($flat->getCost())/($flat->getSurface());
                if($pricePerSquareMeter>=$maxPrice) {
                    $maxPrice = $pricePerSquareMeter;
                }
                if($pricePerSquareMeter<$minPrice or $minPrice==0) {
                    $minPrice = $pricePerSquareMeter;
                }
                $quantity++;
                $sumPrice+=$pricePerSquareMeter;
            }

            $page->minPrice = $minPrice;
            $page->avgPrice = $sumPrice/$quantity;
            $page->maxPrice = $maxPrice;
        }
        return $pageList;
    }

    public function getFlatTypes($repository): array
    {
        $flatTypes = array();
        $flatList = $repository->findAll();

        foreach ($flatList as $flat) {
            $isUnique=0;
            foreach ($flatTypes as $type) {
                if($type==$flat->getType()){
                    $isUnique++;
                }
            }
            if($isUnique==0){
                array_push($flatTypes, $flat->getType());
            }
        }

        return $flatTypes;
    }
}