<?php

namespace App\Controller;
use App\Repository\JobRepository;
use App\Entity\Candidature;
use App\Form\CandidatureType;
use App\Entity\Image;
use App\Entity\Job;
use App\Form\JobType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
class JobController extends AbstractController
{
    #[Route('/job', name: 'app_job')]
    public function index(): Response
    {
        $entityManager = $this ->getDoctrine()->getManager();
        $job= new Job ();
        $job ->setType('Developpeur');
        $job ->setCompany('Proxim');
        $job ->setDescription('Genie logiciel ');
        $job ->setExpiresAt(new \DateTimeImmutable());
        $job ->setEmail('azzahajri70@gmail.com');


        //ajout des candidats
        $candidat1=new Candidature();
        $candidat1 ->setCandidat("Azza");
        $candidat1 ->setContenu("formation J2EE");
        $candidat1 ->setDatec(new \DateTime());
        $candidat2=new Candidature();
        $candidat2 ->setCandidat("hana");
        $candidat2 ->setContenu("formation JAVA");
        $candidat2 ->setDatec(new \DateTime());
        $candidat1 ->setJob($job);
        $candidat2 ->setJob($job);
        $entityManager->persist($job);
        $entityManager->persist($candidat1);
        $entityManager->persist($candidat2);
        $entityManager->flush();
        return $this->render('job/index.html.twig', [
            'controller_name' => 'JobController',
            'id' =>$job->getID(), 
         ]);
    }

    /**
    * @Route("/job/{id}", name="job_show")
    */
    public function show($id, Request $request)
    {
    $job = $this->getDoctrine()
    ->getRepository(Job::class)
    ->find($id);

    $em=$this->getDoctrine()->getManager();
    $listCandidatures=$em->getRepository(Candidature::class)-> findBy(['Job' =>$job]);
    $publicPath = $request->getScheme().'://'.$request->getHttpHost().$request->getBasePath().'/uploads/jobs/';
        if (!$job) {
            throw $this->createNotFoundException(
                'No job found for id '.$id
            );
        }
    return $this->render('job/show.html.twig',[

    'listCandidatures'=>$listCandidatures,
        'job' =>$job,
        'publicPath'=> $publicPath]);
    }
    
 /**
     * @var JobRepository;
     */
    private $repository;
    private EntityManagerInterface $em;

    public function __construct(JobRepository $repository, EntityManagerInterface $em)
    {

        $this->job= $repository;
        $this->em = $em;
    }

    /**
    * @Route("/Ajouter", name="Ajouter")
    */
 public function ajouter (Request $request)
   {
    $candidature = new Candidature();
    $form = $this->createForm("App\Form\CandidatureType", $candidature);
    $form -> handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $this->em->persist($candidature );
        $this->em->flush();
        $this->addFlash('success', 'Candidat créer avec succés');
        return  $this->redirectToRoute('Accueil');
    }
    return $this->render('job/ajouter.html.twig', [
        'candidature' => $candidature ,
        'form' => $form->createView()
    ]);      
    

} 
/**
* @Route("/AjouterJob", name="AjouterJob")
*/
public function AjoutJob(Request $request)
{
    $publicPath = "uploads/jobs/";
    $job = new Job();
    $form = $this->createForm("App\Form\JobType", $job);
    $form -> handleRequest($request);
    if($form->isSubmitted())
    {
        /*
         * @var UploadeFile $image
         */
        $image = $form->get('image')->getData();
        $em = $this->getDoctrine()->getManager();
        if($image){
            $imageName = $job->getDescription().'.'.$image->guessExtension();
            $image->move($publicPath, $imageName);
            $job->setImage($imageName);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($job);
        $em->flush();
        return $this -> redirectToRoute('Accueil');
    }
 
    return $this->render('job/ajouter.html.twig',
    ['form' => $form->createView()]);
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
/**
* @Route("/supp/{id}", name="cand_delete")
*/
public function delete( $id):Response {
$c = $this->getDoctrine()-> getRepository(Candidature::class) -> find($id);
if (!$c)
{
    throw $this->createNotFoundException('No job found for id ' . $id);
}
$entityManager = $this ->getDoctrine()->getManager();
$entityManager -> remove($c);
$entityManager ->flush();
return $this->redirectToRoute('Accueil');

}
/**
* @Route("/liste", name="liste_job")
*/
public function listeJob ()
{
    $em = $this ->getDoctrine()->getManager();
    $repo = $em->getRepository(Job::class);
    $lesjob =$repo ->findAll();
    return $this->render('job/liste.html.twig',['lesjob' => $lesjob]);
}
    /**
     * @Route("/editjob/{id}", name="job_edit", methods="GET|POST")
     * @param Job $job
     * @param Request $request
     * @return Response
     */
    
     public function edit(Job $job, Request $request)
     {
        
         $form = $this->createForm(JobType::class, $job);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             $this->em->flush();
             $this->addFlash('success', 'job modifié avec succés');
             return $this->redirectToRoute('liste_job');
         }
         return $this->render('job/edit.html.twig', [
             'job' => $job,
             'form' => $form->createView()
         ]);
     }
      /**
     * @Route("/editand/{id}", name="candidature_edit", methods="GET|POST")
     * @param Candidature $candidature
     * @param Request $request
     * @return Response
     */
    
     public function editcand(Candidature $candidature, Request $request)
     {
        
         $form = $this->createForm(CandidatureType::class, $candidature);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             $this->em->flush();
             $this->addFlash('success', 'candidature modifié avec succés');
             return $this->redirectToRoute('Accueil');
         }
         return $this->render('job/editcand.html.twig', [
             'candidature' => $candidature,
             'form' => $form->createView()
         ]);
     }
/**
* @Route("/suppjob/{id}", name="job_delete")
*/
    public function deletejob( $id):Response {
       
        $c = $this->getDoctrine()-> getRepository(Job::class) -> find($id);
        if (!$c)
        {
            throw $this->createNotFoundException('No job found for id ' . $id);
        }
        $entityManager = $this ->getDoctrine()->getManager();
        $entityManager -> remove($c);
        $entityManager ->flush();
        return $this->redirectToRoute('liste_job');
    
    }
    
    
}
