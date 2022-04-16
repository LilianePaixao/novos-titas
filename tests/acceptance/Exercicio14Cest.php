<?php

class Exercicios14Cest
{
    
    public function studentsRegisterTests(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio14');
        $I->see('Exercício 14');
        //Numbers 150 and 110
        $I->fillField('higth1', '150');
        $I->fillField('growth1','2');
        $I->fillField('higth2', '110');
        $I->fillField('growth2','3');
        $I->click("enviar");
        $I->see('Serão necessários 41 anos, para que o segundo estudante seja maior que o primeiro estudante informado.' );
        //Numbers 110 and 150
        $I->fillField('higth1', '110');
        $I->fillField('growth1','2');
        $I->fillField('higth2', '150');
        $I->fillField('growth2','3');
        $I->click("enviar");
        $I->see('Serão necessários 0 anos, para que o segundo estudante seja maior que o primeiro estudante informado.' );
        //Numbers 0 and 0
        $I->fillField('higth1', '0');
        $I->fillField('growth1','2');
        $I->fillField('higth2', '0');
        $I->fillField('growth2','3');
        $I->click("enviar");
        $I->see('Infome os dados que se pedem.' );
        //Numbers 0 and 0
        $I->fillField('higth1', '0');
        $I->fillField('growth1','0');
        $I->fillField('higth2', '0');
        $I->fillField('growth2','0');
        $I->click("enviar");
        $I->see('Infome os dados que se pedem. ' );
        //Numbers 0 and 0
        $I->fillField('higth1', '170');
        $I->fillField('growth1','5');
        $I->fillField('higth2', '110');
        $I->fillField('growth2','7');
        $I->click("enviar");
        $I->seeInDatabase('Estudantes', ['higth1' => '170', 'growth1'=>'5', 'higth2' => '110', 'growth2'=> '7']);
        $I->see('Serão necessários 31 anos, para que o segundo estudante seja maior que o primeiro estudante informado.' );
    }
}
