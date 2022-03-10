<?php

class Exercicios14Cest
{
    
    public function studentsRegisterTests(AcceptanceTester $I)
    {
        $I->amOnPage('http://localhost:8585/');
        $I->see('Índice');
        $I->click('Exercício 14');
    }
    public function DBTests(AcceptanceTester $I)
    {
        //$I->amOnPage('http://localhost:8282/index.php?route=/sql&db=exercicio14&table=Estudantes&pos=0');
        //$I->fillField('comment', 'This is nice!');
        //$I->click('Submit');
        $I->seeInDatabase('Estudantes', ['name' => 'Chico'], ['higth'=> '150']);
        $I->seeInDatabase('Estudantes', ['name' => 'Juca'], ['higth'=> '110']);
    }

        // //Numbers 110 and 150
        // $I->fillField('numero1', '110');
        // $I->fillField('numero2', '150');
        // $I->click("enviar");
        // $I->see('Serão necessários 41,' );
        // //Numbers 150 and 110
        // $I->fillField('numero1', '150');
        // $I->fillField('numero2', '110');
        // $I->click("enviar");
        // $I->see('Serão necessários 0, ' );
        // //Numbers 100 and 110
        // $I->fillField('numero1', '100');
        // $I->fillField('numero2', '110');
        // $I->click("enviar");
        // $I->see('Serão necessários 11, ' );
 
}
