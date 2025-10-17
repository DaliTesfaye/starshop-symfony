<?php 

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class MainController extends AbstractController {
    #[Route('/' )]


    public function homePage() : Response {

        $starShipsCount = 457;
        $myShips = [
            "name" => "Millenium Falcon",
            "class" => "Light freighter",
            "captain" => "Han Solo",
            "status" => "Docked",
        ];
        return $this->render('main/homePage.html.twig' , [
            'numberOfShips' => $starShipsCount,
            'ships' => $myShips,
        ]);
    }
}