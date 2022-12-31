<?php

namespace App\Controller;
use App\Form\EmployeType;
use App\Form\DepartementType;
use App\Repository\EmployeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Employe;
use App\Entity\Departement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EmployeController extends AbstractController
{
    #[Route('/employe', name: 'app_employe')]
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $employe= new Employe();
        $employe->setNom('Developpeur');
        $employe ->setSalaire('12.20');
        $employe ->setBornAt(new \DateTimeImmutable());
        $employe ->setEmail('azzahajri70@gmail.com');

         //ajout des departement
         $departement = new Departement();
         $departement->setNomDept("Azza");
         $departement->setResponsable("Equipe ");
         $departement->setNbrSalarie("12.12");

         $departement->addEmploye($employe);
         $entityManager->persist($employe);
         $entityManager->persist($departement);
        $entityManager->persist($employe);
        $entityManager->flush();
        
    
        return $this->render('employe/index.html.twig', [
            'controller_name' => 'EmployeController',
            'id' =>$employe->getID(), 
        ]);
    }

    /**
    * @Route("/employe/{id}", name="employe_show")
    */
    public function show($id)
    {
    $employe = $this->getDoctrine()
    ->getRepository(Employe::class)
    ->find($id);
    if (!$employe) {
        throw $this->createNotFoundException(
            'No employe found for id '.$id
        );
    }
    $em=$this->getDoctrine()->getManager();
      
       
    return $this->render('employe/show.html.twig',[
        
        'employe' =>$employe,
        ]);
    }

      /**
     * @var EmployeRepository;
     */
    private $repository;
    private EntityManagerInterface $em;

    public function __construct(EmployeRepository $repository, EntityManagerInterface $em)
    {

        $this->employe= $repository;
        $this->em = $em;
    }

    /**
    * @Route("/liste", name="liste_employe")
    */
    public function listeEmploye ()
    {
        $em = $this ->getDoctrine()->getManager();
        $repo = $em->getRepository(Employe::class);
        $lesemploye =$repo ->findAll();
        return $this->render('employe/liste.html.twig',['lesemploye' => $lesemploye]);
    }

  
  /**
* @Route("/AjouterEmp", name="AjouterEmp")
*/
public function AjoutEmp(Request $request)
{
   
    $employe = new Employe();
    $form = $this->createForm("App\Form\EmployeType", $employe);
    $form -> handleRequest($request);
    if($form->isSubmitted())
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($employe);
        $em->flush();
        return $this -> redirectToRoute('liste_employe');
    }
 
    return $this->render('employe/ajouter.html.twig',
    ['form' => $form->createView()]);
    }
    
        /**
    * @Route("/supp/{id}", name="emp_delete")
    */
    public function delete( $id):Response {
        $c = $this->getDoctrine()-> getRepository(Employe::class) -> find($id);
        if (!$c)
    {
        throw $this->createNotFoundException('No Employe found for id ' . $id);
    }
    $entityManager = $this ->getDoctrine()->getManager();
    $entityManager -> remove($c);
    $entityManager ->flush();
    $this->addFlash(type:'success', message:'Employe was removed !');
    return $this->redirectToRoute('liste_employe');
    
    }


      /**
     * @Route("/edit_employe/{id}", name="employe_edit", methods="GET|POST")
     * @param Employe $employe
     * @param Request $request
     * @return Response
     */
    
     public function edit(Employe $employe, Request $request)
     {
         
        $form = $this->createForm(EmployeType::class, $employe);
         $form->handleRequest($request);
        
         if ($form->isSubmitted() && $form->isValid()) {
    
           $em = $this->getDoctrine()->getManager();
      
            $em->flush();
            $this->addFlash('success', 'Employe modifié avec succés');
            return $this->redirectToRoute('liste_employe');
         }
         return $this->render('employe/edit.html.twig', [
             'employe' => $employe,
             'form' => $form->createView()
         ]);
     }
}
