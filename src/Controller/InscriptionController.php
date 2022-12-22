<?php
namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class InscriptionController extends AbstractController {
    
    #[Route("/number")]
    /**
     * @Route("/home", name="home")
     */
    public function number(){
        $number = rand(0,100);
        //$response['number'] = rand(0,100);
       return $this->render("Inscription/home.html.twig",['number' => $number]);
        //return new Response(json_encode($response));
    }

}
?>