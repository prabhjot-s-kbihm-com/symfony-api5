<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/* IF NEED HTML RENDERING WITH TEMPLATE START*/
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/* IF NEED HTML RENDERING WITH TEMPLATE END*/

/* IF NEED HTML RENDERING WITH TEMPLATE START*/
// class LuckyController extends AbstractController 
/* IF NEED HTML RENDERING WITH TEMPLATE END*/
class LuckyController
{
    /**
    * @Route("/lucky/number")
    */
    public function number()
    {
        /* IF NEED HTML RENDERING WITH TEMPLATE START*/
        // $number = random_int(0, 100);

        // return $this->render('lucky/number.html.twig', [
        //     'number' => $number,
        // ]);
        /* IF NEED HTML RENDERING WITH TEMPLATE END*/

        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
