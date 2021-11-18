<?php

class BingoCaller
{
    private array $numbers = [];

    public  function __construct()
    {
    }
    public function callNumber(): int
    {
        do {
            $number = rand(1, 75);
        } while(in_array($number, $this->numbers));

        $this->numbers[] = $number;
        return $number;
    }
}