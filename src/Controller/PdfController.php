<?php

namespace App\Controller;

use App\Service\ApiClientService;
use App\Service\CityService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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

        $city = $apiClientService->getOneCityByTitle($flat->getcity());
        $repository = $this->getDoctrine()->getRepository(Flat::class);

        if ($city) {
            $cityWithValues = $cityService->addPriceValuesByZipCode(
                $flat->getPostCode(), $repository, $flat->getType()
            );

            if (false === $cityWithValues) {
                $cityWithValues = $cityService->addPriceValues([$city], $repository, $flat->getType())[0];
            }
        } else {
            $cityWithValues = [
                'status' => 'ok',
                'minPrice' => 5,
                'avgPrice' => 25,
                'maxPrice' => 55
            ];
        }

        return $this->render('PDF/bill.html.twig', [
            'averageItemsMap' => $averageItemsMap,
            'flat' => $flat,
            'cityValues' => $cityWithValues,
            'bills' => $bills,
            'bill_list' => $apiClientService->getBillTypes(),
            'bill_price' => $billsTab,
            'cityInfo' => $apiClientService->getOneCityByTitle($flat->getCity())
        ]);
    }
}