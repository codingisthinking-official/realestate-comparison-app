<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use JMS\Serializer\SerializerInterface;
use App\Service\CityService;
use App\Service\ApiClientService;
use App\Entity\Flat;

class LandingController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(CityService $cityService)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flatTypesList = $cityService->getFlatTypes($repository);

        return $this->render('landing/index.html.twig', [
            'type_list' => $flatTypesList,
        ]);
    }

    /**
     * @Route("/get/{postCode}/{flatType}", name="api.tooltip.get")
     * @Method({"GET"})
     */
    public function getCityValues(SerializerInterface $serializer, CityService $cityService, ApiClientService $apiClientService, $postCode, $flatType)
    {
        $city = $cityService->getCityByPostcode($postCode);
        $city = $apiClientService->getOneCityByTitle($city);

        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $cityWithValues = $cityService->addPriceValues([$city], $repository, $flatType);

        return new Response($serializer->serialize(['status' => 'ok', 'minPrice' => $cityWithValues[0]->minPrice, 'avgPrice' => $cityWithValues[0]->avgPrice, 'maxPrice' => $cityWithValues[0]->maxPrice], 'json'));
    }
}