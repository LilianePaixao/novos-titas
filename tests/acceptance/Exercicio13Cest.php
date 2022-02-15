<?php

class Exercicios13Cest
{
    
    public function numberInput(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio13');
        $I->see('Exercício 13');
        //Numbers 1-2-100-200-300-150
        $I->fillField('numero', '1-2-100-200-300-150');
        $I->click("enviar");
        $I->see('A quantidade de números entre 100 e 200 é 3');
        //Numbers 0
        $I->fillField('numero', '0');
        $I->click("enviar");
        $I->see('Execução do programa parada
        A quantidade de números entre 100 e 200 é 0');
    }
}