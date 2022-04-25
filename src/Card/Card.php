<?php

namespace App\Card;


interface FrenchEnglishCardInterface
{
    const HEARTS = 1;
    const SPADES = 2;
    const CLUBS = 3;
    const TILES = 4;

    const CARDNAMES = [
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
    const COLORNAMES = [
        1 => "Hjärter",
        2 => "Spader",
        3 => "Klöver",
        4 => "Ruter"
    ];
    const CSSCOLORS = [
        1 => "hearts",
        2 => "spades",
        3 => "clubs",
        4 => "tiles"
    ];

    public function __construct(int $value, int $colorEnum);
    public function asString(): string;
    public function isAce(): bool;
    public function changeAceValue();
    public function getValue(): int;
    public function getCssColor(): string;
}


class Card implements FrenchEnglishCardInterface
{
    private $value;
    private $color;

    public function __construct(int $value, int $colorEnum)
    {
        $this->value = $value;
        $this->color = $colorEnum;
    }

    public function asString(): string
    {
        return "{Card::COLORNAMES[$this->color]} {Card::CARDNAMES[$this->value]} ({$this->value} poäng)";
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

    public function getCssColor(): string {
        return Card::CSSCOLORS[$this->color];
    }
}
