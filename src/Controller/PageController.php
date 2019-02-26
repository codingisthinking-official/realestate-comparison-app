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
    public function show(string $page, ApiClientService $apiClientService)
    {
        $page = $apiClientService->findOnePageBySlug($page);

        if (!$page) {
            throw $this->createNotFoundException();
        }

        return $this->render('page/show.html.twig', [
            'page' => $page,
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
        $pageList = $apiClientService->getSortPages();
        $repository = $this->getDoctrine()->getRepository(Flat::class);

        $pageList = $pageService->addPriceValues($pageList, $repository);

        return $this->render('page/recent_chart.html.twig', [
            'pageList' => $pageList,
            'activePage' => $active,
        ]);
    }
}