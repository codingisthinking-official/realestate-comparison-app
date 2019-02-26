<?php

namespace App\Service;

use JMS\Serializer\SerializerInterface;
use GuzzleHttp\Client;

class PageService
{
    public function addPriceValues($pageList, $repository): array
    {
        foreach ($pageList as $page) {
            $minPrice=0;
            $sumPrice=0;
            $quantity=0;
            $maxPrice=0;
            $flatList = $repository->findBy(['city' => $page->getTitle()]);

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
}