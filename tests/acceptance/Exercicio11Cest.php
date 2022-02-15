<?php

class Exercicios11Cest
{
    
    public function tabuada(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio11');
        $I->see('Exercício 11');
        //Tabuada 2
        $I->fillField('numero', '2');
        $I->click("Enviar");
        $I->see('2 x 0 = 0
        2 x 1 = 2
        2 x 2 = 4
        2 x 3 = 6
        2 x 4 = 8
        2 x 5 = 10
        2 x 6 = 12
        2 x 7 = 14
        2 x 8 = 16
        2 x 9 = 18
        2 x 10 = 20');
        //Tabuada 0
        $I->fillField('numero', '0');
        $I->click("Enviar");
        $I->see('0 x 0 = 0
        0 x 1 = 0
        0 x 2 = 0
        0 x 3 = 0
        0 x 4 = 0
        0 x 5 = 0
        0 x 6 = 0
        0 x 7 = 0
        0 x 8 = 0
        0 x 9 = 0
        0 x 10 = 0'); 
        
    }
}
