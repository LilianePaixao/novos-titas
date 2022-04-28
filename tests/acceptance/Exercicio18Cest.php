<?php

class Exercicios18Cest
{
    
    public function diffArrays(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio18');
        $I->see('Exercício 18');
        //first fill
        $I->fillField('numbers1','1,2,3,4,5,6,7,8,9,10');
        $I->fillField('numbers2','-1,1,2,3,4,5,6,7,8,9');
        $I->click('enviar');
        $I->seeInDatabase('exercicio18', ['numbers1' =>'1,2,3,4,5,6,7,8,9,10', 'numbers2'=>'-1,1,2,3,4,5,6,7,8,9', 'result' => '10   -1']);
        //second fill
        $I->fillField('numbers1','1,4,7,8,9,10,11,12,13,14');
        $I->fillField('numbers2','-1,-2,-3,-5,-7,-9,10,11,15,16');
        $I->click('enviar');
        $I->seeInDatabase('exercicio18', ['numbers1' =>'1,4,7,8,9,10,11,12,13,14', 'numbers2'=>'-1,-2,-3,-5,-7,-9,10,11,15,16', 'result' => '1,4,7,8,9,12,13,14   -1,-2,-3,-5,-7,-9,15,16']);
        //second fill
        $I->fillField('numbers1','1,4,7,8,9,10,11,12,13,14');
        $I->fillField('numbers2','1,4,7,8,9,10,11,12,15,16');
        $I->click('enviar');
        $I->seeInDatabase('exercicio18', ['numbers1' =>'1,4,7,8,9,10,11,12,13,14', 'numbers2'=>'1,4,7,8,9,10,11,12,15,16', 'result' => '13,14   15,16']);
    }
}