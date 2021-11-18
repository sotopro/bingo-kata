<?php

use Models\Card;

class BingoGeneratorCard
{
    private $card = [
        'B' => [],
        'I' => [],
        'N' => [],
        'G' => [],
        'O' => [],
    ];

    public function generate(): Card
    {
        return new Card($this->card);
    }
}