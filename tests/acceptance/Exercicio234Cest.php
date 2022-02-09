<?php

class Exercicios2Cest
{
    
    public function exercicio2Works(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio2');
        $I->see('Exercício 2');
        //Divided 2
        $I->fillField('numerodigitado', '2');
        $I->click("Enviar");
        $I->see('2 é divisível por 2');
        //Divided 5
        $I->fillField('numerodigitado', '5');
        $I->click("Enviar");
        $I->see('5 é divisível por 5');
        //Divided 10
        $I->fillField('numerodigitado', '10');
        $I->click("Enviar");
        $I->see('10 é divisível por 2, por 5 e 10');
        //Divided 5
        $I->fillField('numerodigitado', '45');
        $I->click("Enviar");
        $I->see('45 é divisível por 5');
        //Not divided
        $I->fillField('numerodigitado', '39');
        $I->click("Enviar");
        $I->see('39 não é divisível por 10, por 5, nem por 2');
    }
    public function exercicio3Works(AcceptanceTester $I)
    {        
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Name
        $I->fillField('name', 'Liliane');
        //female checkbox 
        $I->selectOption('sexo','mulher');
        //year
        $I->fillField('idade', '25');
        $I->click("Enviar");
        $I->see('Não aceita');
    
        //Female 24
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Name
        $I->fillField('name', 'Liliane');
        //female checkbox 
        $I->selectOption('sexo','mulher');
        //year
        $I->fillField('idade', '24');
        $I->click("Enviar");
        $I->see('aceita');

        //Male 24
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Name
        $I->fillField('name', 'João');
        //female checkbox 
        $I->selectOption('sexo','homem');
        //year
        $I->fillField('idade', '24');
        $I->click("Enviar");
        $I->see('Não aceita');

        //Male 25
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //name
        $I->fillField('name', 'João');
        //female checkbox 
        $I->selectOption('sexo','homem');
        //Year
        $I->fillField('idade', '25');
        $I->click("Enviar");
        $I->see('Não aceita');

        //Male 26
        $I->amOnPage('/exercicio3');
        $I->see('Exercício 3');
        //Name
        $I->fillField('name', 'João');
        //female checkbox 
        $I->selectOption('sexo','homem');
        //year
        $I->fillField('idade', '26');
        $I->click("Enviar");
        $I->see('Não aceita');
    }
    public function exercicio4Works(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio4');
        $I->see('Exercício 4');
        //numbers 3,4,5
        $I->fillField('n1', '3');
        $I->fillField('n2', '4');
        $I->fillField('n3', '5');
        $I->click("Enviar");
        $I->see('Os números informados em ordem decrescente são 5,4 e 3');
        
        ///numbers 5, 4 e 3
        $I->fillField('n1', '5');
        $I->fillField('n2', '4');
        $I->fillField('n3', '3');
        $I->click("Enviar");
        $I->see('Os números informados em ordem decrescente são 5,4 e 3');
        
        ///numbers 4, 5 e 3
        $I->fillField('n1', '4');
        $I->fillField('n2', '5');
        $I->fillField('n3', '3');
        $I->click("Enviar");
        $I->see('Os números informados em ordem decrescente são 5,4 e 3');
        
        ///números 4, 3 e 5 - esse tinha dado errado
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
