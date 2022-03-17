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
        $I->fillField('tempoPerda, 40');
        $I->click("enviar");
        $I->see('Serão necessários 0.66666666666667 minutos ' );
        //Numbers 100 and 50%
        $I->fillField('massa', '100');
        $I->fillField('perda', '50');
        $I->fillField('tempoPerda, 60');
        $I->click("enviar");
        $I->see('Serão necessários 10 minutos, ' );
    }
}