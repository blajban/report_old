<?php

namespace App\CardHand;

use App\Card\Card;


interface CardHandInterface
{
    public function __construct();
    public function addCards(Card $card);
    public function showHand();
}


class CardHand implements CardHandInterface
{
    private $hand;

    public function __construct()
    {

    }

    public function addCards(Card $card)
    {
        $this->hand[] = $card;
    }

    public function showHand(): array
    {
        return $this->hand;
    }
}
