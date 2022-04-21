<?php

class Exercicios18Cest
{
    
    public function diffArrays(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio18');
        $I->see('Exercício 18');
        //first fill
        $I->fillField('numbers1', '1,2,3,4,5,6,7,8,9,0');
        $I->fillField('numbers2', '-1,-2,-3,-5,-7,-9,10,11,15,16');
        $I->click("enviar");
        $I->seeInDatabase('exercicio18', ['numbers1' => '1,2,3,4,5,6,7,8,9,0', 'numbers2'=>'-1,-2,-3,-5,-7,-9,10,11,15,16', 'result' => '1,2,3,4,5,6,7,8,9,0,-1,-2,-3,-5,-7,-9,10,11,15,16']);
    }
}