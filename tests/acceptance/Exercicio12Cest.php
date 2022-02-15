<?php

class Exercicios12Cest
{
    
    public function printSonho(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio12');
        $I->see('Exercício 12');
        //Number 2
        $I->fillField('numero', '2');
        $I->click("Enviar");
        $I->see('SONHO
        SONHO SONHO');
        //Number 0
        $I->fillField('numero', '0');
        $I->click("Enviar");
        $I->see(''); 
        
    }
}