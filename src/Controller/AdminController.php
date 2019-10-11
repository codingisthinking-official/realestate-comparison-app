<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use JMS\Serializer\SerializerInterface;
use App\Service\ApiClientService;
use App\Entity\Flat;
use App\Form\FlatType;
use App\Entity\Bill;
use App\Form\BillType;

class AdminController extends AbstractController
{
    /**
     * @Route("/info/{uuid}/edit/", name="info.edit")
     */
    public function editListInfo(
        Request $request, ApiClientService $apiClientService, EntityManagerInterface $entityManager, $uuid
    )
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flat = $repository->findOneBy(['uuid' => $uuid]);
        if (!$flat) {
            throw $this->createNotFoundException(
                'No flat found for this uuid: ' . $uuid
            );
        }

        if ($request->isMethod('POST')) {
            $data = $request->request->all();

            foreach ($data as $billType => $value) {
                $bill = $entityManager->getRepository(Bill::class)->findOneBy(['uuid' => $uuid, 'billType' => $billType]);

                if ($bill->getValue() == $value) {
                    continue;
                }

                if ($bill) {
                    $bill->setValue($value);
                } else {
                    continue;
                }

                $entityManager->persist($bill);
                $entityManager->flush();
            }

            return $this->redirectToRoute('info.edit', ['uuid' => $uuid]);
        }

        $repository = $this->getDoctrine()->getRepository(Bill::class);
        $bills = $repository->findBy(['uuid' => $uuid]);

