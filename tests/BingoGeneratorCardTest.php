<?php
use PHPUnit\Framework\TestCase;

class BingoGeneratorCardTest extends TestCase {
    public function testCardContainsValidNumbers(){
        $generator = new BingoGeneratorCard();
        $card = $generator->generate();

        $this->assertTrue($card->isValid());
    }

}