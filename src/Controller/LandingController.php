<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
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
    public function index()
    {
        return $this->redirectToRoute('homepage.iframe');
    }

    /**
     * @Route("/iframe", name="homepage.iframe")
     */
    public function iframe(ApiClientService $apiClientService)
    {
        $bills = $apiClientService->getBillTypes();

        $groups = array_unique(array_map(function($bill) {
            return $bill->getGroupName();
        }, $bills));

        return $this->render('landing/index-iframe.html.twig', [
            'type_list' => $apiClientService->getFlatTypes(),
            'bills' => $bills,
            'groups' => $groups,
        ]);
    }

    /**
     * @Route("/flat/", name="flat.post")
     * @Method({"POST"})
     */
    public function postCityValues(SerializerInterface $serializer, Request $request, CityService $cityService)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $flat = new Flat();
        $flat->setIp($request->getClientIp());
        $flat->setSurface($request->request->get('area'));
        $flat->setPostcode($request->request->get('postalCode'));
        $flat->setCity($cityService->getCityByPostcode($request->request->get('postalCode')));
        $flat->setType($request->request->get('flatType'));
        $flat->setCost($request->request->get('price'));
        $flat->setUuid($request->request->get('uuid'));
        $flat->setState(0);

        $entityManager->persist($flat);
        $entityManager->flush();

        return new Response($serializer->serialize(['status' => 'ok'], 'json'));
    }

    /**
     * @Route("/flat/{postCode}/{flatType}", name="flat.get")
     * @Method({"GET"})
     */
    public function getCityValues(
        SerializerInterface $serializer, CityService $cityService, ApiClientService $apiClientService,
        $postCode, $flatType
    )
    {
        $city = $cityService->getCityByPostcode($postCode);
        $city = $apiClientService->getOneCityByTitle($city);

        $repository = $this->getDoctrine()->getRepository(Flat::class);
        if ($city) {
            $cityWithValues = $cityService->addPriceValuesByZipCode($postCode, $repository, $flatType);

            if (false === $cityWithValues) {
                $cityWithValues = $cityService->addPriceValues([$city], $repository, $flatType);
            }
        } else {
            return new Response($serializer->serialize([
                'status' => 'ok',
                'minPrice' => 5,
                'avgPrice' => 25,
                'maxPrice' => 55
            ], 'json'));
        }

        return new Response($serializer->serialize([
            'status' => 'ok',
            'minPrice' => $cityWithValues[0]->minPrice,
            'avgPrice' => $cityWithValues[0]->avgPrice,
            'maxPrice' => $cityWithValues[0]->maxPrice
        ], 'json'));
    }

    /**
     * @Route("/bills/{postCode}/{flatType}", name="bills.get")
     * @Method({"GET"})
     */
    public function getBills(
        CityService $cityService, ApiClientService $apiClientService, $postCode, $flatType,
        SerializerInterface $serializer
    )
    {
        $city = $cityService->getCityByPostcode($postCode);
        $city = $apiClientService->getOneCityByTitle($city);
        $repository = $this->getDoctrine()->getRepository(Bill::class);

        return new Response(
            $serializer->serialize($cityService->createBillsTabByCity($city, $repository, $flatType), 'json')
        , 200);
    }

    /**
     * @Route("/bills/", name="bills.post")
     * @Method({"POST"})
     */
    public function postBills(SerializerInterface $serializer, Request $request, CityService $cityService)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $requestData = json_decode($request->getContent(), true);

        $city = $cityService->getCityByPostcode($requestData['post_code']);
        foreach ($requestData['elements'] as $element) {
            $bill = new Bill();
            $bill->setValue($element['value']);
            $bill->setBillType($element['key']);
            $bill->setPostcode($requestData['post_code']);
            $bill->setFlatType($requestData['flat_type']);
            $bill->setUuid($requestData['uuid']);
            $bill->setCity($city);

            $entityManager->persist($bill);
            $entityManager->flush();
        }

        return new JsonResponse(['status' => 'ok'], 200);
    }

    /**
     * @Route("/files/", name="files.post")
     * @Method({"POST"})
     */
    public function postFiles(SerializerInterface $serializer, Request $request, CityService $cityService)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $city = $entityManager->getRepository(Flat::class)->findOneBy([
            'uuid' => $request->headers->get('uuid')
            // 'uuid' => 'bc27f754-c98f-46ca-8496-21d3fccaed79'
        ]);

        if (!$city) {
            throw $this->createNotFoundException(
                'City not found!'
            );
        }

        $file = $request->files->get('file');
        $fileList = array();

        foreach($file as $f) {
            $filename = uniqid() . "." . $f->getClientOriginalExtension();
            $path = $this->getParameter('kernel.project_dir') . "/public/images/upload";

            $f->move($path, $filename);
            // $olderFiles = $city->getFiles();
            array_push($fileList, $filename);
        }
        
        $city->setFiles($fileList);

        $entityManager->persist($city);
        $entityManager->flush();

        return new Response($serializer->serialize(['status' => 'ok'], 'json'));
    }
}
