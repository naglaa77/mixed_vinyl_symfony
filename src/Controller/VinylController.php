<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController {

    #[Route('/')]
    public function homePage(): Response
    {

        return new Response('Title : PB and Jams');
    }
    
    #[Route('/browse/{slog}')]
    public function brows($slog):Response 
    {   
        $title = str_replace('-',' ',$slog);
        return new Response('Genre: '.$title) ;   
    
    }

}