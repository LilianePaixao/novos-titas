<?php

class Exercicios17Cest
{
    
    public function parsNumbers(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio17');
        $I->see('Exercício 17');
        //positive numbers
        $I->fillField('numeros_digitados', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20');
        $I->click("enviar");
        $I->seeInDatabase('exercicio17', ['numeros_digitados' => '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', 'menorNumero' => '1', 'maiorNumero'=>'20', 'media'=> '10.5', 'porcentagem'=>'50']);
        // with zero number
        $I->fillField('numeros_digitados', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19');
        $I->click("enviar");
        $I->seeInDatabase('exercicio17', ['numeros_digitados' => '0,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19', 'menorNumero' => '0', 'maiorNumero'=>'19', 'media'=> '9.45', 'porcentagem'=>'50']);
        //negative numbers
        $I->fillField('numeros_digitados', '-1,-2,-3,-4,-5,-6,-7,-8,-9,10,11,12,13,14,15,16,17,18,19,20');
        $I->click("enviar");
        $I->see('Os números informados devem ser positivos.' );
    }
}