<?php

namespace App\Deck;

use App\Card\Card;

use const App\Card\HEARTS;
use const App\Card\TILES;
use const App\Card\SPADES;
use const App\Card\CLUBS;

class Deck
{
    private $deck = [];

    public function __construct()
    {
        for ($i = 1; $i < 14; $i++) {
            $this->deck[] = new Card($i, HEARTS);
            $this->deck[] = new Card($i, TILES);
            $this->deck[] = new Card($i, SPADES);
            $this->deck[] = new Card($i, CLUBS);
        }
    }

    public function getDeck(): array
    {
        return $this->deck;
    }

    public function sortDeck()
    {
        // TODO
    }

    public function remainingCards(): int
    {
        return count($this->deck);
    }

    public function drawCard(): Card
    {
        $cardToDraw = $this->peek();
        array_pop($this->deck);
        return $cardToDraw;
    }

    public function peek(): Card
    {
        return end($this->deck);
    }

    public function shuffleDeck()
    {
        shuffle($this->deck);
    }
}

