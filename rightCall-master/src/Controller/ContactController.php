<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;

use App\Notification\ContactNotification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, ContactNotification $notification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted())
        {
            $notification->notify($contact);
            $this->addFlash('success', 'votre email a bien été envoyé');
            return $this->redirectToRoute('home');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
