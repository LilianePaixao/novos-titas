<?php

class Exercicios17Cest
{
    
    public function parsNumbers(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio17');
        $I->see('Exercício 17');
        $I->fillField('numerosDigitados', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20    
        ');
        $I->click("enviar");
        $I->see('O maior número é 20A média será210 ' );
    }
}