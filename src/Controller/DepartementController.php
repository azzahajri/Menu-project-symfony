<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Departement;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Employe;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Form\DepartementType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityManagerInterface;


class DepartementController extends AbstractController
{
    #[Route('/departement', name: 'app_departement')]
    public function index(): Response
    {
        return $this->render('departement/index.html.twig', [
            'controller_name' => 'DepartementController',
        ]);
    }

    /**
    * @Route("/departement/{id}", name="departement_show")
    */
    public function show($id, Request $request)
    {
     //  $employe = $this->getDoctrine();
    $departement = $this->getDoctrine()
    ->getRepository(Departement::class)
    ->find($id);
    $em=$this->getDoctrine()->getManager();
    $lesemploye = $em->getRepository(Employe::class)
         ->findBy(['Departement'=>$departement]);
        $publicPath = $request->getScheme().'://'.$request->getHttpHost().$request->getBasePath().'/uploads/departement/';
      
        if (!$departement) {
            throw $this->createNotFoundException(
                'No departement found for id '.$id
            );
        }
    return $this->render('departement/show.html.twig',[
        'lesemploye' => $lesemploye,
        'publicPath' => $publicPath,
        'departement' =>$departement,
        ]);
    }

    /**
    * @Route("/liste_depart", name="liste_departement")
    */
    public function listeDepartement ()
    {
        $em = $this ->getDoctrine()->getManager();
        $repo = $em->getRepository(Departement::class);
        $lesdepartement =$repo ->findAll();
        return $this->render('departement/liste.html.twig',['lesdepartement' => $lesdepartement]);
    }

    /**
* @Route("/AjouterDepart", name="AjouterDepart")
*/
    public function AjoutDepart(Request $request)
    {
          $publicPath = "uploads/departement/";
        $departement = new Departement();
        $form = $this->createForm("App\Form\DepartementType", $departement);
        $form -> handleRequest($request);
        if($form->isSubmitted())
        {
        /*
         * @var UploadeFile $image
         */
        $image = $form->get('image')->getData();
        $em = $this->getDoctrine()->getManager();
        if($image){
            $imageName = $departement->getNomDept().'.'.$image->guessExtension();
            $image->move($publicPath, $imageName);
            $departement->setImage($imageName);
        }
            $em = $this->getDoctrine()->getManager();
            $em->persist($departement);
            $em->flush();
         $this->addFlash(type:'success', message:'Departement was added !');
            return $this -> redirectToRoute('liste_departement');
        }
    
        return $this->render('departement/ajouter.html.twig',
        ['form' => $form->createView()]);
        
    }
     /**
     * @Route("/edit_depart/{id}", name="departement_edit", methods="GET|POST")
     * @param Departement $departement
     * @param Request $request
     * @return Response
     */
    
     public function edit_depart(Departement $departement, Request $request)
     {
        
        $form = $this->createForm(DepartementType::class, $departement);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
         
           
           $em = $this->getDoctrine()->getManager();
      
       
            $em->flush();
            $this->addFlash('success', 'Departement modifié avec succés');
            return $this->redirectToRoute('liste_departement');
        }
        return $this->render('departement/editdepart.html.twig', [
            'departement' => $departement,
            'form' => $form->createView()
        ]);
     }
    

    /**
    * @Route("/supp_depart/{id}", name="depart_delete")
    */
    public function delete( $id):Response {
        $c = $this->getDoctrine()-> getRepository(Departement::class) -> find($id);
        if (!$c)
    {
        throw $this->createNotFoundException('No Departement found for id ' . $id);
    }
    $entityManager = $this ->getDoctrine()->getManager();
    $entityManager -> remove($c);
    $entityManager ->flush();
        $this->addFlash(type:'success', message:'Departement was removed !');

    return $this->redirectToRoute('liste_departement');
    
    }

}