        return $this->render('admin/list.html.twig', [
            'flat' => $flat,
            'bills' => $bills,
            'bill_list' => $apiClientService->getBillTypes()
        ]);
    }

    /**
     * @Route("/info/{uuid}/edit/flat", name="info.flat.edit")
     */
    public function editFlatInfo(Request $request, $uuid)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $city = $entityManager->getRepository(Flat::class)->findOneBy(['uuid' => $uuid]);
        $form = $this->createForm(FlatType::class, $city);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($city);
            $manager->flush();

            return $this->redirectToRoute('info.edit', ['uuid' => $uuid]);
        }
        return $this->render('admin/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/info/{uuid}/edit/bill/{type}", name="info.bill.edit")
     */
    public function editBillInfo(Request $request, $uuid, $type)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $bill = $entityManager->getRepository(Bill::class)->findOneBy(['uuid' => $uuid, 'billType' => $type]);
        $form = $this->createForm(BillType::class, $bill);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();

            $manager->persist($bill);
            $manager->flush();

            return $this->redirectToRoute('info.edit', ['uuid' => $uuid]);
        }
        return $this->render('admin/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/info/{uuid}/{state}", name="info.state.set")
     * @Method({"PATCH"})
     */
    public function setStateInfo(Request $request, SerializerInterface $serializer, $uuid, $state)
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

        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }

    /**
     * @Route("/infos/{page}/{status}/", name="info.get")
     * @Method({"GET"})
     */
    public function getInfo(
        SerializerInterface $serializer, ApiClientService $apiClientService, int $page, $status = ''
    )
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);

        $offset = ($page - 1) * 10;

        if ($status == 'accepted') {
            $flatList = $repository->findBy([
                'state' => 1,
            ], [
                'id' => 'DESC',
            ], 10, $offset);

            $totalItemCount = $repository
                ->createQueryBuilder('f')
                ->select('count(f) as c')
                ->where('f.state = 1')
                ->getQuery()
                ->getSingleResult()['c'];
        } else {
            $flatList = $repository->findBy([], [
                'id' => 'DESC'
            ], 10, $offset);

            $totalItemCount = $repository
                ->createQueryBuilder('f')
                ->select('count(f) as c')
                ->getQuery()
                ->getSingleResult()['c'];
        }

        $infoList = [];
        foreach ($flatList as $flat) {
            $repository = $this->getDoctrine()->getRepository(Bill::class)->findBy(['uuid' => $flat->getUuid()]);
            $valueList = '<span style="border-bottom: 1px solid #ccc; padding-bottom: 5px;">';
            $valueList .= 'Miasto: ' . $flat->getCity() . ', Kod pocztowy: ' . $flat->getPostcode() . ', Typ: ' . $apiClientService->findTitleOfFlatTypeById($flat->getType()) .'</span><br><br><small>';

            $valueList .= '<strong>Poprawność danych:</strong> ';

            $percentOfBuilding = 0.0;

            for ($x = 0; $x < sizeof($repository); $x++) {
                $bill = $repository[$x];
                if ($bill->getBillType() == 'udzial') {
                    $percentOfBuilding = 1 / (100 - (float) str_replace(',', '.', $bill->getValue()));
                }
            }

            $sum = 0.0;
            for ($x = 0; $x < sizeof($repository); $x++) {
                $bill = $repository[$x];
                $billMeta = $apiClientService->getPriceParameterBySlug($bill->getBillType());
                $value = (float) str_replace(',', '.', $bill->getValue());

                if ($billMeta->getType() == 'chart' && $billMeta->getYearCost()) {
                    $sum += $value * $flat->getSurface(); 
                }

                if ($billMeta->getType() == 'chart' && $billMeta->getMonthlyCost()) {
                    $sum += $value * $flat->getSurface();
                }
            }

            $deviation = $sum / $flat->getCost();
            $valueList .= round($sum, 2) . ' zł (' . round($deviation * 100, 2). ' %)';
            $valueList .= '<br><br>';

            for ($x = 0; $x < sizeof($repository); $x++) {
                $valueList = $valueList . $apiClientService->findTitleOfBillTypeBySlug($repository[$x]->getBillType()) . ': ' . $repository[$x]->getValue();
                if ($x < sizeof($repository) - 1) {
                    $valueList = $valueList . '<br>';
                }
            }

            $valueList .= '</small>';
            $status = '<span style="color: #b0cc37">Not accepted</span>';

            $actions = [
                'edit' => $this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'edit'), UrlGeneratorInterface::ABSOLUTE_URL),
                'file' => "http://" . $_SERVER['HTTP_HOST'] . "/images/upload/" . $flat->getFiles(),
                'pdf' => $this->generateUrl('pdf.bill', ['uuid' => $flat->getUuid()], UrlGeneratorInterface::ABSOLUTE_URL),
            ];

            if ($flat->getState() == 0) {
                $actions['accept'] = $this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'accept'), UrlGeneratorInterface::ABSOLUTE_URL);
                $actions['reject'] = $this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'delete'), UrlGeneratorInterface::ABSOLUTE_URL);
            }

            if ($flat->getState() == 1) {
                $status = '<span style="color: green">Accepted</span>';
                $actions['reject'] = $this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'delete'), UrlGeneratorInterface::ABSOLUTE_URL);
            }

            if ($flat->getState() == 2) {
                $status = '<span style="color: red">Rejected</span>';
                $actions['accept'] = $this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'accept'), UrlGeneratorInterface::ABSOLUTE_URL);
            }

            $info = [
                'subject' => $flat->getUuid(),
                'status' => $status,
                'payload' => $valueList,
                'id' => $flat->getId(),
                'ip' => $flat->getIp(),
                '_actions' => $actions,
            ];

            array_push($infoList, $info);
        }

        return new Response($serializer->serialize([
            'total_items' => $totalItemCount,
            'data' => $infoList
        ], 'json'));
    }

    /**
     * @Route("/remove/{ids}/", name="info.remove_batch")
     * @Method({"GET"})
     */
    public function removeInfos(Request $request, ApiClientService $apiClientService, $ids)
    {
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Flat::class);

        foreach (explode(',', $ids) as $id) {
            $flat = $repository->findOneBy([
                'id' => $id,
            ]);

            if ($flat) {
                $billRepo = $this->getDoctrine()->getRepository(Bill::class);
                
                $bills = $billRepo->findBy(['uuid' => $flat->getUUid()]);

                foreach ($bills as $bill) {
                    $manager->remove($bill);
                }

                $manager->remove($flat);
                $manager->flush();

            }
        }

        $ref = $request->headers->get('referer');
        return new RedirectResponse($ref);
    }

    /**
     * @Route("/accepted/csv/", name="info.get_csv")
     * @Method({"GET"})
     */
    public function getInfoCSV(Request $request, ApiClientService $apiClientService)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);

        $flats = $repository->findBy([
            'state' => 1,
        ], [
            'id' => 'DESC',
        ]);

        $globalHeaders = [];
        foreach ($flats as $flat) {
            $headers = [];
            $tmp = [
                'id' => $flat->getId(), 'ip' => $flat->getIp(), 'cost' => $flat->getCost(),
                'surface' => $flat->getSurface(), 'postcode' => $flat->getPostCode(), 'city' => $flat->getCity()
            ];

            $bill = $this->getDoctrine()->getRepository(Bill::class)->findBy(['uuid' => $flat->getUuid()]);

            foreach ($bill as $priceParameter) {
                $headers[] = [
                    'title' => $apiClientService->findTitleOfBillTypeBySlug($priceParameter->getBillType()),
                    'slug' => $priceParameter->getBillType()
                ];

                $tmp[$priceParameter->getBillType()] = $priceParameter->getValue();
            }

            $output[] = $tmp;

            if (count($headers) > count($globalHeaders)) {
                $globalHeaders = array_merge([
                    [
                        'title' => 'ID',
                        'slug' => 'id',
                    ],
                    [
                        'title' => 'IP',
                        'slug' => 'ip',
                    ],
                    [
                        'title' => 'Koszt',
                        'slug' => 'cost',
                    ],
                    [
                        'title' => 'Powierzchnia',
                        'slug' => 'surface',
                    ],
                    [
                        'title' => 'Kod pocztowy',
                        'slug' => 'surface',
                    ],
                    [
                        'title' => 'Miasto',
                        'slug' => 'city',
                    ]
                ], $headers);
            }
        }

        $csvHeaders = [];
        foreach ($globalHeaders as $header) {
            $csvHeaders[] = $header['title'];
        }

        $f = fopen('php://memory', 'r+');
        if (fputcsv($f, $csvHeaders) === false) {
            return false;
        }

        $csvOutput = [];

        for ($i = 0; $i < count($output); ++$i) {
            $preparedData = [];

            foreach ($globalHeaders as $header) {
                $preparedData[] = array_key_exists($header['slug'], $output[$i]) ? $output[$i][$header['slug']] : '';
            }

            if (fputcsv($f, $preparedData) === false) {
                return false;
            }
        }

        rewind($f);
        
        $response = new Response(stream_get_contents($f));
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="prices-accepted.csv"');

        return $response; 
    }
}
