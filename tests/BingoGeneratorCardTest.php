<?php
use PHPUnit\Framework\TestCase;

class BingoGeneratorCardTest extends TestCase {
    public function testCardContainsValidNumbersColumnBoundaries(){
        $generator = new BingoGeneratorCard();
        $card = $generator->generate();

        $this->assertTrue($card->isValid());
    }
    public function testCardHasFreeSpace(){
        $generator = new BingoGeneratorCard();
        $card = $generator->generate();

        $this->assertTrue($card->hasFreeSpace());
    }

}