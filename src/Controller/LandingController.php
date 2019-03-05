<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use JMS\Serializer\SerializerInterface;
use App\Service\CityService;
use App\Service\ApiClientService;
use App\Entity\Flat;
use App\Entity\Bill;

class LandingController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(CityService $cityService, ApiClientService $apiClientService)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flatTypesList = $cityService->getFlatTypes($repository);
        $billList = $apiClientService->getBillTypes();

        return $this->render('landing/index.html.twig', [
            'type_list' => $flatTypesList,
            'bills' => $billList,
        ]);
    }

    /**
     * @Route("/get/{postCode}/{flatType}", name="flat.get")
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

    /**
     * @Route("/flat/", name="flat.post")
     * @Method({"POST"})
     */
    public function postCityValues(SerializerInterface $serializer, Request $request, CityService $cityService)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $flat = new Flat();
        $flat->setSurface($request->request->get('area'));
        $flat->setPostcode($request->request->get('postalCode'));
        $flat->setCity($cityService->getCityByPostcode($request->request->get('postalCode')));
        $flat->setType($request->request->get('flatType'));
        $flat->setCost($request->request->get('price'));

        $entityManager->persist($flat);
        $entityManager->flush();

        return new Response($serializer->serialize(['status' => 'ok', 'request' => $request], 'json'));
    }

    /**
     * @Route("/bills/{postCode}/{flatType}", name="bills.get")
     * @Method({"GET"})
     */
    public function getBills(CityService $cityService, ApiClientService $apiClientService, $postCode, $flatType)
    {
        $city = $cityService->getCityByPostcode($postCode);
        $city = $apiClientService->getOneCityByTitle($city);
        $repository = $this->getDoctrine()->getRepository(Bill::class);

        $billsTab = $cityService->createBillsTabByCity($city, $repository, $flatType);
        $json = json_encode($billsTab);

        return new Response($json);
    }

    /**
     * @Route("/bills/", name="bills.post")
     * @Method({"POST"})
     */
    public function postBills(SerializerInterface $serializer, Request $request, CityService $cityService)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $bill = new Bill();
        $bill->setValue($request->request->get('value'));
        $bill->setPostcode($request->request->get('postcode'));
        $bill->setCity($cityService->getCityByPostcode($request->request->get('postcode')));
        $bill->setBillType($request->request->get('bill_type'));
        $bill->setFlatType($request->request->get('flat_type'));

        $entityManager->persist($bill);
        $entityManager->flush();

        return new Response($serializer->serialize(['status' => 'ok'], 'json'));
    }
}