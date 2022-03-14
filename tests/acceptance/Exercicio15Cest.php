<?php

class Exercicios15Cest
{
    
    public function ReductionOfMas(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio15');
        $I->see('Exercício 15');
        //Numbers 0.10 and 25%
        $I->fillField('massa', '0.10');
        $I->fillField('perda', '25');
        $I->click("enviar");
        $I->see('Serão necessários 1 minutos, ' );
        //Numbers 0.2 and 25%
        $I->fillField('massa', '0.20');
        $I->fillField('perda', '25');
        $I->click("enviar");
        $I->see('Serão necessários 3 minutos, ' );
    }
}