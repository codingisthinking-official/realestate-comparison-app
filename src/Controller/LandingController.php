<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
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
    public function index(ApiClientService $apiClientService)
    {
        return $this->render('landing/index.html.twig', [
            'type_list' => $apiClientService->getFlatTypes(),
            'bills' => $apiClientService->getBillTypes(),
        ]);
    }

    /**
     * @Route("/flat/{postCode}/{flatType}", name="flat.get")
     * @Method({"GET"})
     */
    public function getCityValues(SerializerInterface $serializer, CityService $cityService, ApiClientService $apiClientService, $postCode, $flatType)
    {
        $city = $cityService->getCityByPostcode($postCode);
        $city = $apiClientService->getOneCityByTitle($city);

        $repository = $this->getDoctrine()->getRepository(Flat::class);
        if ($city) {
            $cityWithValues = $cityService->addPriceValues([$city], $repository, $flatType);
        } else {
            return new Response($serializer->serialize(['status' => 'ok', 'minPrice' => 5, 'avgPrice' => 25, 'maxPrice' => 55], 'json'));
        }

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
        $flat->setUuid($request->request->get('uuid'));
        $flat->setState(0);

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
        $bill->setUuid($request->request->get('uuid'));
        Dump($request->request->get('uuid'));

        $entityManager->persist($bill);
        $entityManager->flush();

        return new Response($serializer->serialize(['status' => 'ok'], 'json'));
    }

    /**
     * @Route("/files/", name="files.post")
     * @Method({"POST"})
     */
    public function postFiles(SerializerInterface $serializer, Request $request, CityService $cityService)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $file = $entityManager->getRepository(Flat::class)->findOneBy(['uuid' => $request->request->get('uuid')]);

        if (!$file) {
            throw $this->createNotFoundException(
                'City not found!'
            );
        }

        Dump($request->files);

        $file->setFiles($request->request->get('path'));
        $entityManager->flush();

        $entityManager->persist($file);
        $entityManager->flush();

        return new Response($serializer->serialize(['status' => 'ok'], 'json'));
    }

    /**
     * @Route("/info/", name="info.get")
     * @Method({"GET"})
     */
    public function getInfo(SerializerInterface $serializer)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flatList = $repository->findBy(['state' => 0]);
        $infoList = [];
        foreach ($flatList as $flat) {
            $repository = $this->getDoctrine()->getRepository(Bill::class)->findBy(['uuid' => $flat->getUuid()]);
            $valueList = '';
            $valueList = $valueList.'City: '.$flat->getCity().', Postcode: '.$flat->getPostcode().', ';
            for ($x = 0; $x < sizeof($repository); $x++) {
                $valueList = $valueList.$repository[$x]->getBillType().': '.$repository[$x]->getValue();
                if($x < sizeof($repository)-1) {
                    $valueList = $valueList.', ';
                }
            }
            $info = [
                'subject' => $flat->getUuid(),
                'payload' => $valueList,
                '_actions' => [
                    'accept' => $_SERVER['HTTP_HOST'].$this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'accept')),
                    'delete' => $_SERVER['HTTP_HOST'].$this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'delete'))
                ]
            ];
            array_push($infoList, $info);
        }
        return new Response($serializer->serialize(['total_items' => sizeof($infoList), 'data' => $infoList], 'json'));
    }

    /**
     * @Route("/info/{uuid}/{state}", name="info.state.set")
     * @Method({"PATCH"})
     */
    public function setStateInfo(SerializerInterface $serializer, $uuid, $state)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flat = $repository->findOneBy(['uuid' => $uuid]);
        if (!$flat) {
            throw $this->createNotFoundException(
                'No flat found for this uuid: ' . $uuid
            );
        }
        switch ($state) {
            case "accept":
                $flat->setState(1);
                break;
            case "delete":
                $flat->setState(2);
                break;
        }
        $entityManager->persist($flat);
        $entityManager->flush();

        return new Response($serializer->serialize(['status' => 'ok'], 'json'));
    }
}