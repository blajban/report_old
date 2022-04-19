<?php

namespace App\Controller;

use App\Deck\Deck;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class CardController extends AbstractController
{
    /**
     * @Route("/card")
     */
    public function card(): Response
    {

        $deck = new Deck();


        return $this->render('report.html.twig', [
            'title' => "Card",
            'heading' => "En lek",
            'content' => var_dump($deck->remainingCards())
        ]);
    }

}
