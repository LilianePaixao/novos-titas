<?php

class Exercicio3Cest
{
    // Entre na página
    public function CheckIndex(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Índice');
    }

    //Feminino com 25 anos
    public function exercici3Not(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Preenche o nome
        $I->fillField('name', 'Liliane');
        //checkbox feminino
        $I->selectOption('sexo','mulher');
        //Preenche a idade
        $I->fillField('idade', '25');
        $I->click("Enviar");
        $I->see('Não aceita');
        
    }
    //Feminino com 24 anos
    public function exercici3Acept(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Preenche o nome
        $I->fillField('name', 'Liliane');
        //checkbox feminino
        $I->selectOption('sexo','mulher');
        //Preenche a idade
        $I->fillField('idade', '24');
        $I->click("Enviar");
        $I->see('aceita');
        
    }
    //Masculino com 24 anos
    public function exercici3NotAcept(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Preenche o nome
        $I->fillField('name', 'João');
        //checkbox feminino
        $I->selectOption('sexo','homem');
        //Preenche a idade
        $I->fillField('idade', '24');
        $I->click("Enviar");
        $I->see('Não aceita');
        
    }
    //Masculino com 25 anos
    public function exercici3NotAcept25(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Preenche o nome
        $I->fillField('name', 'João');
        //checkbox feminino
        $I->selectOption('sexo','homem');
        //Preenche a idade
        $I->fillField('idade', '25');
        $I->click("Enviar");
        $I->see('Não aceita');
        
    }
    //Masculino com 26 anos
    public function exercici3NotAcept26(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Preenche o nome
        $I->fillField('name', 'João');
        //checkbox feminino
        $I->selectOption('sexo','homem');
        //Preenche a idade
        $I->fillField('idade', '26');
        $I->click("Enviar");
        $I->see('Não aceita');
        
    }
}
