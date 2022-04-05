<?php

class Exercicios16Cest
{
    
    public function numbersParesAndImpares(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio16');
        $I->see('Exercício 16');
        // positive numbers
        $I->fillField('numerosDigitados', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15');
        $I->click("enviar");
        $I->see('Os números pares são Array ( [0] => 2 [1] => 4 [2] => 6 ' );
        $I->see('Os números ímpares são Array ( [0] => 1 [1] => 3 [2] => 5 ' );
        // negative numbers
        $I->fillField('numerosDigitados', '-1,-2,-3,-4,-5,-6,-7,-8,-9,10,11,12,13,14,15');
        $I->click("enviar");
        $I->see('Os números informados devem ser positivos' );
        #Database test
        $I->seeInDatabase('Numeros', ['id' => '40', 'numeros_digitados' => '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15', 'numeros_pares'=>'2,4,6,8,10,12,14', 'numeros_impares' => '1,3,5,7,9,11,13,15']);
    }
}
