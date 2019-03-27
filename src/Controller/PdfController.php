<?php

namespace App\Controller;

use App\Service\ApiClientService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Flat;
use App\Entity\Bill;

class PdfController extends AbstractController
{
    /**
     * @Route("/bill/{uuid}/", name="pdf.bill")
     */
    public function renderForm(ApiClientService $apiClientService, $uuid)
    {
        $flat = $this->getDoctrine()->getRepository(Flat::class)->findOneBy(['uuid' => $uuid]);
        if (!$flat) {
            throw $this->createNotFoundException(
                'No flat found for this uuid: ' . $uuid
            );
        }
        $bills = $this->getDoctrine()->getRepository(Bill::class)->findBy(['uuid' => $uuid]);

        return $this->render('PDF/bill.html.twig', [
            'flat' => $flat,
            'bills' => $bills,
            'cityInfo' => $apiClientService->getOneCityByTitle($flat->getCity())
        ]);
    }
}