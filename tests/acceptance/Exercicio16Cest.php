<?php

class Exercicios16Cest
{
    
    public function numbersParesAndImpares(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio16');
        $I->see('Exercício 16');
        // negative numbers
        $I->fillField('numeros_digitados', '-1,-2,-3,-4,-5,-6,-7,-8,-9,10,11,12,13,14,15');
        $I->click("enviar");
        $I->see('Os números informados devem ser positivos' );
        // positive numbers
        $I->fillField('numeros_digitados', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15');
        $I->click("enviar");
        // Database test
        $I->seeInDatabase('exercicio16', ['id' => '23', 'numeros_digitados' => '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15', 'numeros_pares'=>'2,4,6,8,10,12,14', 'numeros_impares' => '1,3,5,7,9,11,13,15']);
    }
}
