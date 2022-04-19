<?php

namespace App\Deck;

use App\Card\ClubsCard;
use App\Card\HeartsCard;
use App\Card\SpadesCard;
use App\Card\TilesCard;
use App\Card\Card;

class Deck
{
    private $deck = [];

    public function __construct()
    {
        for ($i = 1; $i < 14; $i++) {
            $this->deck[] = new HeartsCard($i);
            $this->deck[] = new TilesCard($i);
            $this->deck[] = new ClubsCard($i);
            $this->deck[] = new SpadesCard($i);
        }
    }

    public function getDeck(): array
    {
        return $this->deck;
    }

    public function remainingCards(): int
    {
        return count($this->deck);
    }

    public function drawCards(int $numberToDraw): Card
    {
        //TODO
    }

    public function shuffle()
    {
        // TODO
    }
}

