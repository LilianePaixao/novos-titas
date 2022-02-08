<?php

class Exercicio4Cest
{
    // Entre na página
    public function CheckIndex(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Índice');
    }

    //números 3, 4 e 5
    public function exercici4(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio4');
        $I->see('Exercício 4');
        //Preenche com 3
        $I->fillField('n1', '3');
        //Preenche com 4
        $I->fillField('n2', '4');
        //Preenche com 5
        $I->fillField('n3', '5');
        $I->click("Enviar");
        $I->see('Os números informados em ordem decrescente são 5,4 e 3');
        
    }
    ///números 5, 4 e 3
    public function exercici4Acept(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio4');
        $I->see('Exercício 4');
        //Preenche com 5
        $I->fillField('n1', '5');
        //Preenche com 4
        $I->fillField('n2', '4');
        //Preenche com 3
        $I->fillField('n3', '3');
        $I->click("Enviar");
        $I->see('Os números informados em ordem decrescente são 5,4 e 3');
        
    }
    ///números 4, 5 e 3
    public function exercici4NotAcept(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio4');
        $I->see('Exercício 4');
        //Preenche com 4
        $I->fillField('n1', '4');
        //Preenche com 5
        $I->fillField('n2', '5');
        //Preenche com 3
        $I->fillField('n3', '3');
        $I->click("Enviar");
        $I->see('Os números informados em ordem decrescente são 5,4 e 3');
        
    }
    ///números 4, 3 e 5 - esse tinha dado errado
    public function exercici4t(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio4');
        $I->see('Exercício 4');
        //Preenche com 4
        $I->fillField('n1', '4');
        //Preenche com 3
        $I->fillField('n2', '3');
        //Preenche com 5
        $I->fillField('n3', '5');
        $I->click("Enviar");
        $I->see('Os números informados em ordem decrescente são 5,4 e 3');
        
    }
}
