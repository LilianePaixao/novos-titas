<?php

class Exercicio8Cest
{
    
    public function redUntilNumber(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio8');
        $I->see('Exercício 8');
        //Fill number 0
        $I->fillField('numero', '0');
        $I->click("Enviar");
        $I->see('Informe um número inteiro e positivo');
        //Fill number -1
        $I->fillField('numero', '-1');
        $I->click("Enviar");
        $I->see('Informe um número inteiro e positivo');
        //Fill number 2
        $I->fillField('numero', '2');
        $I->click("Enviar");
        $I->see('1
        2
        2 x 0 = 0
        2 x 1 = 2
        2 x 2 = 4        
        ');
    }    
}
