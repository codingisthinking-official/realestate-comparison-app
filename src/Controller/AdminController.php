<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
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
     * @Route("/info/", name="info.get")
     * @Method({"GET"})
     */
    public function getInfo(SerializerInterface $serializer, ApiClientService $apiClientService)
    {
        $repository = $this->getDoctrine()->getRepository(Flat::class);
        $flatList = $repository->findBy([], [
            'id' => 'DESC'
        ]);
        $infoList = [];
        foreach ($flatList as $flat) {
            $repository = $this->getDoctrine()->getRepository(Bill::class)->findBy(['uuid' => $flat->getUuid()]);
            $valueList = '<span style="border-bottom: 1px solid #ccc; padding-bottom: 5px;">';
            $valueList .= 'Miasto: ' . $flat->getCity() . ', Kod pocztowy: ' . $flat->getPostcode() . ', Typ: ' . $apiClientService->findTitleOfFlatTypeById($flat->getType()) .'</span><br><br><small>';
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
                'file' => "http://" . $_SERVER['HTTP_HOST'] . "/images/upload/" . $flat->getFiles()
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
                '_actions' => $actions,
            ];
            array_push($infoList, $info);
        }
        return new Response($serializer->serialize(['total_items' => sizeof($infoList), 'data' => $infoList], 'json'));
    }

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
}
