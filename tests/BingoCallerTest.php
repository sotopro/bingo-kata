<?php
use PHPUnit\Framework\TestCase;
use src\BingoCaller;

class BingoCallerTest extends TestCase {
    public function testCallNumbersInValidRange(){
        $caller = new BingoCaller;
        $number = $caller->callNumber();
        $this->assertTrue($number >= 1 && $number <=75);
    }

    public function testCall75Times(){
        $caller = new BingoCaller();
        $calledNumbers = [];
        $expectedNumbers = range(1, 75);

        for($i=1; $i<=75; ++$i){
            $calledNumbers[] = $caller->callNumber();
        }

        sort($calledNumbers);

        $this->assertEquals($expectedNumbers, $calledNumbers);
    }
}