<?php 

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController {
    #[Route('/' )]
    public function homePage() : Response {
        return new Response ("Hello <strong>World</strong> !") ;
    }
}