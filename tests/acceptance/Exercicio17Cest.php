<?php

class Exercicios17Cest
{
    
    public function parsNumbers(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio17');
        $I->see('Exercício 17');
        //positive numbers
        $I->fillField('numerosDigitados', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20    
        ');
        $I->click("enviar");
        $I->see('O menor número informado é 1. O maior número informado é 20. A média será 10.5. A porcentagem de números pares é 50 %.' );
        //negative numbers
        $I->fillField('numerosDigitados', '-1,-2,-3,-4,-5,-6,-7,-8,-9,10,11,12,13,14,15,16,17,18,19,20');
        $I->click("enviar");
        $I->see('Os números informados devem ser positivos.' );
        //zero number
        $I->fillField('numerosDigitados', '0,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20');
        $I->click("enviar");
        $I->see('Os números informados devem ser positivos.' );
    }
}