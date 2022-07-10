<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $formContact = $this->createForm(ContactType::class);
        $formContact->handleRequest($request);
        if ($formContact->isSubmitted() && $formContact->isValid()) {
            $contact['contact'] = $formContact->getData();
            $name = $formContact->get('last_name')->getData() . " " . $formContact->get('first_name')->getData();
            $email = (new Email())
            ->from($formContact->get('email')->getData())
            ->to(strval($this->getParameter('mailer_from')))
            ->subject($name)
            ->html($this->renderView('contact/mail.html.twig', ['contact' => $contact]));
            $mailer->send($email);
            $this->addFlash('success', 'Votre mail a été envoyé avec succès');
            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'formContact' => $formContact->createView(),
        ]);
    }
}
