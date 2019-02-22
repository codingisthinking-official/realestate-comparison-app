<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ApiClientService;

class CityController extends AbstractController
{
    /**
     * @Route("/city/{city}/", name="city")
     */
    public function show(string $city, ApiClientService $apiClientService)
    {
        $city = $apiClientService->findOneBySlug($city);

        if (!$city) {
            throw $this->createNotFoundException();
        }

        return $this->render('city/show.html.twig', [
            'city' => $city,
        ]);
    }

    public function recentCities(ApiClientService $apiClientService, $max = 10)
    {
        $cityList = $apiClientService->getSortPages();

        return $this->render('city/recent_list.html.twig', [
            'cityList' => $cityList,
        ]);
    }

    public function recentChart(ApiClientService $apiClientService, string $active, int $max = 8)
    {
        $cityList = $apiClientService->getSortPages();

        return $this->render('city/recent_chart.html.twig', [
            'cityList' => $cityList,
            'activeCity' => $active,
        ]);
    }
}