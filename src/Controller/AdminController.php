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
use App\Form\FlatType;
use App\Entity\Bill;
use App\Form\BillType;

class AdminController extends AbstractController
{
    /**
     * @Route("/info/", name="info.get")
     * @Method({"GET"})
     */
    public function getInfo(SerializerInterface $serializer, ApiClientService $apiClientService)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flatList = $repository->findBy(['state' => 0], [
            'id' => 'DESC'
        ]);
        $infoList = [];
        foreach ($flatList as $flat) {
            $repository = $this->getDoctrine()->getRepository(Bill::class)->findBy(['uuid' => $flat->getUuid()]);
            $valueList = '';
            $valueList = $valueList . 'Miasto: ' . $flat->getCity() . ', Kod pocztowy: ' . $flat->getPostcode() . ', Typ mieszkania: ' . $apiClientService->findTitleOfFlatTypeById($flat->getType());
            for ($x = 0; $x < sizeof($repository); $x++) {
                if ($x == 0) {
                    $valueList = $valueList . ', ';
                }
                $valueList = $valueList . $apiClientService->findTitleOfBillTypeBySlug($repository[$x]->getBillType()) . ': ' . $repository[$x]->getValue();
                if ($x < sizeof($repository) - 1) {
                    $valueList = $valueList . ', ';
                }
            }
            $info = [
                'subject' => $flat->getUuid(),
                'payload' => $valueList,
                '_actions' => [
                    'accept' => $_SERVER['HTTP_HOST'] . $this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'accept')),
                    'delete' => $_SERVER['HTTP_HOST'] . $this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'delete')),
                    'edit' => $_SERVER['HTTP_HOST'] . $this->generateUrl('info.state.set', array('uuid' => $flat->getUuid(), 'state' => 'edit')),
                    'file' => "http://" . $_SERVER['HTTP_HOST'] . "/images/upload/" . $flat->getFiles()
                ]
            ];
            array_push($infoList, $info);
        }
        return new Response($serializer->serialize(['total_items' => sizeof($infoList), 'data' => $infoList], 'json'));
    }

    /**
     * @Route("/info/{uuid}/edit/", name="info.edit")
     */
    public function editListInfo(ApiClientService $apiClientService, SerializerInterface $serializer, $uuid)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flat = $repository->findOneBy(['uuid' => $uuid]);
        if (!$flat) {
            throw $this->createNotFoundException(
                'No flat found for this uuid: ' . $uuid
            );
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
        if($form->isSubmitted() && $form->isValid()) {
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
        if($form->isSubmitted() && $form->isValid()) {
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