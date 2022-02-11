<?php

class Exercicios10Cest
{
    
    public function Input20Numbers(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio10');
        $I->see('Exercício 10');
        //same numbers
        $I->fillField('numeros', '1,2,3,4,5,6,7,8,9,0,-1,-2,-3,-4,-5,-6,-7,-8,-9');
        $I->click("Enviar");
        $I->see('A soma dos números positivos é 45
        A quantidade de números negativos é 9
        A quantidade de zeros informados é 1');
    }
    
}
