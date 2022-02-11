<?php

class Exercicios9Cest
{
    
    public function wordSol(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio9');
        $I->see('Exercício 9');
        //Number 2
        $I->fillField('numero', '2');
        $I->click("enviar");
        $I->see('SOL
        SOL');
       //Number zero 
       $I->fillField('numero', '0');
       $I->click("enviar");
       $I->see('Informe um número inteiro e positivo');
       //Negatives numbers
       $I->fillField('numero', '-1');
       $I->click("enviar");
       $I->see('Informe um número inteiro e positivo');
    }
}
