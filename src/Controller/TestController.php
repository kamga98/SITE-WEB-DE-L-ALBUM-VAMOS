<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


final class TestController extends AbstractController
{
   
     /**    
     * @Route("/", name="home")
     */ 
    public function index(): Response
    {  
   
    //    $album = [
    //         'artist' => 'Global Star',
    //         'title' => 'Rise of a Legend',
    //         'year' => 2026,
    //         'cover' => 'https://via.placeholder.com/500',
    //         'tracks' => [
    //             ['name' => 'Intro', 'duration' => '1:12'],
    //             ['name' => 'The Journey', 'duration' => '3:45'],
    //             ['name' => 'Success Story', 'duration' => '4:20'],
    //             ['name' => 'World Stage', 'duration' => '3:58'],
    //             ['name' => 'Legacy', 'duration' => '5:10'],
    //         ]
    //     ];
   
       // return $this->render('album/show.html.twig', $album);

        return $this->render('album/show.html.twig');


        // return $this->json([   
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/TestController.php',
        // ]);
    }
}  
