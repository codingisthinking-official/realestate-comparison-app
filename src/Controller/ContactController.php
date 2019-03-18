<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact/", name="contact")
     * @Method({"GET"})
     */
    public function renderForm()
    {
        return $this->render('contact/renderForm.html.twig');
    }

    /**
     * @Route("/contact/", name="contact")
     * @Method({"POST"})
     */
    public function sendForm()
    {
        return $this->render('contact/renderForm.html.twig');
    }
}