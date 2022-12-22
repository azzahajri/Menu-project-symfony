<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Job;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;

class CandidatController extends AbstractController
{
    #[Route('/candidat', name: 'app_candidat')]
    public function index(): Response
    {
        return $this->render('candidat/index.html.twig', [
            'controller_name' => 'CandidatController',
        ]);
    }

      /**
* @Route("/", name="Accueil")
*/ 
public function Accueil()
{
    $em = $this ->getDoctrine()->getManager();
    $repo = $em->getRepository(Candidature::class);
    $lesCandidats =$repo ->findAll();
    return $this->render('job/Accueil.html.twig',[
        'lesCandidats' => $lesCandidats]);
}
}
