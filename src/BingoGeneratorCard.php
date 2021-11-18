<?php

use JetBrains\PhpStorm\Pure;
use Models\Card;

class BingoGeneratorCard
{
    private array $grid = [
        'B' => [],
        'I' => [],
        'N' => [],
        'G' => [],
        'O' => [],
    ];

    #[Pure] public function generate(): Card
    {
        $this->grid['B'] = $this->generateColumnBoundaries(1,15);
        $this->grid['I'] = $this->generateColumnBoundaries(16, 30);
        $this->grid['N'] = $this->generateColumnBoundaries(31, 45);
        $this->grid['G'] = $this->generateColumnBoundaries(46, 60);
        $this->grid['O'] = $this->generateColumnBoundaries(61, 75);

        $this->grid['N'] = null;
        return new Card($this->grid);
    }

    public function generateColumnBoundaries($min, $max): array
    {
        $column = [];
        while (sizeof($column) < 5) {
            $number = rand($min, $max);

            if (!in_array($number, $column)) {
                $column[] = $number;
            }
        }
        return $column;
    }
}