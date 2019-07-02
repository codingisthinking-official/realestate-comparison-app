<?php

namespace App\Controller;

use App\Service\ApiClientService;
use App\Service\CityService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Flat;
use App\Entity\Bill;

class PdfController extends AbstractController
{
    /**
     * @Route("/bill/{uuid}/", name="pdf.bill")
     */
    public function renderForm(ApiClientService $apiClientService, CityService $cityService, $uuid)
    {
        $flat = $this->getDoctrine()->getRepository(Flat::class)->findOneBy(['uuid' => $uuid]);
        if (!$flat) {
            throw $this->createNotFoundException(
                'No flat found for this uuid: ' . $uuid
            );
        }
        $bills = $this->getDoctrine()->getRepository(Bill::class)->findBy(['uuid' => $uuid]);
        $repository = $this->getDoctrine()->getRepository(Bill::class);
        $billsTab = $cityService->createBillsTabByCity($apiClientService->getOneCityByTitle($flat->getCity()), $repository, $flat->getType());

        return $this->render('PDF/bill.html.twig', [
            'flat' => $flat,
            'bills' => $bills,
            'bill_list' => $apiClientService->getBillTypes(),
            'bill_price' => $billsTab,
            'cityInfo' => $apiClientService->getOneCityByTitle($flat->getCity())
        ]);
    }
}