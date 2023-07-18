<?php

namespace App\Controller;

use App\Entity\ContactForm;
use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactFormController extends AbstractController

{
    #[Route('/default', name: 'Contact_Form')]

    public function index(Request $request): Response

   {   
        $ContactForm = new ContactForm ();

        $form=$this->createForm(ContactFormType::class, $ContactForm);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($ContactForm);die;
        }
        
        return 
        $this->render('default/index.html.twig', [ "form"=>$form->createView(),
        ]);
    
}

}
