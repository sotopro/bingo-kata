<?php namespace Models;

use JetBrains\PhpStorm\Pure;
use function PHPUnit\Framework\isNan;
use function PHPUnit\Framework\isNull;

class Card {
    private $grid;
    public function __construct($grid) {
        $this->grid = $grid;
    }

    public function isValid() : bool{
        return $this->hasValidSize() && $this->limitBoundaries();
    }
    private function  hasValidSize() : bool{
        foreach ($this->grid as $column){
            if(sizeof($column) !== 5)
                return false;
        }
        return true;
    }
    #[Pure] private function  limitBoundaries() : bool{
        return
            $this->columnHasElementsBetweenRange($this->grid['B'], 1, 15)
            && $this->columnHasElementsBetweenRange($this->grid['I'], 16, 30)
            && $this->columnHasElementsBetweenRange($this->grid['N'], 31, 45, true)
            && $this->columnHasElementsBetweenRange($this->grid['G'], 46, 60)
            && $this->columnHasElementsBetweenRange($this->grid['O'], 61, 75);

    }

    private function columnHasElementsBetweenRange($column, $min, $max, $hasNull=false) : bool {
        foreach ($column as $number) {
            if($hasNull && is_null($number))
                continue;
            if($number < $min || $number > $max)
                return false;
        }
        return true;
    }

    public function hasFreeSpace(): \PHPUnit\Framework\Constraint\IsNull
    {
        return isNull($this->grid['N'][2]);
    }
}