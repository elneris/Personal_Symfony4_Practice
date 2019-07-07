<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     * @return Response
     */
    public function number()
    {
        $number = rand(0, 100);

        /*
         * retourne une réponse sans twig
         * return new Response(
         * '<html><body>Lucky number : ' . $number . '</body></html>'
         * );
         */

        return $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);
    }
}
