<?php

class Exercicios19Cest
{
    
    public function printDiagonalMatrix(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio19');
        $I->see('Exercício 19');
        //positive numbers
        $I->fillField('array','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25');
        $I->click("enviar");
        $I->seeInDatabase('exercicio19', ['array' =>'1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25', 'firstPosition' => '1', 'secondPosition'=>'7', 'thirdPosition'=> '13', 'fourthPosition'=>'19', 'fifthPosition'=>'25']);
    }
}