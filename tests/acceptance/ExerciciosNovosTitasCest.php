<?php

class ExerciciosNovosTitasCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function indiceWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Índice');
    }

    public function exercici1Works(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio1');
        $I->see('Exercício 1');
        //Test sum 8
        $I->fillField('n1', '17');
        $I->fillField('n2', '4');
        $I->click("Enviar");
        $I->see('29');
        //Test subtract 5
        $I->fillField('n1', '15');
        $I->fillField('n2', '5');
        $I->click("Enviar");
        $I->see('15');
    }
}
