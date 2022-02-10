<?php

class Exercicios567Cest
{
    
    public function triangleType(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio5');
        $I->see('Exercício 5');
        //same numbers
        $I->fillField('n1', '2');
        $I->fillField('n2', '2');
        $I->fillField('n3', '2');
        $I->click("Enviar");
        $I->see('Trata-se de um triângulo equilátero, porque possui todos os lados iguais: 2 , 2 e 2');
        //diferents numbers
        $I->fillField('n1', '2');
        $I->fillField('n2', '1');
        $I->fillField('n3', '3');
        $I->click("Enviar");
        $I->see('Trata-se de um triângulo escaleno, porque possui todos os lados diferentes: 3 , 1 e 2');
        //Two numbers equals
        $I->fillField('n1', '2');
        $I->fillField('n2', '2');
        $I->fillField('n3', '1');
        $I->click("Enviar");
        $I->see('Trata-se de um triângulo isósceles porque possui ao menos dois lados iguais2 , 2 e 1');
        //<=0
        $I->fillField('n1', '0');
        $I->fillField('n2', '-1');
        $I->fillField('n3', '2');
        $I->click("Enviar");
        $I->see('Os números informados devem ser superior a 0 (zero)');
    }
    public function MonthRelative(AcceptanceTester $I)
    {        
        $I->amOnPage('/exercicio6');
        $I->see('Exercício 6');
        // Number 1
        $I->fillField('n', '1');
        $I->click("Enviar");
        $I->see('O mês correspondente ao número digitado é janeiro');
        // Number 0
        $I->fillField('n', '0');
        $I->click("Enviar");
        $I->see('Não existe um mês relacionado ao número informado');
        // Negative number
        $I->fillField('n', '-1');
        $I->click("Enviar");
        $I->see('Não existe um mês relacionado ao número informado');
        //Above 12
        $I->fillField('n', '13');
        $I->click("Enviar");
        $I->see('Não existe um mês relacionado ao número informado');
    }
    public function TeacherBookLoan(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio7');
        $I->see('Exercício 7');
        //Name
        $I->fillField('nomedolivro', 'Águas');
        //teach checkbox 
        $I->selectOption('tipousuario','prof');
        $I->click("Enviar");
        $I->see('Professor você possui 10 dias para devolver o livro Águas');
        
        //Name
        $I->fillField('nomedolivro', 'Águas');
        //student checkbox 
        $I->selectOption('tipousuario','alu');
        $I->click("Enviar");
        $I->see('Aluno você possui 3 dias para devolver o livro Águas');
    }
}
