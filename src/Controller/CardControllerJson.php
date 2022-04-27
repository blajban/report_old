<?php

namespace App\Controller;

use App\CardGame\Deck\Deck;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CardControllerJson
{
    /**
     * @Route("/card/api/deck")
     */
    public function deck(): Response
    {
        $deck = new Deck();
        $cards = $deck->getDeck();

        $data = [
            'deck' => [
                'card' => $cards,
                'string_repr' => []
            ]
        ];


        foreach ($cards as $card) {
            $data['deck']['string_repr'][] = $card->asString();
        }

        return new JsonResponse($data);
    }

}