<?php

namespace App\Deck;

use App\Card\Card;

interface DeckInterface
{
    public function __construct();
    public function getDeck(): array;
    public function sortDeck();
    public function resetDeck();
    public function isEmpty(): bool;
    public function remainingCards(): int;
    public function drawCard(): Card;
    public function peek(): Card;
    public function shuffleDeck();
}

class Deck implements DeckInterface
{
    private $deck = [];

    public function __construct()
    {
        for ($i = 1; $i < 14; $i++) {
            $this->deck[] = new Card($i, Card::HEARTS);
            $this->deck[] = new Card($i, Card::TILES);
            $this->deck[] = new Card($i, Card::SPADES);
            $this->deck[] = new Card($i, Card::CLUBS);
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

    public function resetDeck()
    {
        // TODO
    }

    public function isEmpty(): bool
    {
        if ($this->remainingCards() > 0) {
            return false;
        }

        return true;
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

