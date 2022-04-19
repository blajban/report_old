<?php

namespace App\Card;

class Card
{
    private $cardNames = [
        1 => 'Ess',
        2 => 'Två',
        3 => 'Tre',
        4 => 'Fyra',
        5 => 'Fem',
        6 => 'Sex',
        7 => 'Sju',
        8 => 'Åtta',
        9 => 'Nio',
        10 => 'Tio',
        11 => 'Knekt',
        12 => 'Dam',
        13 => 'Kung',
        14 => 'Ess'
    ];
    private $value;
    private $color;

    public function __construct(int $value, string $color)
    {
        $this->value = $value;
        $this->color = $color;
    }

    public function asString(): string
    {
        return "{$this->color} {$this->cardNames[$this->value]} ({$this->value} poäng)";
    }

    public function isAce(): bool
    {
        switch ($this->value) {
            case 1: return true; break;
            case 14: return true; break;
            default: return false; break;
        }
    }

    public function changeAceValue()
    {
        switch ($this->value) {
            case 1: $this->value = 14; break;
            case 14: $this->value = 1; break;
            default: break;
        }
    }

    public function getValue(): int
    {
        return $this->value;
    }
}

class HeartsCard extends Card
{
    public function __construct(int $value)
    {
        parent::__construct($value, "Hjärter");
    }
}

class TilesCard extends Card
{
    public function __construct(int $value)
    {
        parent::__construct($value, "Ruter");
    }
}

class ClubsCard extends Card
{
    public function __construct(int $value)
    {
        parent::__construct($value, "Klöver");
    }
}

class SpadesCard extends Card
{
    public function __construct(int $value)
    {
        parent::__construct($value, "Spader");
    }
}

