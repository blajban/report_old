<?php

namespace App\Deck;

use App\Card\Card;


class Deck
{
    private $deck = [];

    public function __construct()
    {
        for ($i = 1; $i < 14; $i++) {
            $this->deck[] = new Card($i, "Hjärter");
            $this->deck[] = new Card($i, "Ruter");
            $this->deck[] = new Card($i, "Spader");
            $this->deck[] = new Card($i, "Klöver");
        }

        $this->shuffleDeck();
    }

    public function getDeck(): array
    {
        return $this->deck;
    }

    public function getSortedDeck(): array
    {
        // TODO
        return [];
    }

    public function remainingCards(): int
    {
        return count($this->deck);
    }

    public function drawCards(int $numberToDraw): array
    {
        // TODO
        return [];
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

