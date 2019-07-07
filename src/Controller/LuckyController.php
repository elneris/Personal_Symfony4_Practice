<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("/lucky/number")
     * @return Response
     */
    public function number()
    {
        $number = rand(0, 100);

        return new Response(
            '<html><body>Lucky number : ' . $number . '</body></html>'
        );
    }
}
