<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ApiClientService;
use App\Service\PageService;
use App\Entity\Flat;

class PageController extends AbstractController
{
    /**
     * @Route("/page/{page}/", name="page")
     */
    public function show(string $page, ApiClientService $apiClientService, PageService $pageService)
    {
        $page = $apiClientService->findOnePageBySlug($page);

        if (!$page) {
            throw $this->createNotFoundException();
        }

        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flatTypesList = $pageService->getFlatTypes($repository);

        return $this->render('page/show.html.twig', [
            'page' => $page,
            'typeList' => $flatTypesList,
        ]);
    }

    public function recentCities(ApiClientService $apiClientService, $max = 10)
    {
        $pageList = $apiClientService->getSortPages();

        return $this->render('page/recent_list.html.twig', [
            'pageList' => $pageList,
        ]);
    }

    public function recentChart(ApiClientService $apiClientService, PageService $pageService, string $active, int $max = 8)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flatTypesList = $pageService->getFlatTypes($repository);
        $types = array();

        foreach($flatTypesList as $flatType){
            $pageList = $apiClientService->getSortPages();
            $repository = $this->getDoctrine()->getRepository(Flat::class);
            array_push($types, $pageService->addPriceValues($pageList, $repository, $flatType));
        }

        return $this->render('page/recent_chart.html.twig', [
            'types' => $types,
            'activePage' => $active,
        ]);
    }
}