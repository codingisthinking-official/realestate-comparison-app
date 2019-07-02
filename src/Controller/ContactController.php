<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact/", name="contact", methods={"GET"})
     */
    public function renderForm()
    {
        return $this->render('contact/renderForm.html.twig', ['sent' => false]);
    }

    /**
     * @Route("/contact/", name="contact.post", methods={"POST"})
     */
    public function sendForm(Request $request, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Wiadomość ze strony'))
            ->setFrom('kontakt@realestate.com', 'RealEstate')
            ->setTo('matixe@gmail.com')
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig',
                    [
                        'name' => $request->request->get('name'),
                        'phone' => $request->request->get('phone'),
                        'email' => $request->request->get('email'),
                        'message' => $request->request->get('message'),
                    ]
                ), 'text/html'
            )
        ;

        $mailer->send($message);

        return $this->render('contact/renderForm.html.twig', ['sent' => true]);
    }
}
