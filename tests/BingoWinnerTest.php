<?php
use PHPUnit\Framework\TestCase;

class BingoWinnerTest extends TestCase {
    public function testIsNotWinner(){
        $caller = new BingoCaller();
        $card = (new BingoGeneratorCard())->generate();

        for ($i=1; $i<=20; ++$i){
            $caller->callNumber();
        }

        $this->assertFalse(BingoWinner::isWinner($caller, $card));
    }

    public function testIsWinner() {
        $caller = new BingoCaller();
        $card = (new BingoGeneratorCard())->generate();

        for ($i=1; $i<=75; ++$i){
            $caller->callNumber();
        }

        $this->assertTrue(BingoWinner::isWinner($caller, $card));
    }

}