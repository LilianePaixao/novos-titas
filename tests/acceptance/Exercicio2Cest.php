<?php

class Exercicios2Cest
{
    // tests
    public function CheckIndex(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Índice');
    }

    public function exercici1Works(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio2');
        $I->see('Exercício 2');
        //Divided 2
        $I->fillField('numerodigitado', '2');
        $I->click("Enviar");
        $I->see('2 é divisível por 2');
        $I->fillField('numerodigitado', '5');
        $I->click("Enviar");
        $I->see('5 é divisível por 5');
        $I->fillField('numerodigitado', '10');
        $I->click("Enviar");
        $I->see('10 é divisível por 2, por 5 e 10');
        $I->fillField('numerodigitado', '45');
        $I->click("Enviar");
        $I->see('45 é divisível por 5');
        $I->fillField('numerodigitado', '39');
        $I->click("Enviar");
        $I->see('39 não é divisível por 10, por 5, nem por 2');
    }
}
