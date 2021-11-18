<?php

class BingoWinner
{
    public static function isWinner(BingoCaller $caller, Card $card): bool
    {
        $cardNumbers= $card->getNumbersCard();

        foreach ($cardNumbers as $cardNumber) {
            if(is_null($cardNumber))
                continue;
            if(!$caller->hasCalledNumber($cardNumbers)){
                return false;
            }
        }
        return true;
    }
}