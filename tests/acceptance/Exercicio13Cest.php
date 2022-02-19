<?php

class Exercicios13Cest
{
    
    public function triangleType(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio13');
        $I->see('Exercício 13');
        //Number 0
        $I->fillField('numero', '0');
        $I->click("enviar");
        $I->see('Você informou o número 0, por isso a execução foi parada        
        ');
        //diferents numbers
        //Number 
        $I->fillField('numero', '1,2,3,100,150,200');
        $I->click("enviar");
        $I->see('A quantidade de números entre 100 e 200 é 3        
        ');
    }
}
