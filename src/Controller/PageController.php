<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\ApiClientService;
use App\Service\CityService;
use App\Entity\Flat;

class PageController extends AbstractController
{
    /**
     * @Route("/page/{page}/", name="page")
     */
    public function show(string $page, ApiClientService $apiClientService, CityService $cityService, Request $request)
    {
        $page = $apiClientService->findOnePageBySlug($page);

        if (!$page) {
            throw $this->createNotFoundException();
        }

        return $this->render('page/show.html.twig', [
            'page' => $page,
            'type_list' => $apiClientService->getFlatTypes(),
        ]);
    }

    public function recentCities(ApiClientService $apiClientService, $max = 10)
    {
        return $this->render('page/recent_list.html.twig', [
            'pageList' => $apiClientService->getSortPages(),
        ]);
    }

    public function recentChart(ApiClientService $apiClientService, CityService $cityService, string $active, int $max = 8)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flatTypesList = $cityService->getFlatTypes($repository);
        $types = [];

        foreach ($flatTypesList as $flatType) {
            $pageList = $apiClientService->getSortPages();
            $repository = $this->getDoctrine()->getRepository(Flat::class);
            array_push($types, $cityService->addPriceValues($pageList, $repository, $flatType));
        }

        return $this->render('page/recent_chart.html.twig', [
            'types' => $types,
            'activePage' => $active,
        ]);
    }
}