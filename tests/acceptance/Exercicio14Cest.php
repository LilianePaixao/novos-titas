<?php

class Exercicios14Cest
{
    
    public function Chico(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio14a');
        $I->see('Exercício 14');
        //Numbers 110 and 150
        $I->fillField('numero', '110');
        $I->fillField('numero1', '150');
        $I->click("enviar");
        $I->see('Serão necessários 41, para que Juca seja maior que Chico' );
        //Numbers 150 and 110
        $I->fillField('numero', '150');
        $I->fillField('numero1', '110');
        $I->click("enviar");
        $I->see('Serão necessários 0, para que Juca seja maior que Chico ' );
        //Numbers 100 and 110
        $I->fillField('numero', '100');
        $I->fillField('numero1', '110');
        $I->click("enviar");
        $I->see('Serão necessários 11, para que Juca seja maior que Chico ' );
    }
}
