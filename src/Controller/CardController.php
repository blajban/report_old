<?php

namespace App\Controller;

use App\Deck\Deck;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class CardController extends AbstractController
{
    /**
     * @Route("/card")
     */
    public function card(): Response
    {
        return $this->render('card.html.twig', [
            'title' => "Card"
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
            'displayed_deck' => $deck->getDeck()
        ]);
    }

    /**
     * @Route("/card/deck/shuffle")
     */
    public function shuffled(SessionInterface $session): Response
    {
        $deck = new Deck();

        $deck->shuffleDeck();
        
        $session->set("deck", $deck);
        

        return $this->render('card.html.twig', [
            'title' => "Card",
            'displayed_deck' => $deck->getDeck()
        ]);
    }

    /**
     * @Route("/card/deck/draw")
     */
    public function draw(SessionInterface $session): Response
    {
        $deck = $session->get("deck") ?? new Deck();

        if ($deck->isEmpty()) {
            $cardDrawn = $session->get("last_card");
        } else {
            $cardDrawn = $deck->drawCard();
            $session->set("last_card", $cardDrawn);
        }
        
        $session->set("deck", $deck);

        return $this->render('card.html.twig', [
            'title' => "Card",
            'deck' => $deck->getDeck(),
            'drawn_card' => $cardDrawn,
            'remaining_cards' => $deck->remainingCards()
        ]);
    }

    /**
     * @Route("/card/deck/draw/:number")
     */
    public function drawMany(Request $request, SessionInterface $session): Response
    {
        $deck = $session->get("deck") ?? new Deck();

        $cardsToDraw = $request->request->get('number');
        $cardsDrawn = [];

        if ($deck->isEmpty()) {
            $cardsDrawn = $session->get("cards_drawn");
        } else {
            for ($i = 0; $i < $cardsToDraw; $i++) {
                $cardsDrawn[] = $deck->drawCard();
            }
            $session->set("cards_drawn", $cardsDrawn);
        }
        
        $session->set("deck", $deck);

        return $this->render('card.html.twig', [
            'title' => "Card",
            'deck' => $deck->getDeck(),
            'drawn_cards' => $cardsDrawn,
            'remaining_cards' => $deck->remainingCards()
        ]);
    }

}
