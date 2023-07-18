<?php

namespace App\Controller;

use App\entity\Form;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post', name: 'app_post')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            "age" => 30,
        ]);
    }

}

/*#[Route('/ReparationMaintenance')]
    public function index(): Response
    {*/
        

       /* return $this->render('ReparationMaintenance.html.twig', [*/
          /*  "ReparationMaintenance"=>$this-> createView()*/
     /*   ]);
    } 
}*/
