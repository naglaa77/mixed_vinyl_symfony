<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SongController extends AbstractController {

   
     #[Route('/api/songs/{id<\d+>}' , methods:['GET'])]
    
    public function getSong(int $id, LoggerInterface $Logger ): Response
    {
            
        // TODO Query the database
        $song = [
            'id'=>$id,
            'name'=> 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com.sample.mp3'   

        ];
        $Logger->info('return Apis {song}', [

        'song'=>$id,
        ]);
        return $this->json($song);

    }
}