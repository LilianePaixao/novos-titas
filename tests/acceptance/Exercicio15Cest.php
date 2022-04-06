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
        $I->fillField('tempo_perda', '40');
        $I->click("enviar");
        $I->see('Serão necessários 0.66666666666667 minuto(s), para que a massa do material seja menor que 0.10 gramas.' );
        //Numbers 100 and 50%
        $I->fillField('massa', '100');
        $I->fillField('perda', '50');
        $I->fillField('tempoPerda', '60');
        $I->click("enviar");
        $I->see('Serão necessários 10 minuto(s), para que a massa do material seja menor que 0.10 gramas. ' );
        //Numbers -10 and 40% and time 60
        $I->fillField('massa', '-10');
        $I->fillField('perda', '40');
        $I->fillField('tempoPerda', '60');
        $I->click("enviar");
        $I->see('Serão necessários 0 minuto(s), para que a massa do material seja menor que 0.10 gramas. ' );
        #Database test
        $I->seeInDatabase('Cientistas', ['id' => '14', 'massa' => '0.1', 'perda'=>'40', 'tempo_perda' => '60']);
    }
}