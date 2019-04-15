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
    public function index(ApiClientService $apiClientService)
    {
        return $this->render('landing/index.html.twig', [
            'type_list' => $apiClientService->getFlatTypes(),
            'bills' => $apiClientService->getBillTypes(),
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
        $city = $entityManager->getRepository(Flat::class)->findOneBy(['uuid' => $request->headers->get('uuid')]);

        if (!$city) {
            throw $this->createNotFoundException(
                'City not found!'
            );
        }

        $file = $request->files->get('file');
        $filename = uniqid() . "." . $file->getClientOriginalExtension();
        $webPath = $this->getParameter('kernel.project_dir');
        $path = $webPath . "/public/images/upload";
        $file->move($path, $filename);
        $status = array('status' => "success", "fileUploaded" => true);

        $city->setFiles($filename);

        $entityManager->persist($city);
        $entityManager->flush();

        return new Response($serializer->serialize(['status' => 'ok'], 'json'));
    }
}