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

        return $this->render('card.html.twig', [
            'title' => "Card",
            'deck' => $deck->getDeck()
        ]);
    }

    /**
     * @Route("/card/deck")
     */
    public function deck(): Response
    {
        $deck = new Deck();

        return $this->render('card.html.twig', [
            'title' => "Card",
            'deck' => $deck->getDeck()
        ]);
    }

    /**
     * @Route("/card/deck/shuffle")
     */
    public function shuffled(): Response
    {
        $deck = new Deck();

        $deck->shuffleDeck();

        return $this->render('card.html.twig', [
            'title' => "Card",
            'deck' => $deck->getDeck()
        ]);
    }

}
