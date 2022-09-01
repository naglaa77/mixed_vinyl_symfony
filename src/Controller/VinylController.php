<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VinylController extends AbstractController {

    #[Route('/')]
    public function homePage(): Response
    {

        return $this->render('vinyl/homepage.html.twig',[
            'title' =>'PB & Jams'
        
        ]);
    }
    
    #[Route('/browse/{slog}')]
    public function brows($slog):Response 
    {   
        $title = str_replace('-',' ',$slog);
        return new Response('Genre: '.$title) ;   
    
    }

}