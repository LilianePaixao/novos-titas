<?php

class Exercicios14Cest
{
    
    public function studentsRegisterTests(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio14');
        $I->see('Exercício 14');
        //Numbers 150 and 110
        $I->fillField('higth1', '150');
        $I->fillField('growth1','2');
        $I->fillField('higth2', '110');
        $I->fillField('growth2','3');
        $I->click("enviar");
        $I->see('Serão necessários 41,' );
        //Numbers 110 and 150
        $I->fillField('higth1', '110');
        $I->fillField('growth1','2');
        $I->fillField('higth2', '150');
        $I->fillField('growth2','3');
        $I->click("enviar");
        $I->see('Serão necessários 0' );
        //Numbers 0 and 0
        $I->fillField('higth1', '0');
        $I->fillField('growth1','2');
        $I->fillField('higth2', '0');
        $I->fillField('growth2','3');
        $I->click("enviar");
        $I->see('Infome os dados que se pedem. ' );
        //Numbers 0 and 0
        $I->fillField('higth1', '0');
        $I->fillField('growth1','0');
        $I->fillField('higth2', '0');
        $I->fillField('growth2','0');
        $I->click("enviar");
        $I->see('Infome os dados que se pedem. ' );
    }
}
