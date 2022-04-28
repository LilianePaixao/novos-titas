<?php

class Exercicios18Cest
{
    
    public function diffArrays(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio18');
        $I->see('Exercício 18');
        //first fill
        $I->fillField('numbers1','1,2');
        $I->fillField('numbers2','-1,1,2');
        $I->click('enviar');
        $I->seeInDatabase('exercicio18', ['numbers1' =>'1,2', 'numbers2'=>'-1,1,2', 'result' => ' ,-1']);
    }
}