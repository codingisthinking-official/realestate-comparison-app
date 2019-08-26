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

        $billsTab = $cityService->createBillsTabByCity(
            $apiClientService->getOneCityByTitle($flat->getCity())
            , $repository, $flat->getType()
        );

        $averageItems = array_filter(array_map(function($tab) use ($cityService, $repository, $flat) {
            $avg = $cityService->calculateAverageValueForCityAndTypeAndSlug(
                $repository, $flat->getCity(), $flat->getType(), $tab->getSlug()
            );

            if (!$tab->getDisplayAverage()) {
                return false;
            }

            return [
                'slug' => $tab->getSlug(),
                'avg' => $avg,
            ];
        }, $billsTab), function($tab) {
            return false !== $tab;
        });

        $averageItemsMap = [];
        foreach ($averageItems as $item) {
            $averageItemsMap[$item['slug']] = $item['avg'];
        }

        return $this->render('PDF/bill.html.twig', [
            'averageItemsMap' => $averageItemsMap,
            'flat' => $flat,
            'bills' => $bills,
            'bill_list' => $apiClientService->getBillTypes(),
            'bill_price' => $billsTab,
            'cityInfo' => $apiClientService->getOneCityByTitle($flat->getCity())
        ]);
    }
}