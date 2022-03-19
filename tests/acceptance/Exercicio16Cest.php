<?php

class Exercicios16Cest
{
    
    public function numbersParesAndImpares(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio16');
        $I->see('Exercício 16');
        //Numbers 150 and 110
        $I->fillField('numerosDigitados', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15');
        $I->click("enviar");
        $I->see('Os números pares são Array ( [0] => 2 [1] => 4 [2] => 6 ' );
    }
}
